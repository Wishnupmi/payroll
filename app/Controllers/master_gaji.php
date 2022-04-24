<?php

namespace App\Controllers;
use App\Models\GajiModel;

class master_gaji extends BaseController
{
    public function __construct() {
        $this->User = new GajiModel();
    }
    public function index()
    {
        $data['data_gaji']=$this->User->getDataGaji();
        
        return view('master_gaji/index',$data);
    }
}
