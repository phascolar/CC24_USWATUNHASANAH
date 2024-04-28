<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\M_Product;

class C_Home extends BaseController
{
    public function __construct()
    {
        helper([
            'url', 'form','session'
        ]);
        
        $this->session = session();

        $this->product = new M_Product();
    }

    public function index()
    {
        $data['title'] = 'Halaman utama';
        $data['hasil'] = null;
        $data['product'] = $this->product->findAll();

        return view('depan/home', $data);
    }

    public function product()
    {
        $data['title'] = 'product';
        $data['hasil'] = null;
        $data['product'] = $this->product->findAll();

        return view('depan/product', $data);
    }

    public function keranjang()
    {
        $data['title'] = 'keranjang';
        $data['hasil'] = null;
        $data['product'] = $this->product->findAll();
        
        return view('depan/keranjang', $data);
    }

    public function pembayaran()
    {
        if($this->session->sudahlogin != 1){
            return redirect()->to(base_url('login'));
        }
        $data['title'] = 'pembayaran';

        return view('depan/pembayaran', $data);
    }
}
