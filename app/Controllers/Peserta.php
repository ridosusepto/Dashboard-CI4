<?php

namespace App\Controllers;

use App\Models\CourseModel;
use App\Models\PesertaModel;

class Peserta extends BaseController
{
    protected $PesertaModel;
    protected $CourseModel;
    public function __construct()
    {
        $this->PesertaModel = new PesertaModel();
    }

    public function index()
    {
        $data = [
            'title'     => 'Peserta',
            'peserta'   => $this->PesertaModel->getPeserta()
        ];

        echo view('templates/header', $data);
        echo view('templates/sidebar');
        echo view('templates/navbar');
        echo view('peserta/peserta', $data);
        echo view('templates/footer');
    }

    public function detail($peserta_id)
    {
        $data = [
            'title'     => 'Detail Peserta',
            'peserta'   => $this->PesertaModel->getPeserta($peserta_id)
        ];

        if (empty($data['peserta'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data ' . $peserta_id . 'tidak ditemukan.');
        }

        echo view('templates/header', $data);
        echo view('templates/sidebar');
        echo view('templates/navbar');
        echo view('peserta/detail', $data);
        echo view('templates/footer');
    }

    public function tambah()
    {
        session();

        $courseModel= new CourseModel();
        $data['courses']=$courseModel->findAll();
        $data = [
            'title'      => 'Form tambah data peserta',
            'validation' => \Config\Services::validation(),
            'courses'    => $data['courses']
        ];

        echo view('templates/header', $data);
        echo view('templates/sidebar');
        echo view('templates/navbar');
        echo view('peserta/tambah', $data);
        echo view('templates/footer');
    }

    public function save()
    {
        if (!$this->validate([
            'peserta_nip'           => 'required|numeric',
            'peserta_nama'          => 'required',
            'peserta_email'         => 'required|valid_email',
            'peserta_ttl'           => 'required',
            'peserta_telp'          => 'required|numeric',
            'peserta_agama'         => 'required',
            'peserta_gender'        => 'required',
            'peserta_alamat'        => 'required',
            'peserta_kota'          => 'required',
            'peserta_kodepos'       => 'required|numeric',
            'peserta_portofolio'    => 'required',
            'peserta_payment'       => 'required',
            'status_nama'           => 'required',
            'course_nama'           => 'required',
            'kelaskategori'         => 'required'
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('peserta/tambah')->withInput()->with('validation', $validation);
        }


        $this->PesertaModel->save([
            'peserta_nip'           => $this->request->getVar('peserta_nip'),
            'peserta_nama'          => $this->request->getVar('peserta_nama'),
            'peserta_email'         => $this->request->getVar('peserta_email'),
            'peserta_ttl'           => $this->request->getVar('peserta_ttl'),
            'peserta_telp'          => $this->request->getVar('peserta_telp'),
            'peserta_agama'         => $this->request->getVar('peserta_agama'),
            'peserta_gender'        => $this->request->getVar('peserta_gender'),
            'peserta_alamat'        => $this->request->getVar('peserta_alamat'),
            'peserta_kota'          => $this->request->getVar('peserta_kota'),
            'peserta_kodepos'       => $this->request->getVar('peserta_kodepos'),
            'peserta_portofolio'    => $this->request->getVar('peserta_portofolio'),
            'peserta_payment'       => $this->request->getVar('peserta_payment'),
            'status_nama'           => $this->request->getVar('status_nama'),
            'course_nama'           => $this->request->getVar('course_nama'),
            'kelaskategori'         => $this->request->getVar('kelaskategori')
        ]);

        session()->setFlashdata('alert', 'Data berhasil di tambahkan.');
        return redirect()->to('/peserta');
    }

    public function delete($peserta_id)
    {
        $this->PesertaModel->delete($peserta_id);
        session()->setFlashdata('alert', 'Data berhasil di hapus`.');
        return redirect()->to('/peserta');
    }

    public function edit($peserta_id)
    {
        $data = [
            'title'      => 'Form edit data peserta',
            'validation' => \Config\Services::validation(),
            'peserta'    => $this->PesertaModel->getPeserta($peserta_id)
        ];

        echo view('templates/header', $data);
        echo view('templates/sidebar');
        echo view('templates/navbar');
        echo view('peserta/edit', $data);
        echo view('templates/footer');
    }


    public function update($peserta_id)
    {
        if (!$this->validate([
            'peserta_nip'           => 'required|numeric',
            'peserta_nama'          => 'required',
            'peserta_email'         => 'required|valid_email',
            'peserta_ttl'           => 'required',
            'peserta_telp'          => 'required|numeric',
            'peserta_agama'         => 'required',
            'peserta_gender'        => 'required',
            'peserta_alamat'        => 'required',
            'peserta_kota'          => 'required',
            'peserta_kodepos'       => 'required|numeric',
            'peserta_portofolio'    => 'required',
            'peserta_payment'       => 'required',
            'status_nama'           => 'required',
            'course_nama'           => 'required',
            'kelaskategori'         => 'required'
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/peserta/edit/' . $peserta_id)->withInput()->with('validation', $validation);
        }

        $this->PesertaModel->update($peserta_id, [
            'peserta_nip'           => $this->request->getVar('peserta_nip'),
            'peserta_nama'          => $this->request->getVar('peserta_nama'),
            'peserta_email'         => $this->request->getVar('peserta_email'),
            'peserta_ttl'           => $this->request->getVar('peserta_ttl'),
            'peserta_telp'          => $this->request->getVar('peserta_telp'),
            'peserta_agama'         => $this->request->getVar('peserta_agama'),
            'peserta_gender'        => $this->request->getVar('peserta_gender'),
            'peserta_alamat'        => $this->request->getVar('peserta_alamat'),
            'peserta_kota'          => $this->request->getVar('peserta_kota'),
            'peserta_kodepos'       => $this->request->getVar('peserta_kodepos'),
            'peserta_portofolio'    => $this->request->getVar('peserta_portofolio'),
            'peserta_payment'       => $this->request->getVar('peserta_payment'),
            'status_nama'           => $this->request->getVar('status_nama'),
            'course_nama'           => $this->request->getVar('course_nama'),
            'kelaskategori'         => $this->request->getVar('kelaskategori')
        ]);

        session()->setFlashdata('alert', 'Data berhasil di edit.');
        return redirect()->to('/peserta');
    }
}
