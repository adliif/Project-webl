<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePemesananTabel extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'      => 'INT',
                'constarint'=> 11,
                'unsigned'  => true,
                'auto_increment'    =>true,
            ],
            'tanggal_pemesanan'    =>[
                'type'      => 'VARCHAR',
                'constraint'=> '220',
            ],
            'tanggal_masuk' => [
                'type'  => 'varchar',
                'constraint'  => '100',
            ],
            'tanggal_keluar'=> [
                'type'  => 'varchar',
                'constraint'  => '100',
            ],
            'nama'=> [
                'type'  => 'varchar',
                'constraint'  => '100',
            ],
            'nomor_kamar'=> [
                'type'  => 'varchar',
                'constraint'  => '100',
            ],
            'harga'=> [
                'type'  => 'INT',
                'constraint'  => 11,
                'unsigned' => true,
            ],
            'aksi'=> [
                'type'  => 'varchar',
                'constraint'  => '100',
            ],
            'created_at' => [
                'type'  => 'DATETIME',
                'null'  => true,
            ],
            'updated_at'=> [
                'type'  =>'DATETIME',
                'null'  => true,
            ],
            'deleted_at'=> [
                'type'  =>'DATETIME',
                'null'  => true,
            ],
        ]);

        $this->forge->addKey('id',true,true);
        $this->forge->addForeignKey('nomor_kamar', 'kamar', 'id');
        $this->forge->createTable('pemesanan');
    }

    public function down()
    {
        $this->forge->dropTable('pemesanan',true);
    }
}
