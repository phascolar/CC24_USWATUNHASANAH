<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class C_Address extends BaseController
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
        $user_id = $this->request->getPost('user_id');
        $name = $this->request->getPost('name');
        $email = $this->request->getPost('email');
        $no = $this->request->getPost('no_tlp');
        $address = $this->request->getPost('address');
        $region = $this->request->getPost('region');
        $city = $this->request->getPost('city');
        $phone = $this->request->getPost('phone');
        $this->address->insert([
            'user_id' => $user_id,
            'name' => $name,
            'email' => $email,
            'no_tlp' => $no,
            'address' => $address,
            'region' => $region,
            'city' => $city,
            'phone' => $phone,
        ]);

        return view('admin/user');
    }

    public function update($id = null)
    {
        $user_id = $this->request->getPost('user_id');
        $name = $this->request->getPost('name');
        $email = $this->request->getPost('email');
        $no = $this->request->getPost('no_tlp');
        $address = $this->request->getPost('address');
        $region = $this->request->getPost('region');
        $city = $this->request->getPost('city');
        $phone = $this->request->getPost('phone');
        $this->address->update(
            $id = [
                'user_id' => $user_id,
                'name' => $name,
                'email' => $email,
                'no_tlp' => $no,
                'address' => $address,
                'region' => $region,
                'city' => $city,
                'phone' => $phone,
        ]);

        return redirect()->to(base_url('aksiuser'));
    }

    public function delete($id = null)
    {
        $this->address->delete('address', $address);

        return redirect()->to(base_url('aksiuser'));
    }
}
