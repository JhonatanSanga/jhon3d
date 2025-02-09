<?php

namespace App\Controllers;

class Movies extends BaseController
{
    public function index()
    {
        $_COOKIE['page'] = 'peliculas';
        echo view('layout/header');
        echo view('movies_view');
        echo view('layout/footer');
    }
}
