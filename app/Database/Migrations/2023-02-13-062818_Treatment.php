<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Treatment extends Migration
{
    public function up()
    {
        //membuat kolom user
        $this->forge->addField([
            'treatment_id' => [
                'type' => 'INT',
                'constraint' => 11,
                'auto_increment' => TRUE,
            ],
            'kode_treatment' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
            ],
            'nama_treatment' => [
                'type' => 'VARCHAR',
                'constraint' => 45,
            ],
            'stok_treatment' => [
                'type' => 'INT',
                'constraint' => 11,
            ],

        ]);

        //membuat primary key
        $this->forge->addKey('treatment_id', true);

        //membuat tabel user
        $this->forge->createTable('treatment', true);
    }

    public function down()
    {
        //menghapus tabel user 
        $this->forge->dropTable('treatment', true);
    }
}
