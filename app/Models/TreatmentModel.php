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

    public function getTreatment($jenis)
    {
        $jenis = str_replace('-', ' ', $jenis);
        $query = $this->db->query("SELECT * FROM treatment WHERE jenis_treatment = '$jenis' ORDER BY nama_treatment ASC");

        return $query->getResult();
    }

    public function getDetail($nama)
    {
        $nama = str_replace('-', ' ', $nama);
        $query = $this->db->query("SELECT * FROM treatment WHERE nama_treatment LIKE '%$nama%'");

        return $query->getRow();
    }

    function simpanData($table, $data)
    {
        $this->db->table('treatment')->insert($data);
        return true;
    }

    public function getJenisTreatment()
    {
        $query = $this->db->query("SELECT DISTINCT jenis_treatment FROM treatment ORDER BY jenis_treatment ASC");
        $results = $query->getResult();

        $data = array_column($results, 'jenis_treatment');

        return $data;
    }
}