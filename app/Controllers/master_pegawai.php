<?php
namespace App\Controllers;
use App\Models\PegawaiModel;

class master_pegawai extends BaseController
{
    public function __construct() {
        $this->User = new PegawaiModel();
    }
    public function index()
    {
        $data['data_pegawai']=$this->User->getDataPegawai();
        
        return view('master_pegawai/index',$data);
    }
}
