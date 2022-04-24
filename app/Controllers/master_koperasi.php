<?php

namespace App\Controllers;
use App\Models\KoperasiModel;

class master_koperasi extends BaseController
{
    public function __construct() {
        $this->User = new KoperasiModel();
    }
    public function index()
    {
        $data['data_koperasi']=$this->User->getDataKoperasi();
        
        return view('master_koperasi/index',$data);
    }
}
