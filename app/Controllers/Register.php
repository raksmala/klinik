<?php

namespace App\Controllers;

use App\Models\ModelUser;
use CodeIgniter\Controller;
// use App\Models\usermodel;

class Register extends Controller
{

	public function index()
	{
		//include helper form
		helper(['form']);
		$data = [];
		echo view('register', $data);
	}

	public function save()
	{
		//include helper form
		helper(['form']);
		//set rules validation form
		$rules = [
			'name' 			=> 'required|min_length[3]|max_length[20]',
		];
		// get method post
		if ($this->request->getMethod() == 'post') {
			$this->modelUser = new ModelUser();
			// data user dan password
			$nama_lengkap 	= htmlspecialchars($this->request->getPost('nama'));
			$username	= htmlspecialchars($this->request->getPost('username'));
			$password = htmlspecialchars(md5($this->request->getPost('password')));
			$alamat	= htmlspecialchars($this->request->getPost('alamat'));
			$nomor_telepon	= htmlspecialchars($this->request->getPost('nomor_telepon'));
			$level_user	= htmlspecialchars($this->request->getPost('level_user'));
			// input data register ke dalam database user
			$this->modelUser->insert([
				'nama_lengkap' 	=> $nama_lengkap,
				'username' 	=> $username,
				'password' => $password,
				'alamat' 	=> $alamat,
				'nomor_telepon' 	=> $nomor_telepon,
				'level_user' => 'Pelanggan',
			]);
			session()->setFlashdata('pesan', 'Selamat Anda Berhasil Registrasi');
			return redirect()->to('/layout/login');
		} else {
			$data['validation'] = $this->validator;
			echo view('register', $data);
		}
	}
}
