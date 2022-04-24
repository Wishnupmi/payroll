<?php

namespace App\Controllers;
use App\Models\GajiModel;

class simpan_gaji extends BaseController
{
    public function __construct() {
        $this->User = new GajiModel();
    }
    public function index()
    {
        $jabatan=$this->request->getVar('jabatan');
        $gaji=$this->request->getVar('gaji');
        $uang_makan=$this->request->getVar('uang_makan');
        $uang_transport=$this->request->getVar('uang_transport');
        $tunjangan_kawin=$this->request->getVar('tunjangan_kawin');
        $sewa_motor=$this->request->getVar('sewa_motor');
        $bpjs=$this->request->getVar('bpjs');
        
        // if($status=='1') {
        //     $status="oke";
        // }
        // $data = [
        //     'nm_users' => 'darth'
        // ];
        
        // $User->save($data);

        $data = [
            'jabatan' => $jabatan,
            'gaji' => $gaji,
            'uang_makan' => $uang_makan,
            'uang_transport' => $uang_transport,
            'tunjangan_kawin' => $tunjangan_kawin,
            'sewa_motor' => $sewa_motor,
            'bpjs' => $bpjs
        ];
        // // $uri = service('uri');
        // // $this->request->uri->getSegment(1);
        $this->User->save($data);
        // return redirect()->to('/');

        $data['data_gaji']=$this->User->getDataGaji();
        
        // return view('masterbarang/tambahbarang',$data);
        return view('master_gaji/index',$data);
    }
    
}
