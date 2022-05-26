<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Carros extends Seeder
{
    public function run()
    {
        $modelo = ['Onix','Onix Plus','Equinox','Tracker','Bolt Ev'];
        for($x = 0; $x < 5; $x++){
            $data = [
                'modelo' => $modelo[$x],
                'marca' => 'Chevrolet',
                'placa'=> rand(1000000, 9999999)
            ];
            $this->db->table('tb_carros')->insert($data);
        }
    }
}