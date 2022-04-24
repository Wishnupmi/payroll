<?php

namespace App\Controllers;
use App\Models\PotonganModel;

class master_potongan extends BaseController
{
    public function __construct() {
        $this->User = new PotonganModel();
    }
    public function index()
    {
        $data['data_potongan']=$this->User->getDataPotongan();
        
        return view('master_potongan/index',$data);
    }
}
