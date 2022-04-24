<?php

namespace App\Controllers;
use App\Models\PotonganModel;

class simpan_potongan extends BaseController
{
    public function __construct() {
        $this->User = new PotonganModel();
    }
    public function index()
    {
        $jenis_potongan=$this->request->getVar('jenis_potongan');
        $jumlah=$this->request->getVar('jumlah');
        
        // if($status=='1') {
        //     $status="oke";
        // }
        // $data = [
        //     'nm_users' => 'darth'
        // ];
        
        // $User->save($data);

        $data = [
            'jenis_potongan' => $jenis_potongan,
            'jumlah' => $jumlah
        ];
        // // $uri = service('uri');
        // // $this->request->uri->getSegment(1);
        $this->User->save($data);
        // return redirect()->to('/');

        $data['data_potongan']=$this->User->getDataPotongan();
        
        // return view('masterbarang/tambahbarang',$data);
        return view('master_potongan/index',$data);
    }
    
}
