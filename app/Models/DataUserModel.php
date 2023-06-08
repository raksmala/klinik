<?php

namespace App\Models;

use CodeIgniter\Model;

class DataUserModel extends Model
{
    protected $table = 'user';
    protected $allowedFields = ['user_id', 'nama_lengkap', 'username', 'alamat', 'nomor_telepon', 'password', 'level_user'];

    public function getuser()
    {
        return $this->db->table('user')->get()->getResultArray();

    }
}
