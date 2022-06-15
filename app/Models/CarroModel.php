<?php

namespace App\Models;

use CodeIgniter\Model;

class CarroModel extends Model{
    protected $table = 'tb_Carros';
    protected $primaryKey = 'id';
    protected $allowedFields = ['placa', 'marca', 'modelo', 'cor', 'obs'];

    public function getCarros(){
        return $this->findAll();
    }

    public function getCarro($id){
        return $this->asArray()->where(['id'=>$id])->first();
    }
}