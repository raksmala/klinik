<?php

namespace App\Controllers;

use App\Models\ReservasiModel;
use App\Models\TreatmentModel;
use Dompdf\Dompdf;

class Home extends BaseController
{
    protected $reservasiModel, $treatmentModel;
    public function __construct()
    {
        $this->reservasiModel = new ReservasiModel();
        $this->treatmentModel = new TreatmentModel();
        $this->jenisTreatment = $this->treatmentModel->getJenisTreatment();
    }

    public function index()
    {
        $dataHeader['jenis_treatment'] = $this->jenisTreatment;
        echo view('layout/header', $dataHeader);
        echo view('Beranda');
        echo view('layout/footer');
    }

    public function klinik()
    {
        $dataHeader['jenis_treatment'] = $this->jenisTreatment;
        echo view('layout/header', $dataHeader);
        echo view('home/klinik');
        echo view('layout/footer');
    }

    public function BeforeAfter()
    {
        $dataHeader['jenis_treatment'] = $this->jenisTreatment;
        echo view('layout/header', $dataHeader);
        echo view('home/BeforeAfter');
        echo view('layout/footer');
    }

    public function Riwayat()
    {
        $data['reservasi'] = $this->reservasiModel->getReservasi(session()->user_id);
        $dataHeader['jenis_treatment'] = $this->jenisTreatment;
        echo view('layout/header', $dataHeader);
        echo view('home/Riwayat', $data);
        echo view('layout/footer');
    }

    public function Treatment($jenis)
    {
        $data['treatments'] = $this->treatmentModel->getTreatment($jenis);
        $dataHeader['jenis_treatment'] = $this->jenisTreatment;
        echo view('layout/header', $dataHeader);
        echo view('home/Treatment', $data);
        echo view('layout/footer');
    }

    public function Detail($treatment)
    {
        $data['detail'] = $this->treatmentModel->getDetail($treatment);
        $dataHeader['jenis_treatment'] = $this->jenisTreatment;
        echo view('layout/header', $dataHeader);
        echo view('home/Detail', $data);
        echo view('layout/footer');
    }

    public function Reservasi($treatment)
    {
        $data['detail'] = $this->treatmentModel->getDetail($treatment);
        $dataHeader['jenis_treatment'] = $this->jenisTreatment;
        echo view('layout/header', $dataHeader);
        echo view('home/Reservasi', $data);
        echo view('layout/footer');
    }

    public function Login()
    {
        $dataHeader['jenis_treatment'] = $this->jenisTreatment;
        echo view('layout/header', $dataHeader);
        echo view('layout/login');
        echo view('layout/footer');
    }

    public function LoginAdmin()
    {
        echo view('layout/header');
        echo view('Admin/Login');
        echo view('layout/footer');
    }

    public function Register()
    {
        $dataHeader['jenis_treatment'] = $this->jenisTreatment;
        echo view('layout/header', $dataHeader);
        echo view('layout/register');
        echo view('layout/footer');
    }

    public function Home()
    {
        echo view('Admin/Home');
    }

    public function Dasboard()
    {
        echo view('Admin/Dasboard');
    }

    public function Laporan()
    {
        $data['treatment'] = $this->treatmentModel->getdata();
        echo view('Admin/Laporan', $data);
    }

    public function DAdmin()
    {
        echo view('Admin/DAdmin');
    }

    public function simpan()
    {
        $data = [
            'tgl_reservasi' => $this->request->getPost('tanggal'),
            'sesi_reservasi' => $this->request->getPost('jam'),
            'nama_lengkap' => $this->request->getPost('nama_lengkap'),
            'alamat' => $this->request->getPost('alamat'),
            'nomor_telepon' => $this->request->getPost('nomor_telepon'),
            'nama_treatment' => $this->request->getPost('nama_treatment'),
            'total' => $this->request->getPost('total'),
            'status_pembayaran' => 'Dalam Proses',
            'user_id' => $this->request->getPost('user_id'),
        ];
        // remove Rp. and .
        $data['total'] = str_replace(['Rp. ', '.'], '', $data['total']);
        $data['total'] = trim($data['total']);
        $this->reservasiModel->insertData($data);

        $redirect = '/home/Riwayat';
        return redirect()->to($redirect);
    }

    public function cekSesi()
    {
        $tanggal = $this->request->getVar('tanggal');
        $treatment = $this->request->getVar('treatment');

        $sesi = $this->reservasiModel->cekSesi($treatment, $tanggal);
        return json_encode($sesi);
    }

    public function harian($tanggal)
    {
        $tanggalAwal = $tanggal;
        $tanggalAkhir = $tanggal;
        $data['dataReservasi'] = $this->reservasiModel->getDataRange($tanggalAwal, $tanggalAkhir);
        // filename
        $filename = 'reservasi_' . date('YmdHis') . '.pdf';
        
        // instantiate and use the dompdf class
        $dompdf = new Dompdf();

        // load HTML content
        $dompdf->loadHtml(view('Admin/laporan_pdf', $data));

        // (optional) setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');

        // render html as PDF
        $dompdf->render();

        // output the generated pdf
        $dompdf->stream($filename);
    }

    public function bulanan($bulan)
    {
        $tanggalAwal = $bulan . '-01';
        $tanggalAkhir = $bulan . '-31';
        $data['dataReservasi'] = $this->reservasiModel->getDataRange($tanggalAwal, $tanggalAkhir);
        // filename
        $filename = 'reservasi_' . date('YmdHis') . '.pdf';
        
        // instantiate and use the dompdf class
        $dompdf = new Dompdf();

        // load HTML content
        $dompdf->loadHtml(view('Admin/laporan_pdf', $data));

        // (optional) setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');

        // render html as PDF
        $dompdf->render();

        // output the generated pdf
        $dompdf->stream($filename);
    }

    public function tahunan($tahun)
    {
        $tanggalAwal = $tahun . '-01-01';
        $tanggalAkhir = $tahun . '-12-31';
        $data['dataReservasi'] = $this->reservasiModel->getDataRange($tanggalAwal, $tanggalAkhir);
        // filename
        $filename = 'reservasi_' . date('YmdHis') . '.pdf';
        
        // instantiate and use the dompdf class
        $dompdf = new Dompdf();

        // load HTML content
        $dompdf->loadHtml(view('Admin/laporan_pdf', $data));

        // (optional) setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');

        // render html as PDF
        $dompdf->render();

        // output the generated pdf
        $dompdf->stream($filename);
    }

    public function laporanTreatment($nama_treatment)
    {
        $data['dataReservasi'] = $this->reservasiModel->getDataTreatment($nama_treatment);
        // filename
        $filename = 'reservasi_' . date('YmdHis') . '.pdf';
        
        // instantiate and use the dompdf class
        $dompdf = new Dompdf();

        // load HTML content
        $dompdf->loadHtml(view('Admin/laporan_pdf', $data));

        // (optional) setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');

        // render html as PDF
        $dompdf->render();

        // output the generated pdf
        $dompdf->stream($filename);
    }
}
