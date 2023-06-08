<?php 

namespace App\Models;

use CodeIgniter\Model;

class TreatmentModel extends Model
{
public function getdata()
{
    $query = $this->db->query("SELECT * FROM treatment ORDER BY nama_treatment ASC");

    return $query->getResult();
}

function simpanData($table,$data)
{
    $this->db->table()->insert($data);
    return true;
}

}
?>