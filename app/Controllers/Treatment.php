<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\TreatmentModel;

class Treatment extends Controller
{
    protected $mtreatment;
    protected $table = "treatment";
    public function __construct()
    {
        $this->treatmentModel = new TreatmentModel();
    }

    public function index()
    {
        $getdata = $this->treatmentModel->getdata();
        $data = array(
            'dataTreatment' => $getdata,
        );

        return view('adminTreatment/index', $data);
    }

    public function create()
    {
        echo view('adminTreatment/create');
    }

    function simpan()
    {
        $sesi_treatment = [
            '08.00 - 10.00' => $this->request->getPost('sesi_treatment_1'),
            '10.00 - 12.00' => $this->request->getPost('sesi_treatment_2'),
            '12.45 - 15.00' => $this->request->getPost('sesi_treatment_3'),
            '15.00 - 17.00' => $this->request->getPost('sesi_treatment_4'),
        ];

        $data = [
            'nama_treatment' => $this->request->getPost('nama_treatment'),
            'jenis_treatment' => $this->request->getPost('jenis_treatment'),
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
        $data['dataTreatment'] = $this->treatmentModel->find($id);

        return view('adminTreatment/edit', $data);
    }

    public function update($id)
    {
        $treatment = $this->treatmentModel->find($id);

        $sesi_treatment = [
            '08.00 - 10.00' => $this->request->getPost('sesi_treatment_1'),
            '10.00 - 12.00' => $this->request->getPost('sesi_treatment_2'),
            '12.45 - 15.00' => $this->request->getPost('sesi_treatment_3'),
            '15.00 - 17.00' => $this->request->getPost('sesi_treatment_4'),
        ];

        $treatment = [
            'nama_treatment' => $this->request->getPost('nama_treatment'),
            'jenis_treatment' => $this->request->getPost('jenis_treatment'),
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
}
