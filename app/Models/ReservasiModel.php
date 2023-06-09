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

    public function getReservasi($user_id)
    {
        $query = $this->db->query("SELECT * FROM reservasi JOIN user ON reservasi.user_id = user.user_id WHERE reservasi.user_id = '$user_id'");

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
