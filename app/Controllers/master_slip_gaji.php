<?php

namespace App\Controllers;
use App\Models\SlipGajiModel;

class master_slip_gaji extends BaseController
{
    public function __construct() {
        $this->User = new SlipGajiModel();
    }
    public function index()
    {
        $data['data_absen']=$this->User->getDataSlipGaji();
        
        return view('master_slip_gaji/index',$data);
    }
}
