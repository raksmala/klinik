<?php

namespace App\Models;

use CodeIgniter\Model;

class ReservasiModel extends Model
{
    public function getdata()
    {
        $query = $this->db->query("SELECT * FROM reservasi ORDER BY nama_treatment ASC");

        return $query->getResult();
    }

    public function insertData($data)
    {
        $query = $this->db->table('reservasi')->insert($data);
        return $query;
    }

    function cekSesi($treatment, $tanggal) {
        $query = $this->db->query("SELECT * FROM reservasi WHERE nama_treatment = '$treatment' AND tgl_reservasi = '$tanggal'");
        return $query->getResult();
    }
}
