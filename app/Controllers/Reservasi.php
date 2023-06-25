<?php 

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ReservasiModel;
use App\Models\SendMessageModel;
use App\Models\UserModel;
use App\Models\NotifikasiModel;
use Dompdf\Dompdf;
use DateTime;

class Reservasi extends Controller
{
    protected $reservasiModel, $sendMessageModel, $userModel, $notifikasiModel;

    public function __construct(){
        $this->reservasiModel = new ReservasiModel();
        $this->sendMessageModel = new SendMessageModel();
        $this->userModel = new UserModel();
        $this->notifikasiModel = new NotifikasiModel();
    }   

    public function index()
    {
        $isAdmin = $this->checkLogin();
        if(!$isAdmin) { return redirect()->to(base_url('layout/login')); }
        
        $getdata = $this->reservasiModel->getdata();
        $notifikasi = $this->notifikasiModel->getData();
        $data = array(
            'dataReservasi' => $getdata,
            'notifikasi' => $notifikasi,
        );

        return view('adminReservasi/index', $data);
    }

    public function edit($id_reservasi)
    {
        $isAdmin = $this->checkLogin();
        if(!$isAdmin) { return redirect()->to(base_url('layout/login')); }
        
        $data['notifikasi'] = $this->notifikasiModel->getData();
        $data['dataReservasi'] = $this->reservasiModel->find($id_reservasi);
        $data['user'] = $this->userModel->find($data['dataReservasi']['user_id']);

        return view('adminReservasi/edit', $data);
    }

    public function update($id_reservasi)
    {
        $reservasi = $this->reservasiModel->find($id_reservasi);
        $user = $this->userModel->find($reservasi['user_id']);

        $data = [
            'status_reservasi' => $this->request->getPost('status_reservasi'),
        ];

        $this->reservasiModel->updateReservasi($id_reservasi, $data);
        
        $status = $this->request->getPost('status_reservasi');
        $pesanStatus = '';
        if($status == 'Dalam Proses') {
            $pesanStatus = 'diproses';
        } else if($status == 'Proses') {
            $pesanStatus = 'terkonfirmasi';
        } else if($status == 'Selesai') {
            $pesanStatus = 'selesai';
        } else if($status == 'Batal') {
            $pesanStatus = 'dibatalkan';
        }

        // set jadwal
        $jamReservasi = substr($reservasi['sesi_reservasi'], 0, 5);
        $jamReservasi = str_replace('.', ':', $jamReservasi);
        // current is gmt+7 convert to gmt+0
        $jamReservasi = date('H:i', strtotime($jamReservasi) - 8 * 3600);
        $dateString = $reservasi['tgl_reservasi'] . ' ' . $jamReservasi . ':00';
        $datetime = new DateTime($dateString);

        // convert ke unix timestamp
        $timestamp = $datetime->getTimestamp();

        $message = "Halo " . $user['nama_lengkap'] . "! Reservasi treatment anda pada tanggal " . date('d-m-Y', strtotime($reservasi['tgl_reservasi'])) . " sesi " . $reservasi['sesi_reservasi'] . " telah " . $pesanStatus . ". Silahkan datang 15 menit sebelum tindakan treatment dimulai, jika berhalangan hadir segera hubungi Admin. Terima kasih.\n- Adiva Beauty Skin -";
        $send = $this->sendMessageModel->kirimPesan($user['nomor_telepon'], $message);
        $send = json_decode($send);
        $res_detail = $send->detail;
        $res_status = $send->status;
        
        if ($res_status == true && $res_detail == "success! message in queue") {
            // kirim pesan h-1 jam
            if($status == 'Proses') {
                $messageJadwal = "Halo " . $user['nama_lengkap'] . "! Hari ini adalah jadwal reservasi treatment anda. Treatment akan dilakukan pada pukul " . $reservasi['sesi_reservasi'] . ", Silahkan datang 15 menit sebelum treatment dimulai. Apabila berhalangan hadir mohon segera konfirmasi admin, jika melebihi sesi yang telah ditentukan maka reservasi treatment anda akan kami batalkan. Terimakasih.\n- Admin Adiva Beauty Skin -";
                $this->sendMessageModel->kirimPesanJadwal($user['nomor_telepon'], $messageJadwal, $timestamp);
            }

            session()->setFlashdata('pesan', 'Status reservasi berhasil diubah');
            return redirect()->to('/Admin/Reservasi');
        } else {
            session()->setFlashdata('pesan', 'Status reservasi gagal diubah');
            return redirect()->to('/Admin/Reservasi/edit/' . $id_reservasi . '');
        }
    }

    public function batal($id_reservasi)
    {
        $reservasi = $this->reservasiModel->find($id_reservasi);
        $user = $this->userModel->find($reservasi['user_id']);
        $message = "Halo " . $user['nama_lengkap'] . ",\nMaaf reservasi anda *" . $reservasi['nama_treatment'] . "* telah dibatalkan oleh Admin\nMohon maaf atas ketidaknyamanannya.\n\nTerima kasih.\nAdiva Beauty Skin";
        $send = $this->sendMessageModel->kirimPesan($user['nomor_telepon'], $message);
        $send = json_decode($send);
        $res_detail = $send->detail;
        $res_status = $send->status;
        
        if ($res_status == true && $res_detail == "success! message in queue") {
            $now = date('Y-m-d H:i:s');
            $data = [
                'is_deleted' => $now,
            ];
    
            $this->reservasiModel->updateReservasi($reservasi['id_reservasi'], $data);
            session()->setFlashdata('pesan', 'Reservasi berhasil dibatalkan');
            return redirect()->to('/Admin/Reservasi');
        } else {
            session()->setFlashdata('pesan', 'Reservasi gagal dibatalkan');
            return redirect()->to('/Admin/Reservasi');
        }
    }

    public function export()
    {
        $data['dataReservasi'] = $this->reservasiModel->getdata();
        // filename
        $filename = 'reservasi_' . date('YmdHis') . '.pdf';
        
        // instantiate and use the dompdf class
        $dompdf = new Dompdf();

        // load HTML content
        $dompdf->loadHtml(view('adminReservasi/export', $data));

        // (optional) setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');

        // render html as PDF
        $dompdf->render();

        // output the generated pdf
        $dompdf->stream($filename);
    }
}
