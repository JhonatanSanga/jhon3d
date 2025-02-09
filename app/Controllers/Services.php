<?php

namespace App\Controllers;

class Services extends BaseController
{
    public function index()
    {
        $_COOKIE['page'] = 'servicios';
        echo view('layout/header');
        echo view('services_view');
        echo view('layout/footer');
    }
}
