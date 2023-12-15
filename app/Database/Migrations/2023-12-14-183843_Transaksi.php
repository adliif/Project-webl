<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Transaksi extends Migration
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
            'tanggal'    =>[
                'type'      => 'VARCHAR',
                'constraint'=> '220',
            ],
            'total' => [
                'type'  => 'varchar',
                'constraint'  => '10',
            ],
            'status'=> [
                'type' => 'varchar',
                'constraint' => 20,

            ],
            'id_pemesanan'=> [
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => true,

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
        $this->forge->addForeignKey('id_pemesanan','pemesanan','id');
        $this->forge->createTable('transaksi');
    }

    public function down()
    {
        $this->forge->dropTable('transaksi',true);
    }
}