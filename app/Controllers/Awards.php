<?php

namespace App\Controllers;

class Awards extends BaseController
{
    public function index()
    {
        $_COOKIE['page'] = 'premios';
        echo view('layout/header');
        echo view('awards_view');
        echo view('layout/footer');
    }
}
