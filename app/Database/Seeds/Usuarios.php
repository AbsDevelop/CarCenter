<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Usuarios extends Seeder
{
    public function run()
    {
        $nome = ['Maria','Ana','Pedro','João','Marcos'];
        $profiss = ['Supervisora de vendas','Auxiliadora Administrativa','Gerente','Encarregado Geral','Contador'];

        for($x = 0; $x < 5; $x++){
            $data = [
                'nome'       =>  $nome[$x],
                'profissao'  =>  $profiss[$x],
                'idade'      =>  20,
                'senha'      =>  MD5("car")
            ];
            $this->db->table('tb_usuarios')->insert($data);
        }
    }
}