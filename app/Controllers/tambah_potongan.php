<?php

namespace App\Controllers;
use App\Models\PotonganModel;

class tambah_potongan extends BaseController
{
    public function __construct() {
        $this->User = new PotonganModel();
    }
    public function index()
    {
        $data['data_potongan']=$this->User->getDataPotongan();
        return view('master_potongan/tambah_potongan',$data);
    }
    public function ubah($id) 
    {
        $data['data_potongan']=$this->User->getDataPotongan($id);
        return view('ubah_potongan/index',$data);
    }
    public function update() 
    {
        $id=$this->request->getVar('kode');
        $jenis_potongan=$this->request->getVar('jenis_potongan');
        $jumlah=$this->request->getVar('jumlah');

        $data = [
            'id_potongan'=>$id,
            'jenis_potongan'=>$jenis_potongan,
            'jumlah'=>$jumlah
        ];
        $this->User->save($data);
        return redirect()->to('/public/index.php/master_potongan');
    }
    public function delete($id)
    {
        $this->User->delete($id);
        return redirect()->to('/public/index.php/master_potongan');
    }
}
