<?php

namespace App\Controllers;

use App\Models\CourseModel;

class Course extends BaseController
{
    protected $CourseModel;
    public function __construct()
    {
        $this->CourseModel = new CourseModel();
    }
    public function index()
    {
        $data = [
            'title'     => 'Data Course',
            'course'   => $this->CourseModel->getCourse()
        ];

        echo view('templates/header', $data);
        echo view('templates/sidebar');
        echo view('templates/navbar');
        echo view('course/course', $data);
        echo view('templates/footer');
    }
}
