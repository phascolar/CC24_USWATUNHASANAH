<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class CDashboard extends BaseController
{
    public function __construct()
    {
        helper([
            'url', 'form','session'
        ]);
        
        $this->session = session();

        $this->product = new M_Product();
    }
    
    public function admin()
    {
        if($this->session->sudahlogin != 1){
            return redirect()->to(base_url('login'));
        }

        return view('admin/dashboard');
    }

    public function list()
    {
        if($this->session->sudahlogin != 1){
            return redirect()->to(base_url('login'));
        }

        return view('admin/list');
    }

    public function detail()
    {
        if($this->session->sudahlogin != 1){
            return redirect()->to(base_url('login'));
        }

        return view('admin/detail');
    }

    public function new()
    {
        if($this->session->sudahlogin != 1){
            return redirect()->to(base_url('login'));
        }
        
        return view('admin/product');
    }
}
