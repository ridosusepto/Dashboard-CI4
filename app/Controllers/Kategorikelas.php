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

    public function tambah_kategori()
    {
        session();
        $data =  [
            'title' => 'Form Tambah Category',
            'validation' => \Config\Services::validation()
        ];

        echo view('templates/header', $data);
        echo view('templates/sidebar');
        echo view('templates/navbar');
        echo view('kategorikelas/tambah_kategori', $data);
        echo view('templates/footer');
    }

    public function save_kategori()
    {
        if (!$this->validate([
            'kelas_kategori'    => 'required',
            'kelas_ket'         => 'required',
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('kategorikelas/tambah_kategori')->withInput()->with('validation', $validation);
        }
        $this->KategoriModel->save([
            'kelas_kategori'     => $this->request->getVar('kelas_kategori'),
            'kelas_ket'          => $this->request->getVar('kelas_ket'),
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

    public function edit_kategori($kategori_id)
    {
        $data = [
            'title'      => 'Form edit data course',
            'validation' => \Config\Services::validation(),
            'kategori'    => $this->KategoriModel->getKategori($kategori_id)
        ];

        echo view('templates/header', $data);
        echo view('templates/sidebar');
        echo view('templates/navbar');
        echo view('kategorikelas/edit_kategori', $data);
        echo view('templates/footer');
    }

    public function update_kategori($kategori_id)
    {
        if (!$this->validate([
            'kelas_kategori'    => 'required',
            'kelas_ket'         => 'required',
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('kategorikelas/edit_kategori/' . $kategori_id)->withInput()->with('validation', $validation);
        }
        $this->KategoriModel->update($kategori_id, [
            'kelas_kategori'     => $this->request->getVar('kelas_kategori'),
            'kelas_ket'          => $this->request->getVar('kelas_ket'),
        ]);
        session()->setFlashdata('alert', 'Data berhasil di edit.');
        return redirect()->to('/kategorikelas');
    }

    public function tambah_kelas()
    {
        session();
        $kategoriModel = new KategoriModel();
        $data['category'] = $kategoriModel->findAll();
        $data =  [
            'title'         => 'Form Tambah Class',
            'validation'    => \Config\Services::validation(),
            'category'      => $data['category']
        ];

        echo view('templates/header', $data);
        echo view('templates/sidebar');
        echo view('templates/navbar');
        echo view('kategorikelas/tambah_kelas', $data);
        echo view('templates/footer');
    }

    public function save_kelas()
    {
        if (!$this->validate([
            'kelas_name'    => 'required',
            'kelas_kategori' => 'required',
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('kategorikelas/tambah_kelas')->withInput()->with('validation', $validation);
        }
        $this->KelasModel->save([
            'kelas_name'     => $this->request->getVar('kelas_name'),
            'kelas_kategori' => $this->request->getVar('kelas_kategori'),
        ]);
        session()->setFlashdata('alert', 'Data kelas berhasil di tambahkan.');
        return redirect()->to('/kategorikelas');
    }


    public function delete_kelas($kelas_id)
    {
        $this->KelasModel->delete($kelas_id);
        session()->setFlashdata('alert', 'Data berhasil di hapus.');
        return redirect()->to('/kategorikelas');
    }

    public function edit_kelas($kelas_id)
    {
        $kategoriModel = new KategoriModel();
        $data = [
            'title' => 'Form edit data course',
            'validation' => \Config\Services::validation(),
            'kelas' => $this->KelasModel->getKelas($kelas_id),
            'category' => $kategoriModel->findAll()
        ];

        echo view('templates/header', $data);
        echo view('templates/sidebar');
        echo view('templates/navbar');
        echo view('kategorikelas/edit_kelas', $data);
        echo view('templates/footer');
    }

    public function update_kelas($kelas_id)
    {
        $request = \Config\Services::request();

        // Periksa apakah data yang diperlukan telah disampaikan
        if (!$request->getPost('kelas_kategori') || !$request->getPost('kelas_ket')) {
            return redirect()->to('kategorikelas/edit_kelas/' . $kelas_id)->withInput()->with('error', 'Semua kolom harus diisi.');
        }

        // Lakukan validasi data jika diperlukan
        $rules = [
            'kelas_name' => 'required',
            'kelas_kategori' => 'required'
        ];

        if (!$this->validate($rules)) {
            return redirect()->to('kategorikelas/edit_kelas/' . $kelas_id)->withInput()->with('validation', $this->validator);
        }

        // Proses pembaruan data
        $this->KelasModel->update($kelas_id, [
            'kelas_name' => $request->getPost('kelas_name'),
            'kelas_kategori' => $request->getPost('kelas_kategori')
        ]);

        session()->setFlashdata('alert', 'Data berhasil di edit.');
        return redirect()->to('/kategorikelas');
    }
}
