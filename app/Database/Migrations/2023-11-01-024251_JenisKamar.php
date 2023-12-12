<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class JenisKamar extends Migration
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
            'type_kamar'    =>[
                'type'      => 'VARCHAR',
                'constraint'=> '220',
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
        $this->forge->createTable('jeniskamar');
    }

    public function down()
    {
        $this->forge->dropTable('jeniskamar',true);
    }
}
