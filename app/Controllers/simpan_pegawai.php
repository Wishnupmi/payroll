<?php

namespace App\Controllers;
use App\Models\PegawaiModel;

class simpan_pegawai extends BaseController
{
    public function __construct() {
        $this->User = new PegawaiModel();
    }
    public function index()
    {
        $nama=$this->request->getVar('nama');
        $nip=$this->request->getVar('nip');
        $jabatan=$this->request->getVar('jabatan');
        $alamat=$this->request->getVar('alamat');
        $status=$this->request->getVar('status');
        // if($status=='1') {
        //     $status="oke";
        // }
        // $data = [
        //     'nm_users' => 'darth'
        // ];
        
        // $User->save($data);

        $data = [
            'nama' => $nama,
            'nip' => $nip,
            'jabatan' => $jabatan,
            'alamat' => $alamat,
            'status' => $status
        ];
        // // $uri = service('uri');
        // // $this->request->uri->getSegment(1);
        $this->User->save($data);
        // return redirect()->to('/');

        $data['data_pegawai']=$this->User->getDataPegawai();
        
        // return view('masterbarang/tambahbarang',$data);
        return view('master_pegawai/index',$data);
    }
    
}
