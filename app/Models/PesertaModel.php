<?php

namespace App\Models;

use CodeIgniter\Model;

class PesertaModel extends Model
{
    protected $table      = 'tb_peserta';
    protected $primaryKey = 'peserta_';

    protected $useAutoIncrement = true;
}