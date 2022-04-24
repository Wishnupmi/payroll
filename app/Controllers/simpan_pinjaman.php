<?php

namespace App\Controllers;
use App\Models\PinjamanModel;

class simpan_pinjaman extends BaseController
{
    public function __construct() {
        $this->User = new PinjamanModel();
    }
    public function index()
    {
        $nip=$this->request->getVar('nip');
        $nama=$this->request->getVar('nama');
        $pinjaman=$this->request->getVar('pinjaman');
        $jangka_waktu=$this->request->getVar('jangka_waktu');
        
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
            'pinjaman' => $pinjaman,
            'jangka_waktu' => $jangka_waktu
        ];
        // // $uri = service('uri');
        // // $this->request->uri->getSegment(1);
        $this->User->save($data);
        // return redirect()->to('/');

        $data['data_pinjaman']=$this->User->getDataPinjaman();
        
        // return view('masterbarang/tambahbarang',$data);
        return view('master_pinjaman/index',$data);
    }
    
}
