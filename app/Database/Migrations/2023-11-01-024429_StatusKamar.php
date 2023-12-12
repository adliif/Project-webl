<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class StatusKamar extends Migration
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
            'status'    =>[
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
        $this->forge->createTable('statuskamar');
    
    }

    public function down()
    {
        $this->forge->dropTable('statuskamar',true);
    }
}
