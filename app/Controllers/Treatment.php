<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\TreatmentModel;
use App\Models\NotifikasiModel;
use Dompdf\Dompdf;

class Treatment extends Controller
{
    protected $treatmentModel, $notifikasiModel;
    protected $table = "treatment";
    public function __construct()
    {
        $this->treatmentModel = new TreatmentModel();
        $this->notifikasiModel = new NotifikasiModel();
    }

    public function index()
    {
        $isAdmin = $this->checkLogin();
        if(!$isAdmin) { return redirect()->to(base_url('layout/login')); }
        
        $getdata = $this->treatmentModel->getdata();
        $notifikasi = $this->notifikasiModel->getData();
        $data = array(
            'dataTreatment' => $getdata,
            'notifikasi' => $notifikasi,
        );

        return view('adminTreatment/index', $data);
    }

    public function create()
    {
        $isAdmin = $this->checkLogin();
        if(!$isAdmin) { return redirect()->to(base_url('layout/login')); }

        $data['notifikasi'] = $this->notifikasiModel->getData();
        
        echo view('adminTreatment/create', $data);
    }

    function simpan()
    {
        $sesi_treatment = [
            '08.00 - 10.00' => $this->request->getPost('sesi_treatment_1'),
            '10.00 - 12.00' => $this->request->getPost('sesi_treatment_2'),
            '12.45 - 15.00' => $this->request->getPost('sesi_treatment_3'),
            '15.00 - 17.00' => $this->request->getPost('sesi_treatment_4'),
        ];

        // handle file upload gambar_treatment to img/treatment
        $fileGambarTreatment = $this->request->getFile('gambar_treatment');
        $fileGambarTreatment->move('img/treatment');
        $namaGambarTreatment = $fileGambarTreatment->getName();

        $data = [
            'nama_treatment' => $this->request->getPost('nama_treatment'),
            'jenis_treatment' => $this->request->getPost('jenis_treatment'),
            'gambar_treatment' => $namaGambarTreatment,
            'desc_treatment' => $this->request->getPost('desc_treatment'),
            'harga_treatment' => $this->request->getPost('harga_treatment'),
            'durasi_treatment' => $this->request->getPost('durasi_treatment'),
            'jangka_ulang_treatment' => $this->request->getPost('jangka_ulang_treatment'),
            'tahap_treatment' => json_encode($this->request->getPost('tahap_treatment')),
            'manfaat_treatment' => json_encode($this->request->getPost('manfaat_treatment')),
            'perhatian' => json_encode($this->request->getPost('perhatian')),
            'sesi_treatment' => json_encode($sesi_treatment),
        ];

        $this->treatmentModel->simpanData('treatment', $data);

        return redirect()->to(base_url('/Admin/Treatment'));
    }

    public function edit($id)
    {
        $isAdmin = $this->checkLogin();
        if(!$isAdmin) { return redirect()->to(base_url('layout/login')); }
        
        $data['notifikasi'] = $this->notifikasiModel->getData();
        $data['dataTreatment'] = $this->treatmentModel->find($id);

        return view('adminTreatment/edit', $data);
    }

    public function update($id)
    {
        $treatment = $this->treatmentModel->find($id);

        // handle file upload gambar_treatment to img/treatment
        $image = $this->request->getFile('gambar_treatment');
        $newName = $image->getName();
        $path = 'img/treatment/' . $newName;
        if ($image->isValid() && ! $image->hasMoved()) {
            // random name file
            $newName = $image->getRandomName();

            // pindahkan file ke folder img/treatment
            $image->move('img/treatment', $newName);
            $path = 'img/treatment/' . $newName;
        }

        $sesi_treatment = [
            '08.00 - 10.00' => $this->request->getPost('sesi_treatment_1'),
            '10.00 - 12.00' => $this->request->getPost('sesi_treatment_2'),
            '12.45 - 15.00' => $this->request->getPost('sesi_treatment_3'),
            '15.00 - 17.00' => $this->request->getPost('sesi_treatment_4'),
        ];

        $treatment = [
            'nama_treatment' => $this->request->getPost('nama_treatment'),
            'jenis_treatment' => $this->request->getPost('jenis_treatment'),
            'gambar_treatment' => $path,
            'desc_treatment' => $this->request->getPost('desc_treatment'),
            'harga_treatment' => $this->request->getPost('harga_treatment'),
            'durasi_treatment' => $this->request->getPost('durasi_treatment'),
            'jangka_ulang_treatment' => $this->request->getPost('jangka_ulang_treatment'),
            'tahap_treatment' => json_encode($this->request->getPost('tahap_treatment')),
            'manfaat_treatment' => json_encode($this->request->getPost('manfaat_treatment')),
            'perhatian' => json_encode($this->request->getPost('perhatian')),
            'sesi_treatment' => json_encode($sesi_treatment),
        ];
        
        $this->treatmentModel->updateTreatment($id, $treatment);

        return redirect()->to(base_url('/Admin/Treatment'));
    }

    public function hapus($id)
    {
        $now = date('Y-m-d H:i:s');
        $data = [
            'is_deleted' => $now,
        ];

        $this->treatmentModel->updateTreatment($id, $data);

        return redirect()->to(base_url('/Admin/Treatment'));
    }

    public function export()
    {
        $data['dataTreatment'] = $this->treatmentModel->getdata();

        // filename
        $filename = 'treatment_' . date('YmdHis') . '.pdf';
        
        // instantiate and use the dompdf class
        $dompdf = new Dompdf();

        // load HTML content
        $dompdf->loadHtml(view('adminTreatment/export', $data));

        // (optional) setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');

        // render html as PDF
        $dompdf->render();

        // output the generated pdf
        $dompdf->stream($filename);
    }
}
