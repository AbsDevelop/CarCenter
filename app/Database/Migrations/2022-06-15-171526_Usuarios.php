<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Usuarios extends Migration
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
            'type'=>'varchar',
            'constraint'=>100
        ],
        'idade'=>[
            'type'=>'int',
        ], 
        'senha'=>[
            'type'=>'text'
        ],
        
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('tb_usuarios');
    }

    public function down()
    {
        $this->forge->dropTable('tb_usuarios');
    }
}
