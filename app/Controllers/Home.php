<?php

namespace App\Controllers;

use App\Models\PessoasModel;

class Home extends BaseController
{
    public function index()
    {
        echo view('Templates/header');
        echo view('home');
        echo view('Templates/footer');
    }

    public function page($page='home')
    {
        echo view('Templates/header');
        echo view($page);
        echo view('Templates/footer');
    }

    public function pessoa()
    {
        $model = new PessoaModel();

        $data = [
            'title'=>'Pessoas',
            'pessoas'=>$model->getPessoas() 
        ];

        echo view('Templates/header');
        echo view('pessoa', $data);
        echo view('Templates/footer');
    }
}
