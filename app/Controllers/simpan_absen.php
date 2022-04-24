<?php

namespace App\Controllers;
use App\Models\AbsensiModel;

class simpan_absen extends BaseController
{
    public function __construct() {
        $this->User = new AbsensiModel();
    }
    public function index()
    {
        $nama=$this->request->getVar('nama');
        $nip=$this->request->getVar('nip');
        $jabatan=$this->request->getVar('jabatan');
        $masuk=$this->request->getVar('masuk');
        $alpha=$this->request->getVar('alpha');
        $gaji_pokok=$this->request->getVar('gaji_pokok');
        $uang_transport=$this->request->getVar('uang_transport');
        $uang_makan=$this->request->getVar('uang_makan');
        $tunjangan_kawin=$this->request->getVar('tunjangan_kawin');
        $potongan=$this->request->getVar('potongan');
        $total_gaji=$this->request->getVar('total_gaji');
        $jabatan2=$this->request->getVar('jabatan2');
        $ijin=$this->request->getVar('ijin');
        $potongan_alpha=$this->request->getVar('potongan_alpha');
        $potongan_ijin=$this->request->getVar('potongan_ijin');
        $bpjs=$this->request->getVar('bpjs');
        $bulan=$this->request->getVar('periode');
        $bulan2=date("m",strtotime($bulan));
        $tahun=date("y",strtotime($bulan));
if($alpha=="" and $ijin=="0") {
    $alpha = 0;
    $ijin = 0;
}

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
            'masuk' => $masuk,
            'alpha' => $alpha,
            'gaji_pokok' => $gaji_pokok,
            'uang_transport' => $uang_transport,
            'uang_makan' => $uang_makan,
            'tunjangan_kawin' => $tunjangan_kawin,
            'potongan_alpha' => $potongan_alpha,
            'potongan_ijin' => $potongan_ijin,
            'total_gaji' => $total_gaji,
            'nama_jabatan' => $jabatan2,
            'ijin' => $ijin,
            'bpjs' => $bpjs,
            'bulan' => $bulan2,
            'tahun' => $tahun
        ];
        // // $uri = service('uri');
        // // $this->request->uri->getSegment(1);
        $this->User->save($data);
        // return redirect()->to('/');

        $data['data_absen']=$this->User->getDataAbsen();
        
        // return view('masterbarang/tambahbarang',$data);
        return view('master_absen/index',$data);
    }
    
}
