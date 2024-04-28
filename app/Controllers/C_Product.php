<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class C_Product extends BaseController
{
    public function __construct()
    {
    helper() = [
        'url', 'form','session'
    ];
    
    $this->session = session();
    }

    public function input()
    {
        $name = $this->request->getPost('product_name');
        $harga = $this->request->getPost('product_price');
        $brand = $this->request->getPost('product_brand');
        $detail = $this->request->getPost('product_detail');
        $gambar = $this->request->getPost('product_img');
        $this->product->insert([
            'product_name' => $name,
            'product_price' => $harga,
            'product_brand' => $brand,
            'product_detail' => $detail,
            'product_img' => $gambar,
        ]);

        return view('admin/user');
    }

    public function update($id = null)
    {
        $name = $this->request->getPost('product_name');
        $harga = $this->request->getPost('product_price');
        $brand = $this->request->getPost('product_brand');
        $detail = $this->request->getPost('product_detail');
        $gambar = $this->request->getPost('product_img');
        $this->product->update(
            $id[
                'product_name' => $name,
                'product_price' => $harga,
                'product_brand' => $brand,
                'product_detail' => $detail,
                'product_img' => $gambar,
        ]);

        return redirect()->to(base_url('aksiuser'));
    }

    public function delete($id = null)
    {
        $this->product->delete('product', $product)

        return redirect()->to(base_url('aksiuser'));
    }
}
