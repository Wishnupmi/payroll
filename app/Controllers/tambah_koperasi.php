<?php

namespace App\Controllers;
use App\Models\KoperasiModel;

class tambah_koperasi extends BaseController
{
    public function __construct() {
        $this->User = new KoperasiModel();
    }
    public function index()
    {
        $data['data_koperasi']=$this->User->getDataKoperasi();
        return view('master_koperasi/tambah_koperasi',$data);
    }
    public function ubah($id) 
    {
        $data['data_koperasi']=$this->User->getDataKoperasi($id);
        return view('ubah_koperasi/index',$data);
    }
    public function update() 
    {
        $id=$this->request->getVar('kode');
        $nama=$this->request->getVar('nama');
        $nip=$this->request->getVar('nip');
        $masuk_bln=$this->request->getVar('masuk_bln');
        $masuk_thn=$this->request->getVar('masuk_thn');

        $data = [
            'id_data_koperasi'=>$id,
            'nama'=>$nama,
            'nip'=>$nip,
            'masuk_bln'=>$masuk_bln,
            'masuk_thn'=>$masuk_thn
        ];
        $this->User->save($data);
        return redirect()->to('/public/index.php/master_koperasi');
    }
    public function delete($id)
    {
        $this->User->delete($id);
        return redirect()->to('/public/index.php/master_koperasi');
    }
}
