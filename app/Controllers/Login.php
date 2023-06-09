<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelAdmin;
use App\Models\ModelUser;

class Login extends BaseController
{
    function __construct()
    {
        $this->ModelUser = new ModelUser();
        $this->ModelAdmin = new ModelAdmin();
    }

    public function index()
    {
        $data = [
            'title' => 'Login',
            'pages' => 'login',
        ];
        return view('layout/login', $data);
    }

    public function login()
    {
        // get method post
        if ($this->request->getMethod() == 'post') {

            // data username dan password
            $username = htmlspecialchars($this->request->getVar('Username'));
            $password = htmlspecialchars(md5($this->request->getVar('Password')));

            // mengambil data user berdasarkan username
            $Admin = $this->ModelAdmin->login($username, $password);
            $user = $this->ModelUser->login($username, $password);

            if ($user) {
                if ($username != $user['username']) {
                    // session()->seFlashdata('pesan', 'Maaf, Username Salah.');
                    return redirect()->to(base_url('layout/login'));
                } else {
                    if ($password != $user['password']) {
                        session()->setFlashdata('pesan', 'Maaf, Username atau Password Salah.');
                        return redirect()->to(base_url('layout/login'));
                    } else {
                        $data = [
                            'user_id' => $user['user_id'],
                            'nama_lengkap'    => $user['nama_lengkap'],
                            'password' => $user['password'],
                            'username' => $user['username'],
                            'nomor telepon' => $user['nomor_telepon'],
                            'alamat' => $user['alamat'],
                            'level_user' => $user['level_user'],
                            'logged_in' => TRUE,
                        ];
                        session()->set($data);
                        session()->set('pesan', 'Selamat Datang, ' . ucfirst($user['username']));
                        session()->set('nama_lengkap', ucfirst($user['nama_lengkap']));
                        session()->set('alamat', ucfirst($user['alamat']));
                        session()->set('nomor_telepon', ucfirst($user['nomor_telepon']));
                        
                        $redirect = base_url('');
                        if($user['level_user'] == 'Admin') {
                            $redirect = base_url('Admin/Home');
                        }
                        return redirect()->to($redirect);
                    }
                }
            } else if ($Admin) {
                if ($username != $Admin['username']) {
                    session()->setFlashdata('pesan', 'Maaf, username Salah.');
                    return redirect()->to(base_url('Admin/Login'));
                } else {
                    if ($password != $Admin['password']) {
                        session()->setFlashdata('pesan', 'Selamat Anda Berhasil Login, ' . ucfirst($Admin['username']));
                        return redirect()->to(base_url('Admin/Login'));
                    } else {
                        $data = [
                            'user_id' => $Admin['user_id'],
                            'nama_lengkap'    => $Admin['nama_lengkap'],
                            'password' => $Admin['password'],
                            'username' => $Admin['username'],
                            'nomor telepon' => $Admin['nomor_telepon'],
                            'alamat' => $Admin['alamat'],
                            'level_user' => $Admin['level_user'],
                            'logged_in' => TRUE,
                        ];
                        session()->set($data);
                        session()->setFlashdata('pesan', 'Selamat Anda Berhasil Login, ' . ucfirst($Admin['username']));
                        return redirect()->to(base_url());
                    }
                }
                // } else {
                //     session()->setFlashdata('pesan', 'Maaf, Username atau Password Salah.');
                //     return redirect()->to(base_url('layout/login'));
                // }
            } else {
                session()->setFlashdata('error', 'Username atau Password Salah!');
                return redirect()->to(base_url('layout/login'));
            }
        } else {
            return redirect()->to(base_url('layout/login'));
        }
    }
    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url());
    }
}
