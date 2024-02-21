<?php

namespace App\Models;

use CodeIgniter\Model;

class KategoriModel extends Model
{
    protected $table      = 'tb_kategori';
    protected $primaryKey = 'kategori_id';
    protected $useTimestamps = true;
    // protected $allowedFields = [
    //     'course_nama',
    //     'course_kuota',
    //     'course_mentor',
    //     'course_desk',
    //     'course_harga',
    // ];

    protected $useAutoIncrement = true;

    public function getKategori($kategori_id=false)
    {
        if($kategori_id == false){
            return $this->findAll();
        }
        return $this->where(['kategori_id'=> $kategori_id])->first();
    }
}