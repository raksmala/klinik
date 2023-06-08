<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelAdmin;

class Login extends BaseController
{
    function __construct()
    {
        $this->ModelAdmin = new ModelAdmin();
    }

    public function index()
    {
        $data = [
            'title' => 'Login',
            'pages' => 'login',
        ];
        return view('Admin/Login', $data);
    }
}