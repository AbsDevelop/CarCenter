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

    //Sessions

    public function login()
    {
        echo view('Templates/header');
        echo view('login');
        echo view('Templates/footer');
    }

    public function log()
    {
        $model = new UsuarioModel();

        $nome = $this->request->getVar('nome');
        $senha = $this->request->getVar('senha');

        $data['usuario'] = $model->userLogin($nome, $senha);
        $data['session'] = \Config\Services::session();

        if(empty($data['usuario'])){
            return redirect('login');
        }else{
            $sessionData = [
                'usuario' => $nome,
                'log'     => TRUE
            ];
            $data['session']->set($sessionData);
            return redirect('/');
        }
    }

    public function logout(){
        $data['session'] = \Config\Services::session();
        $data['session']->destroy();
        return redirect('login');
    }

    //Usuarios

    public function usuario()
    {
        $model = new UsuarioModel();

        $data = [
            'title'   => 'Usuários',
            'usuario' => $model->getUsuarios(),
            'session' => \Config\Services::session() 
        ];

        if(!$data['session']->get('log')){
            return redirect('login');
        }

        echo view('Templates/header');
        echo view('usuarios', $data);
        echo view('Templates/footer');
    }

    public function cadastrarU()
    {
        $data['session'] = \Config\Services::session();

        if(!$data['session']->get('log')){
            return redirect('login');
        }

        echo view('Templates/header');
        echo view('cadastro-usuarios');
        echo view('Templates/footer');
    }

    public function inscreverU()
    {
        $model = new UsuarioModel();

        $data['session'] = \Config\Services::session();

        if(!$data['session']->get('log')){
            return redirect('login');
        }

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

        $data['session'] = \Config\Services::session();

        if(!$data['session']->get('log')){
            return redirect('login');
        }

        $model->delete($id);
        return redirect('usuario');
    }

    public function editarU($id = null)
    {
        $model = new UsuarioModel();

        $data = [
            'usuario' => $model->getUsuario($id),
            'session' => \Config\Services::session()
        ];

        if(!$data['session']->get('log')){
            return redirect('login');
        }

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
        echo view('carros', $data);
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
            'obs'    => $this->request->getVar('obs')
        ]);

        return redirect('carros');
    }

    public function excluirC($id = null)
    {
        $model = new CarroModel();
        $model->delete($id);
        return redirect('carros');
    }

    public function editarC($id = null)
    {
        $model = new CarroModel();

        $data = [
            'carro' => $model->getCarro($id)
        ];

        echo view('Templates/header');
        echo view('cadastro-carros', $data);
        echo view('Templates/footer');
    }

    
}
