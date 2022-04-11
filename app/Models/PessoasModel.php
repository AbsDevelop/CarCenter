<?php

namespace App\Models;

use CodeIgniter\Model;

class PessoasModel extends Model{
    protected $table = 'tb_Pessoas';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nome', 'profissao', 'idade'];

    public function getPessoas(){
        return $this->findAll();
    }
}