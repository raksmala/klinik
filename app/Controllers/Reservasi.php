<?php 

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ReservasiModel;

class Reservasi extends Controller
{
protected $mreservasi;
    public function __construct(){
        $this->mreservasi = new ReservasiModel();
    }   

    public function index()
    {
        $getdata = $this->mreservasi->getdata();
        $data = array(
            'dataReservasi' => $getdata,

        );

        return view('Admin/Reservasi', $data);
    }

    public function export()
    {
        echo "export data ";
    }
    
}
