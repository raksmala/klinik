<?php 

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\RiwayatModel;

class Riwayat extends Controller
{
protected $mriwayat;
    public function __construct(){
        $this->mriwayat = new RiwayatModel();
    }   

    public function index()
    {
        $getdata = $this->mriwayat->getdata();
        $data = array(
            'datareservasi' => $getdata,

        );

        return view('home/Riwayat', $data);
    }

}
