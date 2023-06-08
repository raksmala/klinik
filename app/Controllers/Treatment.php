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
        $this->mtreatment = new TreatmentModel();
    }

    public function index()
    {
        $getdata = $this->mtreatment->getdata();
        $data = array(
            'dataTreatment' => $getdata,

        );

        return view('Admin/Treatment', $data);
    }

    function simpan()
    {
        
        $nama_treatment = $this->request->getPost("nama_treatment");
        $jenis_treatment = $this->request->getPost("jenis_treatment");
        
    
        $data = [
            'nama_treatment' => $nama_treatment,
            'jenis_treatment' => $jenis_treatment,
        ];
        return redirect()->to(base_url('/Admin/Treatment'));

        // try {
        //     $simpan = $this->mtreatment->simpanData($this->table,$data);
        //     if($simpan){
        //         echo '<script>alert("Data berhasil disimpan"); window.location('.base_url('/adminTreatment/create').');</script>';
        //     }else{
        //         echo '<script>alert("Data gagal disimpan"); window.location('.base_url('/adminTreatment/create').');</script>';
        //     }
        //     }
        // }
    }


    // public function export()
    // {
    //     echo "export data ";
    // }

    public function create()
    {
        echo view('adminTreatment/create');
    }

    // public function pdf()
    // {
    //     $this->load->library('dompdf_gen');
    //     $data['dataTreatment'] = $this->mtreatment->tampil_data('treatment')->result();
    //     $this->load->view('laporan_pdf', $data);
    //     $paper_size = 'A4';
    //     $orientation = 'landscape';
    //     $html = $this->output->get_output();
    //     $this->dompdf->set_paper($paper_size, $orientation);
    //     $this->dompdf->load_html($html);
    //     $this->dompdf->render();
    //     $this->dompdf->stream("laporan_treatment.pdf", array('Attachment' => 0));
    // }
}
