<?php

namespace App\Models;

use CodeIgniter\Model;

class RiwayatModel extends Model
{
    public function getdata()
    {
        $query = $this->db->query("SELECT * FROM reservasi ORDER BY id_reservasi ASC");

        return $query->getResult();
    }
}
