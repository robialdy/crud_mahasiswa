<?php

namespace App\Controllers;
use App\Models\UsersModel;

class Auth extends BaseController
{
    protected $UsersModel;
    public function __construct()
    {
        $this->UsersModel = new UsersModel();
    }

    //login
    public function index()
    {
        return view('auth');
    }

    public function login()
    {
        if (!$this->validate([
            'user'      => 'required',
            'password'  => 'required',
        ])) {
            return redirect()->back()->withInput();
        } else {
            return $this->_login();
        }
    } 

    private function _login()
    {
        $username = $this->request->getVar('user');
        $password = $this->request->getVar('password');

        $user = $this->UsersModel->where('username', $username)->first();

        if($user != null && password_verify($password, $user['password'])) {
            // $sessionData = [
            //     'username' => $user['username'],
            // ];
            session()->set('user', $user['username']);
            return redirect()->to(base_url());
        } else {
            return redirect()->back()->withInput();
        }
    }

    //registrasi
    public function registrasi()
    {
        $data = [
            'title' => 'Registrasi | IGAPIN'
        ];

        return view('regis', $data);
    }

    public function regissave()
    {
        if(!$this->validate([
            'username'  => 'required' ,
            'email'     => 'required',
            'password1' => 'required|matches[password2]',
            'password2' => 'required|matches[password1]',
        ])) {
            return redirect()->back()->withInput();
        }

        $password = password_hash($this->request->getVar('password1'), PASSWORD_DEFAULT);
        $this->UsersModel->save([
            'username'  =>  $this->request->getVar('username'),
            'email'     =>  $this->request->getVar('email'),
            'password' =>  $password,  
        ]);
        return redirect()->to('auth/');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('auth/');
    }
}
