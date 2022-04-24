<?php

namespace App\Controllers;
use App\Models\UsersModel;

class master_transaksi extends BaseController
{
    public function __construct() {
        $this->User = new UsersModel();
    }
    public function index()
    {
        $data['tb_user']=$this->User->getUsers();
        
        return view('master_transaksi/index',$data);
    }
}
