<?php

namespace App\Controllers;
use App\Models\SlipGajiModel;

class simpan_slip_gaji extends BaseController
{
    public function __construct() {
        $this->User = new SlipGajiModel();
    }
    public function index()
    {
        $nip=$this->request->getVar('nip');
        $nama=$this->request->getVar('nama');
        $jabatan=$this->request->getVar('jabatan');
        $masuk=$this->request->getVar('masuk');
        $tidak_masuk=$this->request->getVar('tidak_masuk');
        $gaji_pokok=$this->request->getVar('gaji_pokok');
        $uang_transport=$this->request->getVar('uang_transport');
        $uang_makan=$this->request->getVar('uang_makan');
        $tunjangan_kawin=$this->request->getVar('tunjangan_kawin');
        $potongan=$this->request->getVar('potongan');
        $pinjaman=$this->request->getVar('pinjaman');
        $total_gaji=$this->request->getVar('total_gaji');
        
        // if($status=='1') {
        //     $status="oke";
        // }
        // $data = [
        //     'nm_users' => 'darth'
        // ];
        
        // $User->save($data);

        $data = [
            'nip' => $nip,
            'Nama' => $nama,
            'jabatan' => $jabatan,
            'masuk' => $masuk,
            'tidak_masuk' => $tidak_masuk,
            'gaji_pokok' => $gaji_pokok,
            'uang_transport' => $uang_transport,
            'uang_makan' => $uang_makan,
            'tunjangan_kawin' => $tunjangan_kawin,
            'potongan' => $potongan,
            'pinjaman' => $pinjaman,
            'total_gaji' => $total_gaji
        ];
        // // $uri = service('uri');
        // // $this->request->uri->getSegment(1);
        $this->User->save($data);
        // return redirect()->to('/');

        $data['data_slip_gaji']=$this->User->getDataSlipGaji();
        
        // return view('masterbarang/tambahbarang',$data);
        return view('master_slip_gaji/index',$data);
    }
    
}
