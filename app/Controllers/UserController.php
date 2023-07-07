<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\NotifikasiModel;
use CodeIgniter\Controller;
use Dompdf\Dompdf;

class UserController extends Controller
{
    public function index()
    {
        $isAdmin = $this->checkLogin();
        if(!$isAdmin) { return redirect()->to(base_url('layout/login')); }
        
        $model = new UserModel();
        $notifikasiModel = new NotifikasiModel();
        $data['users'] = $model->findAll();
        $data['notifikasi'] = $notifikasiModel->getData();
        echo view('user/index', $data);
    }

    public function create()
    {
        $isAdmin = $this->checkLogin();
        if(!$isAdmin) { return redirect()->to(base_url('layout/login')); }
        
        $notifikasiModel = new NotifikasiModel();
        $data['notifikasi'] = $notifikasiModel->getData();
        echo view('user/create', $data);
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
        $isAdmin = $this->checkLogin();
        if(!$isAdmin) { return redirect()->to(base_url('layout/login')); }
        
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

    public function updateProfile($id)
    {
        $model = new UserModel();
        
        $user = $model->find($id);

        $user['nama_lengkap'] = $this->request->getVar('nama_lengkap');
        $user['username'] = $this->request->getVar('username');
        $user['alamat'] = $this->request->getVar('alamat');
        $user['nomor_telepon'] = $this->request->getVar('nomor_telepon');

        if($this->request->getVar('password') != null) {
            $user['password'] = md5($this->request->getVar('password'));
        }

        $model->save($user);

        $data = [
            'user_id' => session()->get('user_id'),
            'nama_lengkap'    => $user['nama_lengkap'],
            'username' => $user['username'],
            'nomor_telepon' => $user['nomor_telepon'],
            'alamat' => $user['alamat'],
            'logged_in' => TRUE,
        ];
        session()->set($data);

        return redirect()->to(base_url('/home/user/profile'));
    }

    public function delete($id)
    {
        $model = new UserModel();
        $model->delete($id);
        return redirect()->to(base_url('/Admin/User'));
    }

    public function export()
    {
        $model = new UserModel();
        $data['users'] = $model->findAll();

        // filename
        $filename = 'user_' . date('YmdHis') . '.pdf';
        
        // instantiate and use the dompdf class
        $dompdf = new Dompdf();

        // load HTML content
        $dompdf->loadHtml(view('user/export', $data));

        // (optional) setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');

        // render html as PDF
        $dompdf->render();

        // output the generated pdf
        $dompdf->stream($filename);
    }
}
