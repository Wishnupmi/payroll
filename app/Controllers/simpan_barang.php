<?php

namespace App\Controllers;
use App\Models\UsersModel;

class simpan_barang extends BaseController
{
    public function __construct() {
        $this->User = new UsersModel();
    }
    public function index()
    {
        $nama=$this->request->getVar('nama');
        $kelamin=$this->request->getVar('kelamin');
        $username=$this->request->getVar('username');
        $password=$this->request->getVar('password');

        // $data = [
        //     'nm_users' => 'darth'
        // ];
        
        // $User->save($data);

        $data = [
            'nm_users' => $nama,
            'kelamin_users' => $kelamin,
            'username' => $username,
            'password' => $password
        ];
        // // $uri = service('uri');
        // // $this->request->uri->getSegment(1);
        $this->User->save($data);
        // return redirect()->to('/');

        $data['tb_user']=$this->User->getUsers();
        
        // return view('masterbarang/tambahbarang',$data);
        return view('master_barang/index',$data);
    }
    
}
