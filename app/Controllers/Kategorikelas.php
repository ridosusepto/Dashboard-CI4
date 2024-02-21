<?php

namespace App\Controllers;

use App\Models\CourseModel;
use App\Models\KategoriModel;
use App\Models\KelasModel;

class Kategorikelas extends BaseController
{
    protected $KategoriModel;
    protected $KelasModel;
    public function __construct()
    {
        $this->KategoriModel = new KategoriModel();
        $this->KelasModel = new KelasModel();
    }
    public function index()
    {
        $data = [
            'title'     => 'Data Kelas & Kategori',
            'kategori'    => $this->KategoriModel->getKategori(),
            'kelas'    => $this->KelasModel->getKelas(),
        ];

        echo view('templates/header', $data);
        echo view('templates/sidebar');
        echo view('templates/navbar');
        echo view('kategorikelas/kategorikelas', $data);
        echo view('templates/footer');
    }

    public function tambah_kategori (){
        session();
        $data=  [
            'title'=>'Form Tambah Category',
            'validation' => \Config\Services::validation()


        ];

        echo view('templates/header', $data);
        echo view('templates/sidebar');
        echo view('templates/navbar');
        echo view('kategorikelas/tambah_kategori', $data);
        echo view('templates/footer');
    }

    public function save_kategori (){
        if(!$this->validate([
            'kelas_kategori'   => 'required',
            'kelas_ket'  => 'required',
        ])){
            $validation = \Config\Services::validation();
            return redirect()->to('kategorikelas/tambah_kategori')->withInput()->with('validation', $validation);
        }
        $this->KategoriModel->save([
            'kelas_kategori'   => $this->request->getVar('kelas_kategori'),
            'kelas_ket'  => $this->request->getVar('kelas_ket'),
        ]);
        session()->setFlashdata('alert', 'Data kategori berhasil di tambahkan.');
        return redirect()->to('/kategorikelas');
    }

    public function delete($kategori_id)
    {
        $this->KategoriModel->delete($kategori_id);
        session()->setFlashdata('alert', 'Data berhasil di hapus.');
        return redirect()->to('/kategorikelas');

    }

    // public function edit($course_id)
    // {
    //     $data = [
    //         'title'      => 'Form edit data course',
    //         'validation' => \Config\Services::validation(),
    //         'course'    => $this->CourseModel->getCourse($course_id)
    //     ];

    //     echo view('templates/header', $data);
    //     echo view('templates/sidebar');
    //     echo view('templates/navbar');
    //     echo view('course/edit', $data);
    //     echo view('templates/footer');
    // }

    // public function update ($course_id){
    //     if(!$this->validate([
    //         'course_nama'   => 'required',
    //         'course_kuota'  => 'required',
    //         'course_mentor' => 'required',
    //         'course_desk'   => 'required',
    //         'course_harga'  => 'required'
    //     ])){
    //         $validation = \Config\Services::validation();
    //         return redirect()->to('course/edit/'.$course_id)->withInput()->with('validation', $validation);
    //     }
    //     $this->CourseModel->update($course_id,[
    //         'course_nama'   => $this->request->getVar('course_nama'),
    //         'course_kuota'  => $this->request->getVar('course_kuota'),
    //         'course_mentor' => $this->request->getVar('course_mentor'),
    //         'course_desk'   => $this->request->getVar('course_desk'),
    //         'course_harga'  => $this->request->getVar('course_harga'),
    //     ]);
    //     session()->setFlashdata('alert', 'Data berhasil di edit.');
    //     return redirect()->to('/course');
    // }

}
