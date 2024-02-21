<?php

namespace App\Models;

use CodeIgniter\Model;

class KelasModel extends Model
{
    protected $table      = 'tb_kelas';
    protected $primaryKey = 'kelas_id';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'kelas_name',
        'kelas_kategori',
    ];

    protected $useAutoIncrement = true;

    public function getkelas($kelas_id=false)
    {
        if($kelas_id == false){
            return $this->findAll();
        }
        return $this->where(['kelas_id'=> $kelas_id])->first();
    }
}