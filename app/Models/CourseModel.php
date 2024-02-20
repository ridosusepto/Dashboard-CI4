<?php

namespace App\Models;

use CodeIgniter\Model;

class CourseModel extends Model
{
    protected $table      = 'tb_course';
    protected $primaryKey = 'course_id';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'course_nama',
        'course_kuota',
        'course_mentor',
        'course_desk',
        'course_harga',
    ];

    protected $useAutoIncrement = true;

    public function getCourse($course_id=false)
    {
        if($course_id == false){
            return $this->findAll();
        }
        return $this->where(['course_id'=> $course_id])->first();
    }
}