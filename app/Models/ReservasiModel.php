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
}
