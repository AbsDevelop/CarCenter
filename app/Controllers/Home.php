<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('Templates/header');
        echo view('home');
        echo view('Templates/footer');
    }

    public function page($page='home'){
        echo view('Templates/header');
        echo view($page);
        echo view('Templates/footer');
    }
}
