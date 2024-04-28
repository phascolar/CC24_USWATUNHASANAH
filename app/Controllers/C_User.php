<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use app\Models\M_user;
use CodeIgniter\HTTP\ResponseInterface;

class C_User extends BaseController
{
    public function __construct()
    {
        helper([
            'url', 'form','session'
        ]);
        
        $this->session = session();

        $this->product = new M_Product();
    }

    public function input()
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

        return view('admin/user');
    }

    public function update($id = null)
    {
        $name = $this->request->getPost('name');
        $email = $this->request->getPost('email');
        $pass = $this->request->getPost('password');
        $address = $this->request->getPost('address');
        $no = $this->request->getPost('no_tlp');
        $this->username->update(
            $id = [
            'user_id' => $id,
            'name' => $name,
            'email' => $email,
            'password' => $pass,
            'address' => $address,
            'no_tlp' => $no,
        ]);

        return redirect()->to(base_url('aksiuser'));
    }

    public function delete($id = null)
    {
        $data['post'] = $this->product->delete('product_id', $id);


        return redirect()->to(base_url('aksiuser'));
    }
}
