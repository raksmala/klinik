<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelAdmin extends Model
{
    protected $table            = 'user';
    protected $primaryKey       = 'user_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $protectFields    = true;
    protected $allowedFields    = [
        'user_id',
        'nama_lengkap',
        'alamat',
        'nomor_telepon',
        'username',
        'password',
        'level_user',
    ];

    public function login($username, $password)
    {
        return $this->where(['username' => $username, 'password' => $password])->first();
    }
}
