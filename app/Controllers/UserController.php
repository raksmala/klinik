<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class UserController extends Controller
{
    public function index()
    {
        $model = new UserModel();
        $data['users'] = $model->findAll();
        echo view('user/index', $data);
    }

    public function create()
    {
        echo view('user/create');
    }

    public function store()
    {
        $model = new UserModel();
        $data = [
            'nama_lengkap' => $this->request->getVar('nama_lengkap'),
            'username' => $this->request->getVar('username'),
            'alamat' => $this->request->getVar('alamat'),
            'nomor_telepon' => $this->request->getVar('nomor_telepon'),
            'level_user' => $this->request->getVar('level_user')
        ];
        $model->insert($data);
        return redirect()->to(base_url('user'));
    }

    public function edit($id)
    {
        $model = new UserModel();
        $data['user'] = $model->find($id);
        echo view('user/edit', $data);
        
    }

    public function update()
    {
        $model = new UserModel();
        $id = $this->request->getVar('user_id');
        $data = [
            'nama_lengkap' => $this->request->getVar('nama_lengkap'),
            'username' => $this->request->getVar('username'),
            'alamat' => $this->request->getVar('alamat'),
            'nomor_telepon' => $this->request->getVar('nomor_telepon'),
            'level_user' => $this->request->getVar('level_user')
        ];
        $model->update($id, $data);
        return redirect()->to(base_url('user'));
    }
    public function delete($id)
    {
        $model = new UserModel();
        $model->delete($id);
        return redirect()->to(base_url('user'));
    }
}
