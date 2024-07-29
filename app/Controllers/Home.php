<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'title' => 'Home | IGAPIN'
        ];
        return view('home/home', $data);
    }

    public function test()
    {
        return view('welcome_message');
    }
}
