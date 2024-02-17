<?php

namespace App\Controllers;

use App\Models\PesertaModel;

class Peserta extends BaseController
{
    protected $PesertaModel;
    public function __construct()
    {
        $this->PesertaModel = new PesertaModel();
    }

    public function index()
    {
        $peserta = $this->PesertaModel->findAll();
        
        $data = [
            'title'     => 'Peserta',
            'peserta'   => $peserta
        ];

        echo view('templates/header', $data);
        echo view('templates/sidebar');
        echo view('templates/navbar');
        echo view('peserta/peserta', $data);
        echo view('templates/footer');
    }
}
