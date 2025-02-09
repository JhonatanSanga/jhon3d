<?php

namespace App\Controllers;

class Projects extends BaseController
{
    public function index()
    {
        $_COOKIE['page'] = 'proyectos';
        echo view('layout/header');
        echo view('projects_view');
        echo view('layout/footer');
    }
}
