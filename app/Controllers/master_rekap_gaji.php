<?php

namespace App\Controllers;
use App\Models\SlipGajiModel;

class master_rekap_gaji extends BaseController
{
    public function __construct() {
        $this->User = new SlipGajiModel();
    }
    public function index()
    {
        $data['data_slip_gaji']=$this->User->getDataSlipGaji();
        
        return view('master_rekap_gaji/index',$data);
    }
}
