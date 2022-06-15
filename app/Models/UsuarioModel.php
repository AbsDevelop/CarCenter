<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model{
    protected $table = 'tb_usuarios';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nome', 'profissao', 'idade'];

    public function getUsuarios(){
        return $this->findAll();
    }

    public function getUsuario($id){
        return $this->asArray()->where(['id'=>$id])->first();
    }
}