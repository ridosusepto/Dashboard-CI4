<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        $data =[
            'title' => 'Dashdoard'
        ];

        echo view('templates/header', $data);
        echo view('templates/sidebar');
        echo view('templates/navbar');
        echo view('dashboard', $data);
        echo view('templates/footer');
    }
}