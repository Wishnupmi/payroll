<?php

namespace App\Controllers;
use App\Models\PinjamanModel;

class master_pinjaman extends BaseController
{
    public function __construct() {
        $this->User = new PinjamanModel();
    }
    public function index()
    {
        $data['data_pinjaman']=$this->User->getDataPinjaman();
        
        return view('master_pinjaman/index',$data);
    }
}
