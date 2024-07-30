<?php

namespace App\Models;

use CodeIgniter\Model;

class SiswaModel extends Model
{
    protected $table            = 'siswa';
    protected $primaryKey       = 'id';
    protected $allowedFields = ['name','slug','date','school_from','address','id_kelas','foto'];
    protected $useTimestamp = true;

    public function getDataSiswa($slug)
    {
        return $this->select('siswa.*, kelas.nama_kelas')->join('kelas', 'kelas.id_kelas = siswa.id_kelas')->where('siswa.slug', $slug)->first();
    }
    public function getDataSiswaById($id)
    {
        return $this->where('id', $id)->first();
    }

    public function siswaWithKelas()
    {
        return $this->select('siswa.*, kelas.nama_kelas')->join('kelas', 'kelas.id_kelas = siswa.id_kelas')->findAll();
    }
}
