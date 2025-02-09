<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $_COOKIE['page'] = 'inicio';
        echo view('layout/header');
        echo view('home_view');
        echo view('layout/footer');
    }
}
