<?php

namespace App\Controllers;
use App\Models\PegawaiModel;

class tambah_pegawai extends BaseController
{
    public function __construct() {
        $this->User = new PegawaiModel();
    }
    public function index()
    {
        $data['data_pegawai']=$this->User->getDataPegawai();
        return view('master_pegawai/tambah_pegawai',$data);
    }
    public function ubah($id) 
    {
        $data['data_pegawai']=$this->User->getDataPegawai($id);
        return view('ubah_pegawai/index',$data);
    }
    public function update() 
    {
        $id=$this->request->getVar('kode');
        $nama=$this->request->getVar('nama');
        $nip=$this->request->getVar('nip');
        $jabatan=$this->request->getVar('jabatan');
        $alamat=$this->request->getVar('alamat');
        $status=$this->request->getVar('status');
        $bpjs=$this->request->getVar('bpjs');

        $data = [
            'id_pegawai'=>$id,
            'nama'=>$nama,
            'nip'=>$nip,
            'jabatan'=>$jabatan,
            'alamat'=>$alamat,
            'status'=>$status,
            'status_bpjs'=>$bpjs
        ];
        $this->User->save($data);
        return redirect()->to('/public/index.php/master_pegawai');
    }
    public function delete($id)
    {
        $this->User->delete($id);
        return redirect()->to('/public/index.php/master_pegawai');
    }
}
