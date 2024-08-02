<?php

namespace App\Controllers;
use App\Models\KelasModel;

class Kelas extends BaseController
{
    protected $KelasModel;
    public function __construct()
    {
        $this->KelasModel = new KelasModel();
    }

    //kontrol delete lewat url
    public function redirect()
    {
        return redirect()->to('kelas/');
    }

    public function index()
    {
        if (!session()->has('user')) {
            return redirect()->to('auth/');
        }

        $data = [
            'title'     => 'Class | IGAPIN',
            'listKelas' => $this->KelasModel->findAll(),
        ];
        return view('class/class', $data);
    }

    public function create()
    {
        if (!session()->has('user')) {
            return redirect()->to('auth/');
        }

        $data = [
            'title' => 'Create Class | IGAPIN'
        ];
        return view('class/create', $data);
    }

    public function save()
    {
        if (!session()->has('user')) {
            return redirect()->to('auth/');
        }

        if (!$this->validate([
            'nama_kelas' => 'required|is_unique[kelas.nama_kelas]',
            'max' => 'required|max_length[2]',
        ])) {
            return redirect()->back()->withInput();
        }

        $slug = url_title($this->request->getVar('nama_kelas'), '-', true);
        $namaKelas = strtoupper($this->request->getVar('nama_kelas'));
        $this->KelasModel->save([
            'nama_kelas' => $namaKelas,
            'slug' => $slug,
            'max_kapasitas' => $this->request->getVar('max'),
        ]);
        session()->setFlashData('notif', 'Data Baru berhasil di tambahkan');
        return redirect()->to('class/');
    }

    public function e($slug)
    {
        if (!session()->has('user')) {
            return redirect()->to('auth/');
        }

        $data = [
            'title'     => 'Edit Siswa  | IGAPIN',
            'kelas'     => $this->KelasModel->getDataKelasBySlug($slug),
        ];
        return view('class/edit', $data);
    }

    public function update($id)
    {
        if (!session()->has('user')) {
            return redirect()->to('auth/');
        }

        $data_db_kelas = $this->KelasModel->getDataKelasById($id);
        if ($this->request->getVar('nama_kelas') == $data_db_kelas['nama_kelas']) {
            $valid = '';
        } else {
            $valid = 'is_unique[kelas.nama_kelas]';
        }

        if (!$this->validate([
            'nama_kelas' => "required|$valid",
            'max' => 'required|max_length[2]',
        ])) {
            return redirect()->back()->withInput();
        }

        $slug = url_title($this->request->getVar('nama_kelas'), '-', true);
        $namaKelas = strtoupper($this->request->getVar('nama_kelas'));
        $this->KelasModel->save([
            'id_kelas' => $id,
            'nama_kelas' => $namaKelas,
            'slug' => $slug,
            'max_kapasitas' => $this->request->getVar('max'),
        ]);
        session()->setFlashData('notif', 'Data Baru berhasil di update');
        return redirect()->to('class/');
    }

    public function delete($id)
    {
        if (!session()->has('user')) {
            return redirect()->to('auth/');
        }

        $this->KelasModel->delete($id);
        return redirect()->to('class/');
    }
}
