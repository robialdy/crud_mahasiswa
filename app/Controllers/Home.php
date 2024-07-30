<?php

namespace App\Controllers;
use App\Models\SiswaModel;

class Home extends BaseController
{
    protected $SiswaModel;
    public function __construct()
    {
        $this->SiswaModel = new SiswaModel();
    }

    public function index(): string
    {
        $data = [
            'title'     => 'Home | IGAPIN',
            'dataSiswa' => $this->SiswaModel->siswaWithKelas(),
        ];
        return view('home/home', $data);
    }

}
