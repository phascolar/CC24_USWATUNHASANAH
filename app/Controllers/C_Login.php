<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class CLogin extends BaseController
{
    public function __construct()
    {
        helper([
            'url', 'form','session'
        ]);
        
        $this->session = session();

        $this->product = new M_Product();
    }

    public function login()
    {
        if($this->session->sudahlogin == 1){
            return redirect()->to(base_url('admin'));
        }
        $data['title'] = 'login admin';
        
        return view('depan/login', $data);
    }

    public function aksi()
    {
        $user = $this->request->getVar('username');
        $pas = $this->request->getVar('pass_user');
        $data = $this->login->where('username', $user)->frist();
            if($data){
                $pass = md5('pass_user');
                if($pass = $pas){
                    $ses_data = [
                        'id' => $data['id'],
                        'username' => $data['username'],
                    ];
                }else{
                    $this->session()->setFlasdata('user', 'password anda salah');
                    return redirect()->to(base_url('login'));
                }
            }else{
                $this->session()->setFlasdata('pass', 'user anda tidak di ketahui');
                    return redirect()->to(base_url('login'));
            }
        
        return view('depan/login', $data);
    }

    public function register()
    {
        $data['title'] = 'buat user';

        return view('depan/login', $data);
    }

    public function action()
    {
        $name = $this->request->getPost('name');
        $email = $this->request->getPost('email');
        $pass = $this->request->getPost('password');
        $address = $this->request->getPost('address');
        $no = $this->request->getPost('no_tlp');
        $pin = $this->request->getPost('pin');
        $this->username->insert([
            'user_id' => $id,
            'name' => $name,
            'email' => $email,
            'password' => md5($pass),
            'address' => $address,
            'no_tlp' => $no,
            'pin' => $pin . mt_rand('10000', '99999999'),
        ]);

        return view('depan/login');
    }
}
