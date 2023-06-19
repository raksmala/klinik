<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\NotifikasiModel;
use CodeIgniter\Controller;

class UserController extends Controller
{
    public function index()
    {
        $model = new UserModel();
        $notifikasiModel = new NotifikasiModel();
        $data['users'] = $model->findAll();
        $data['notifikasi'] = $notifikasiModel->getData();
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
            'password' => md5($this->request->getVar('password')),
            'alamat' => $this->request->getVar('alamat'),
            'nomor_telepon' => $this->request->getVar('nomor_telepon'),
            'level_user' => $this->request->getVar('level_user')
        ];
        $model->insert($data);
        return redirect()->to(base_url('/Admin/User'));
    }

    public function edit($id)
    {
        $model = new UserModel();
        $notifikasiModel = new NotifikasiModel();
        $data['user'] = $model->find($id);
        $data['notifikasi'] = $notifikasiModel->getData();
        echo view('user/edit', $data);
        
    }

    public function update($id)
    {
        $model = new UserModel();
        
        $user = $model->find($id);

        $user['nama_lengkap'] = $this->request->getVar('nama_lengkap');
        $user['username'] = $this->request->getVar('username');
        $user['alamat'] = $this->request->getVar('alamat');
        $user['nomor_telepon'] = $this->request->getVar('nomor_telepon');
        $user['level_user'] = $this->request->getVar('level_user');

        $model->save($user);

        return redirect()->to(base_url('/Admin/User'));
    }

    public function delete($id)
    {
        $model = new UserModel();
        $model->delete($id);
        return redirect()->to(base_url('/Admin/User'));
    }
}
