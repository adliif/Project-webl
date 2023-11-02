<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateAkunTabel extends Migration
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
            'username'    =>[
                'type'      => 'VARCHAR',
                'constraint'=> '220',
            ],
            'password' => [
                'type'  => 'varchar',
                'constraint'  => '10',
            ],
            'role'=> [
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
        $this->forge->createTable('akun');
    }

    public function down()
    {
        $this->forge->dropTable('akun',true);
    }
}
