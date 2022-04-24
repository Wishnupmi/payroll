<?php

namespace App\Controllers;
use App\Models\UsersModel;

class tambah_transaksi_penjualan extends BaseController
{
    public function __construct() {
        $this->User = new UsersModel();
    }
    public function index()
    {
        $data['tb_user']=$this->User->getUsers();
        return view('master_transaksi/tambah_transaksi_penjualan',$data);
    }
    public function ubah($id) 
    {
        $data['tb_users']=$this->User->getUsers($id);
        return view('ubahbarang/index',$data);
    }
    public function update() 
    {
        $id=$this->request->getVar('kode');
        $nama=$this->request->getVar('nama');
        $kelamin=$this->request->getVar('kelamin');
        $username=$this->request->getVar('username');
        $password=$this->request->getVar('password');
        

        $data = [
            'id_users'=>$id,
            'nm_users'=>$nama,
            'kelamin_users'=>$kelamin,
            'username'=>$username,
            'password'=>$password
        ];
        $this->User->save($data);
        return redirect()->to('/public/index.php/master_transaksi');
    }
    public function delete($id)
    {
        $this->User->delete($id);
        return redirect()->to('/public/index.php/master_transaksi');
    }
}
