<?php

namespace App\Models;

use CodeIgniter\Model;

class PesertaModel extends Model
{
    protected $table      = 'tb_peserta';
    protected $primaryKey = 'peserta_id';
    protected $allowedFields = [
        'peserta_nip',           
        'peserta_nama',        
        'peserta_email',      
        'peserta_ttl',           
        'peserta_telp',         
        'peserta_agama',       
        'peserta_gender',      
        'peserta_alamat',       
        'peserta_kota',          
        'peserta_kodepos',      
        'peserta_portofolio' ,   
        'peserta_payment',      
        'status_nama',           
        'course_nama',          
        'kelaskategori'        
    ];

    protected $useAutoIncrement = true;

    public function getPeserta($peserta_id=false)
    {
        if($peserta_id == false){
            return $this->findAll();
        }
        return $this->where(['peserta_id'=> $peserta_id])->first();
    }
}