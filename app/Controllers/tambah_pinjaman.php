<?php

namespace App\Controllers;
use App\Models\PinjamanModel;

class tambah_pinjaman extends BaseController
{
    public function __construct() {
        $this->User = new PinjamanModel();
    }
    public function index()
    {
        $data['data_pinjaman']=$this->User->getDataPinjaman();
        return view('master_pinjaman/tambah_pinjaman',$data);
    }
    public function ubah($id) 
    {
        $data['data_pinjaman']=$this->User->getDataPinjaman($id);
        return view('ubah_pinjaman/index',$data);
    }
    public function update() 
    {
        $id=$this->request->getVar('kode');
        $nama=$this->request->getVar('nama');
        $nip=$this->request->getVar('nip');
        $pinjaman=$this->request->getVar('pinjaman');
        $jangka_waktu=$this->request->getVar('jangka_waktu');

        $data = [
            'id_data_pinjaman'=>$id,
            'nama'=>$nama,
            'nip'=>$nip,
            'pinjaman'=>$pinjaman,
            'jangka_waktu'=>$jangka_waktu
        ];
        $this->User->save($data);
        return redirect()->to('/public/index.php/master_pinjaman');
    }
    public function delete($id)
    {
        $this->User->delete($id);
        return redirect()->to('/public/index.php/master_pinjaman');
    }
}
