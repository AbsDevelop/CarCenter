<?php

namespace App\Controllers;

use App\Models\UsuarioModel;

use App\Models\CarroModel;

class Home extends BaseController
{
    //Functions para Usuários
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

    public function cadastrarU()
    {
        echo view('Templates/header');
        echo view('cadastro-usuarios');
        echo view('Templates/footer');
    }

    public function inscreverU()
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

    public function excluirU($id = null)
    {
        $model = new UsuarioModel();
        $model->delete($id);
        return redirect('usuario');

    }

    public function editarU($id = null)
    {
        $model = new UsuarioModel();

        $data = [
            'usuario' => $model->getUsuario($id)
        ];

        echo view('Templates/header');
        echo view('cadastro-usuarios', $data);
        echo view('Templates/footer');
    }

    //Functions para Carros
    public function carro()
    {
        $model = new CarroModel();

        $data = [
            'title'=>'Carros',
            'carro'=>$model->getCarros() 
        ];

        echo view('Templates/header');
        echo view('carro', $data);
        echo view('Templates/footer');
    }

    public function cadastrarC()
    {
        echo view('Templates/header');
        echo view('cadastro-carros');
        echo view('Templates/footer');
    }

    public function inscreverC()
    {
        $model = new CarroModel();

        $model->save([
            'id'     => $this->request->getVar('id'),
            'placa'  => $this->request->getVar('placa'),
            'marca'  => $this->request->getVar('marca'),
            'modelo' => $this->request->getVar('modelo'),
            'cor'    => $this->request->getVar('cor'),
            'obs' => $this->request->getVar('obs')
        ]);

        return redirect('carro');

    }

    public function excluirC($id = null)
    {
        $model = new UsuarioModel();
        $model->delete($id);
        return redirect('carro');

    }

    public function editarC($id = null)
    {
        $model = new UsuarioModel();

        $data = [
            'carro' => $model->getCarros($id)
        ];

        echo view('Templates/header');
        echo view('cadastro-carros', $data);
        echo view('Templates/footer');
    }

    
}
