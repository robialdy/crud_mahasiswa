<?php

namespace App\Models;

use CodeIgniter\Model;

class KelasModel extends Model
{
    protected $table            = 'kelas';
    protected $primaryKey       = 'id_kelas';
    protected $allowedFields = ['nama_kelas', 'slug', 'max_kapasitas'];
    protected $useTimestamp = true;

    public function getDataKelasBySlug($slug)
    {
        return $this->where('slug', $slug)->first();
    }

    public function getDataKelasById($id)
    {
        return $this->where('id_kelas', $id)->first();
    }

}
