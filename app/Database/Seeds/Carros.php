<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Carros extends Seeder
{
    public function run()
    {
        $placa = ['Onix','Onix Plus','Equinox','Tracker','Bolt Ev'];
        $marca = ['Chevrolet','Chevrolet','Chevrolet','Chevrolet','Chevrolet'];
        $modelo = ['Onix','Onix Plus','Equinox','Tracker','Bolt Ev'];
        $cor = ['Branco','Preto','Verde','Cinza','Preto'];
        $obs = ['Liberado. Novo.','Liberado. Novo.','Liberado. Seminovo','Em avaliação. Usado.','Em avaliação. Usado. Em manutenção.'];

        for($x = 0; $x < 5; $x++){
            $data = [
                'placa'  =>  rand(1000000, 9999999),
                'marca'  =>  $marca[$x],
                'modelo' =>  $modelo[$x],
                'cor'    =>  $cor[$x],
                'obs'    =>  $obs[$x],
            ];
            $this->db->table('tb_carros')->insert($data);
        }
    }
}