<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class C_Home extends BaseController
{
    public function __construct()
    {
        $helper = [
            'url', 'form','session'
        ];
        $this->session = session();
        $this->username->M_user();
    }

    public function index()
    {
        $data['title'] = 'Halaman utama';

        return view('depan/home', $data);
    }

    public function product()
    {
        $data['title'] = 'product';

        return view('depan/product', $data);
    }

    public function keranjang()
    {
        $data['title'] = 'keranjang';

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
