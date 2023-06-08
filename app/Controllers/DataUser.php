<?php namespace App\Controllers;

use App\Models\DataUserModel;

class DataUser extends BaseController
{
    public function index()
    {
        $model = new DataUserModel();

        $data = [
            'user' => $model->getuser()
        ];

        return view('/Admin/DataUser', $data);
    }
}