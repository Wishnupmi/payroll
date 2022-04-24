<?php

namespace App\Controllers;
use App\Models\KoperasiModel;

class simpan_koperasi extends BaseController
{
    public function __construct() {
        $this->User = new KoperasiModel();
    }
    public function index()
    {
        $nip=$this->request->getVar('nip');
        $nama=$this->request->getVar('nama');
        $masuk_bln=$this->request->getVar('masuk_bln');
        $masuk_thn=$this->request->getVar('masuk_thn');
       
        
        // if($status=='1') {
        //     $status="oke";
        // }
        // $data = [
        //     'nm_users' => 'darth'
        // ];
        
        // $User->save($data);

        $data = [
            'nip' => $nip,
            'nama' => $nama,
            'masuk_bln' => $masuk_bln,
            'masuk_thn' => $masuk_thn
        ];
        // // $uri = service('uri');
        // // $this->request->uri->getSegment(1);
        $this->User->save($data);
        // return redirect()->to('/');

        $data['data_koperasi']=$this->User->getDataKoperasi();
        
        // return view('masterbarang/tambahbarang',$data);
        return view('master_koperasi/index',$data);
    }
    
}
