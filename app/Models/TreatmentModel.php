<?php

namespace App\Models;

use CodeIgniter\Model;

class TreatmentModel extends Model
{
    protected $table = 'treatment';
    protected $primaryKey = 'id_treatment';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $protectFields = true;
    protected $allowedFields = ['nama_treatment', 'gambar_treatment', 'desc_treatment', 'jenis_treatment', 'harga_treatment', 'durasi_treatment', 'jangka_ulang_treatment', 'tahap_treatment', 'manfaat_treatment', 'perhatian', 'sesi_treatment', 'is_deleted'];

    public function getdata()
    {
        $query = $this->db->query("SELECT * FROM treatment where is_deleted IS NULL ORDER BY nama_treatment ASC");

        return $query->getResult();
    }

    public function getTreatment($jenis)
    {
        $jenis = str_replace('-', ' ', $jenis);
        $query = $this->db->query("SELECT * FROM treatment WHERE jenis_treatment = '$jenis' AND is_deleted IS NULL ORDER BY nama_treatment ASC");

        return $query->getResult();
    }

    public function getDetail($nama)
    {
        $nama = str_replace('-', ' ', $nama);
        $query = $this->db->query("SELECT * FROM treatment WHERE nama_treatment LIKE '%$nama%' AND is_deleted IS NULL");

        return $query->getRow();
    }

    function simpanData($table, $data)
    {
        $this->db->table('treatment')->insert($data);
        return true;
    }

    public function getJenisTreatment()
    {
        $query = $this->db->query("SELECT DISTINCT jenis_treatment FROM treatment WHERE is_deleted IS NULL ORDER BY jenis_treatment ASC");
        $results = $query->getResult();

        $data = array_column($results, 'jenis_treatment');

        return $data;
    }

    public function updateTreatment($id, $data)
    {
        $this->db->table('treatment')->where('id_treatment', $id)->update($data);
        return true;
    }

    public function totalTreatment() {
        $query = $this->db->query("SELECT * FROM treatment WHERE is_deleted IS NULL");
        return $query->getNumRows();
    }
}