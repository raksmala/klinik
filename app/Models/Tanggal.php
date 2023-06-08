<?php

namespace App\Models;

use CodeIgniter\Model;

class Tanggal extends Model
{
    protected $table = 'reservasi'; // Ganti 'nama_tabel' dengan nama tabel yang sesuai
    protected $primaryKey = 'id_reservasi'; // Ganti 'id' dengan nama kolom primary key pada tabel

    public function getDataByDate($tanggal)
    {
        return $this->where('tanggal', $tanggal)->findAll();
    }
}
