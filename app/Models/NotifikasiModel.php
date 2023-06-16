<?php

namespace App\Models;

use CodeIgniter\Model;

class NotifikasiModel extends Model
{
    protected $table = 'notifikasi';
    protected $primaryKey = 'id_notifikasi';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $protectFields = true;
    protected $allowedFields = ['id_notifikasi', 'id_reservasi', 'is_readed', 'is_deleted'];

    public function getData() {
        $query = $this->db->query("SELECT * FROM notifikasi JOIN reservasi ON notifikasi.id_reservasi = reservasi.id_reservasi WHERE notifikasi.is_deleted IS NULL AND is_readed = '0' ORDER BY notifikasi.id_notifikasi DESC");
        return $query->getResult();
    }

    public function simpan($id_reservasi) {
        $query = $this->db->query("INSERT INTO notifikasi (id_reservasi, is_readed) VALUES ('$id_reservasi', '0')");
        return $query;
    }

    public function read($id_notifikasi) {
        $query = $this->db->query("UPDATE notifikasi SET is_readed = '1' WHERE id_notifikasi = '$id_notifikasi'");
        return $query;
    }
}