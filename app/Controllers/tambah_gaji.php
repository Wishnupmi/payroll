<?php

namespace App\Controllers;
use App\Models\GajiModel;

class tambah_gaji extends BaseController
{
    public function __construct() {
        $this->User = new GajiModel();
    }
    public function index()
    {
        $data['data_gaji']=$this->User->getDataGaji();
        return view('master_gaji/tambah_gaji',$data);
    }
    public function ubah($id) 
    {
        $data['data_gaji']=$this->User->getDataGaji($id);
        return view('ubah_gaji/index',$data);
    }
    public function update() 
    {
        $id=$this->request->getVar('kode');
        $jabatan=$this->request->getVar('jabatan');
        $gaji=$this->request->getVar('gaji');
        $uang_makan=$this->request->getVar('uang_makan');
        $uang_transport=$this->request->getVar('uang_transport');
        $tunjangan_kawin=$this->request->getVar('tunjangan_kawin');
        $sewa_motor=$this->request->getVar('sewa_motor');
        $bpjs=$this->request->getVar('bpjs');

        $data = [
            'id_data_gaji'=>$id,
            'jabatan'=>$jabatan,
            'gaji'=>$gaji,
            'uang_makan'=>$uang_makan,
            'uang_transport'=>$uang_transport,
            'tunjangan_kawin'=>$tunjangan_kawin,
            'sewa_motor'=>$sewa_motor,
            'bpjs'=>$bpjs
        ];
        $this->User->save($data);
        return redirect()->to('/public/index.php/master_gaji');
    }
    public function delete($id)
    {
        $this->User->delete($id);
        return redirect()->to('/public/index.php/master_gaji');
    }
}
