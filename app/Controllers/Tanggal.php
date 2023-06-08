<?php

namespace App\Controllers;

use App\Models\DataModel;

class Tanggal extends BaseController
{
    public function index()
    {
        return view('/Reservasi/RFacialGold'); // Ganti 'data/index' dengan view yang ingin Anda tampilkan
    }

    public function getDataByDate()
    {
        $tanggal = $this->request->getPost('tanggal');

        $model = new Tanggal();
        $data = $model->getDataByDate($tanggal);

        return view('/Reservasi/RFacialGold', ['data' => $data]); // Ganti 'data/index' dengan view yang ingin Anda tampilkan
    }
}
