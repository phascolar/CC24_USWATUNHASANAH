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

        return view('depan/home');
    }

    public function product()
    {

        return view('depan/product');
    }

    public function keranjang()
    {

        return view('depan/keranjang');
    }

    public function pembayaran()
    {

        return view('depan/pembayaran');
    }
}
