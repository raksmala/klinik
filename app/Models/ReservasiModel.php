<?php

namespace App\Models;

use CodeIgniter\Model;

class ReservasiModel extends Model
{
    protected $table = 'reservasi';
    protected $primaryKey = 'id_reservasi';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $protectFields = true;
    protected $allowedFields = ['tgl_reservasi', 'sesi_reservasi', 'nama_lengkap', 'alamat', 'nomor_telepon', 'nama_treatment', 'total', 'status_reservasi', 'user_id', 'id_deleted'];

    public function getdata()
    {
        $query = $this->db->query("SELECT * FROM reservasi WHERE is_deleted IS NULL ORDER BY tgl_reservasi DESC");

        return $query->getResult();
    }

    public function getReservasi($user_id)
    {
        $query = $this->db->query("SELECT * FROM reservasi JOIN user ON reservasi.user_id = user.user_id WHERE reservasi.user_id = '$user_id' AND is_deleted IS NULL");

        return $query->getResult();
    }

    public function insertData($data)
    {
        $query = $this->db->table('reservasi')->insert($data);

        return $this->db->insertID();
    }

    public function updateReservasi($id, $data)
    {
        $this->db->table('reservasi')->where('id_reservasi', $id)->update($data);
        return true;
    }

    public function cekSesi($treatment, $tanggal) {
        $query = $this->db->query("SELECT * FROM reservasi WHERE nama_treatment = '$treatment' AND tgl_reservasi = '$tanggal'");
        return $query->getResult();
    }

    public function getDataRange($tanggal_awal, $tanggal_akhir) {
        $query = $this->db->query("SELECT * FROM reservasi WHERE tgl_reservasi BETWEEN '$tanggal_awal' AND '$tanggal_akhir' AND is_deleted IS NULL");
        return $query->getResult();
    }

    public function getDataTreatment($tanggal_awal, $tanggal_akhir, $treatment) {
        $query = $this->db->query("SELECT * FROM reservasi WHERE tgl_reservasi BETWEEN '$tanggal_awal' AND '$tanggal_akhir' AND nama_treatment = '$treatment' AND is_deleted IS NULL");

        return $query->getResult();
    }

    public function getTreatment($treatment) {
        $query = $this->db->query("SELECT * FROM reservasi WHERE nama_treatment = '$treatment' AND is_deleted IS NULL");
        return $query->getResult();
    }

    public function totalReservasi() {
        $query = $this->db->query("SELECT * FROM reservasi WHERE is_deleted IS NULL");
        return $query->getNumRows();
    }

    public function reservasiDalamProses() {
        $query = $this->db->query("SELECT * FROM reservasi WHERE status_reservasi = 'Dalam Proses' AND is_deleted IS NULL ORDER BY tgl_reservasi DESC");
        return $query->getResult();
    }
}
