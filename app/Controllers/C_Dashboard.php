<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class CDashboard extends BaseController
{
    public function admin()
    {

        return view('admin/dashboard');
    }

    public function list()
    {

        return view('admin/list');
    }

    public function detail()
    {

        return view('admin/detail');
    }

    public function new()
    {

        return view('admin/product');
    }
}
