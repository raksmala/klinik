<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class User extends Controller
{
    public function index()
    {
        $model = new UserModel();
        $data['users'] = $model->orderBy('id', 'DESC')->findAll();
        return view('user/index', $data);
    }

    public function create()
    {
        return view('user/create');
    }

    public function store()
    {
        helper(['form']);

        $rules = [
            'nama_lengkap' => 'required',
            'username' => 'required|min_length[5]|max_length[20]',
            'alamat' => 'required',
            'nomor_telepon' => 'required|numeric',
            'leveluser' => 'required'
        ];

        if($this->validate($rules)){
            $model = new UserModel();
            $data = [
                'nama_lengkap' => $this->request->getVar('nama_lengkap'),
                'username' => $this->request->getVar('username'),
                'alamat' => $this->request->getVar('alamat'),
                'no_telepon' => $this->request->getVar('no_telepon'),
                'leveluser' => $this->request->getVar('leveluser')
            ];
            $model->save($data);
            return redirect()->to('/user');
        } else {
            $data['validation'] = $this->validator;
            return view('user/create', $data);
        }
    }

    public function edit($id)
    {
        $model = new UserModel();
        $data['user'] = $model->where('id', $id)->first();
        return view('user/edit', $data);
    }

    public function update()
    {
        helper(['form']);

        $rules = [
            'nama_lengkap' => 'required',
            'username' => 'required|min_length[5]|max_length[20]',
            'alamat' => 'required',
            'no_telepon' => 'required|numeric',
            'leveluser' => 'required'
        ];

        if($this->validate($rules)){
            $model = new UserModel();
            $id = $this->request->getVar('id');
            $data = [
                'nama_lengkap' => $this->request->getVar('nama_lengkap'),
                'username' => $this->request->getVar('username'),
                'alamat' => $this->request->getVar('alamat'),
                'no_telepon' => $this->request->getVar('no_telepon'),
                'leveluser' => $this->request->getVar('leveluser')
            ];
            $model->update($id, $data);
            return redirect()->to('/user');
        } else {
            $data['validation'] = $this->validator;
            $data['user'] = $this->request->getVar();
            return view('user/edit', $data);
        }
    }

    public function delete($id)
    {
        $model = new UserModel();
        $model->delete($id);
        return redirect()->to('/user');
    }
}
