<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateStafTabel extends Migration
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
            'nama_staf'    =>[
                'type'      => 'VARCHAR',
                'constraint'=> '220',
            ],
            'alamat' => [
                'type'  => 'varchar',
                'constraint'  => '10',
            ],
            'no_telepon'=> [
                'type'  =>'INT',
                'constraint'  => 5,
                'unsigned'  => true,

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
        $this->forge->createTable('staf');
    }

    public function down()
    {
        $this->forge->dropTable('staf',true);
    }
}
