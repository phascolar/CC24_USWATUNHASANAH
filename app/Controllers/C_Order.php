<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class C_Order extends BaseController
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
        $product_id = $this->request->getPost('product_id');
        $product_name = $this->request->getPost('product_name');
        $product_price = $this->request->getPost('product_price');
        $total_harga = $this->request->getPost('total_harga');
        $order_tanggal = $this->request->getPost('order_tanggal');
        $this->order->insert([
            'product_id' => $product_id,
            'name' => $name,
            'product_name' => $product_name,
            'product_price' => $product_price,
            'total_harga' => $total_harga,
            'order_tanggal' => $order_tanggal,
        ]);

        return view('admin/user');
    }

    public function update($id = null)
    {
        $product_id = $this->request->getPost('product_id');
        $product_name = $this->request->getPost('product_name');
        $product_price = $this->request->getPost('product_price');
        $total_harga = $this->request->getPost('total_harga');
        $order_tanggal = $this->request->getPost('order_tanggal');
        $this->order->update(
            $id[
                'product_id' => $product_id,
                'name' => $name,
                'product_name' => $product_name,
                'product_price' => $product_price,
                'total_harga' => $total_harga,
                'order_tanggal' => $order_tanggal,
        ]);

        return redirect()->to(base_url('aksiuser'));
    }

    public function delete($id = null)
    {
        $this->order->delete('order', $order)

        return redirect()->to(base_url('aksiuser'));
    }
}
