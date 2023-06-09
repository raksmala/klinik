<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'user_id';
    protected $allowedFields = ['nama_lengkap', 'username', 'alamat', 'nomor_telepon', 'password', 'level_user'];
    public function getUsers()
    {
        return $this->db->table('user')->get()->getResultArray();
    }
}
