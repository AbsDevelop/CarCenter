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

    public function pessoas()
    {
        $model = new PessoasModel();

        $data = [
            'title'=>'Pessoas',
            'pessoas'=>$model->getPessoas() 
        ];

        echo view('Templates/header');
        echo view('pessoas', $data);
        echo view('Templates/footer');
    }

    public function cadastrar()
    {
        echo view('Templates/header');
        echo view('cadastro-pessoas');
        echo view('Templates/footer');
    }

    public function inscrever()
    {
        $model = new PessoasModel();

        $model->save([
            'id' => $this->request->getVar('id'),
            'nome' => $this->request->getVar('nome'),
            'profissao' => $this->request->getVar('profissao'),
            'idade' => $this->request->getVar('idade')
        ]);

        return redirect('Pessoas');

    }

    public function excluir($id = null)
    {
        $model = new PessoasModel();
        $model->delete($id);
        return redirect('Pessoas');

    }

    public function editar($id = null)
    {
        $model = new PessoasModel();

        $data = [
            'pessoa' => $model->getPessoa($id)
        ];

        echo view('Templates/header');
        echo view('cadastro-pessoas', $data);
        echo view('Templates/footer');
    }

    
}
