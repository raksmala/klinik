<?php namespace App\Controllers;

use App\Models\DataUserModel;
use App\Models\NotifikasiModel;

class DataUser extends BaseController
{
    public function index()
    {
        $model = new DataUserModel();
        $notifikasiModel = new NotifikasiModel();

        $data = [
            'user' => $model->getuser(),
            'notifikasi' => $notifikasiModel->getData(),
        ];

        return view('/Admin/DataUser', $data);
    }
}