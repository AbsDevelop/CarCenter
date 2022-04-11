<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pessoas extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'=>[
                'type'=>'int',
                'auto_increment'=>true
            ],
            'nome'=>[
                'type'=>'varchar',
                'constraint'=>100
            ],
            'profissao'=>[
                'type'=>'int',
                'constraint'=>100
            ],
            'idade'=>[
                'type'=>'int',
            ], 

        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('tb_pessoas');
    }

    public function down()
    {
        $this->forge->dropTable('tb_pessoas');
    }
}
