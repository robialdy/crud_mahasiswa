<?php

namespace App\Controllers;
use App\Models\SiswaModel;
use App\Models\KelasModel;

class Siswa extends BaseController
{
    protected $SiswaModel;
    protected $KelasModel;
    public function __construct()
    {
        $this->SiswaModel = new SiswaModel();
        $this->KelasModel = new KelasModel();
    }

    //kontrol delete lewat url
    public function redirect()
    {
        return redirect()->to('siswa/');
    }

    public function index()
    {
        if (!session()->has('user')) {
            return redirect()->to('auth/');
        }

        $data = [
            'title'     => 'Daftar Siswa | IGAPIN',
            'listSiswa' => $this->SiswaModel->siswaWithKelas(),
        ];
        return view('siswa/siswa', $data);
    }

    public function create()
    {
        if (!session()->has('user')) {
            return redirect()->to('auth/');
        }

        $data = [
            'title'     => 'Daftar Siswa | IGAPIN',
            'listKelas' => $this->KelasModel->findAll(),
        ];
        return view('siswa/create', $data);
    }

    public function save()
    {
        if (!session()->has('user')) {
            return redirect()->to('auth/');
        }

        if (!$this->validate([
            'name' => 'required|is_unique[siswa.name]',
            'date' => 'required',
            'school' => 'required',
            'address' => 'required',
            'class' => 'required',
            'foto'  => [
                'rules'     => 'uploaded[foto]|max_size[foto,5120]|is_image[foto]|mime_in[foto,image/jpg,image/jpeg,image/png]',
                'errors'    =>[
                    'uploaded'  => 'Foto Harap di isi',
                    'max_size'  => 'Ukuran foto terlalu besar',
                    'is_image'  => 'Yang anda pilih bukan gambar',
                    'mime_in'  => 'Yang anda pilih bukan gambar',
                ]
            ]
        ])) {
            return redirect()->back()->withInput();        
        }
        // gambar
        $fileFoto = $this->request->getFile('foto');
        $namaFoto = $fileFoto->getRandomName();
        $fileFoto->move('assets/img', $namaFoto);


        $slug = url_title($this->request->getVar('name'), '-', true);
        $this->SiswaModel->save([
            'name' => $this->request->getVar('name'),
            'slug' => $slug,
            'date' => $this->request->getVar('date'),
            'id_kelas' => $this->request->getVar('class'),
            'school_from' => $this->request->getVar('school'),
            'address' => $this->request->getVar('address'),
            'foto'  => $namaFoto,
        ]);
        session()->setFlashData('notif', 'Data Baru berhasil di tambahkan');
        return redirect()->to('siswa/');
    }

    public function e($slug)
    {
        if (!session()->has('user')) {
            return redirect()->to('auth/');
        }

        $data = [
            'title'     => 'Edit Siswa  | IGAPIN',
            'siswa'     => $this->SiswaModel->getDataSiswa($slug),
            'listKelas' => $this->KelasModel->findAll(),
        ];
        return view('siswa/edit', $data);
    }

    public function update($id)
    {
        if (!session()->has('user')) {
            return redirect()->to('auth/');
        }

        //cek agar ketika edit name sendiri tidak unik
        $data_db_siswa = $this->SiswaModel->getDataSiswaById($id);
        if ($this->request->getVar('name') == $data_db_siswa['name']) {
            $valid = '';
        } else {
            $valid = 'is_unique[siswa.name]';
        }

        if (!$this->validate([
            'name' => "required|$valid",
            'date' => 'required',
            'school' => 'required',
            'address' => 'required',
            'class'   => 'required',
            'foto'  => [
                'rules'     => 'uploaded[foto]|max_size[foto,5120]|is_image[foto]|mime_in[foto,image/jpg,image/jpeg,image/png]',
                'errors'    => [
                    'uploaded'  => 'Foto Harap di isi',
                    'max_size'  => 'Ukuran foto terlalu besar',
                    'is_image'  => 'Yang anda pilih bukan gambar',
                    'mime_in'  => 'Yang anda pilih bukan gambar',
                ]
            ]
        ])) {
            return redirect()->to('siswa/e/' . $this->request->getVar('slug'))->withInput();
        }

        // gambar
        $fileFoto = $this->request->getFile('foto');
        $namaFoto = $fileFoto->getRandomName();
        $fileFoto->move('assets/img', $namaFoto);

        $slug = url_title($this->request->getVar('name'), '-', true);
        $this->SiswaModel->save([
            'id'   => $id,
            'name' => $this->request->getVar('name'),
            'id_kelas' => $this->request->getVar('class'),
            'slug' => $slug,
            'date' => $this->request->getVar('date'),
            'school_from' => $this->request->getVar('school'),
            'address' => $this->request->getVar('address'),
            'foto'  => $namaFoto,
        ]);
        session()->setFlashData('notif', 'Data Baru berhasil di update');
        return redirect()->to('siswa/');
    }

    public function delete($id)
    {
        if (!session()->has('user')) {
            return redirect()->to('auth/');
        }

        $this->SiswaModel->delete($id);
        return redirect()->to('siswa/');
    }
}
