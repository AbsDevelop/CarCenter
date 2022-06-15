<?php

namespace App\Controllers;

use App\Models\UsuarioModel;

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

    public function usuario()
    {
        $model = new UsuarioModel();

        $data = [
            'title'=>'Usuários',
            'usuario'=>$model->getUsuarios() 
        ];

        echo view('Templates/header');
        echo view('usuarios', $data);
        echo view('Templates/footer');
    }

    public function cadastrar()
    {
        echo view('Templates/header');
        echo view('cadastro-usuarios');
        echo view('Templates/footer');
    }

    public function inscrever()
    {
        $model = new UsuarioModel();

        $model->save([
            'id'        => $this->request->getVar('id'),
            'nome'      => $this->request->getVar('nome'),
            'profissao' => $this->request->getVar('profissao'),
            'idade'     => $this->request->getVar('idade')
        ]);

        return redirect('usuario');

    }

    public function excluir($id = null)
    {
        $model = new UsuarioModel();
        $model->delete($id);
        return redirect('usuario');

    }

    public function editar($id = null)
    {
        $model = new UsuarioModel();

        $data = [
            'usuario' => $model->getUsuario($id)
        ];

        echo view('Templates/header');
        echo view('cadastro-usuarios', $data);
        echo view('Templates/footer');
    }

    
}
