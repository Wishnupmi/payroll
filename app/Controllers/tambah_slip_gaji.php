<?php

namespace App\Controllers;
use App\Models\SlipGajiModel;
use App\Models\AbsensiModel;
use \Dompdf\Dompdf;

class tambah_slip_gaji extends BaseController
{
    public function __construct() {
        $this->User = new SlipGajiModel();
    }
    public function index()
    {
        $data['data_slip_gaji']=$this->User->getDataSlipGaji();
        return view('master_slip_gaji/tambah_slip_gaji',$data);
    }
    public function ubah($id) 
    {
        $data['data_absen']=$this->User->getDataSlipGaji($id);
        return view('ubah_slip_gaji/index',$data);
    }
    public function update() 
    {
        $id=$this->request->getVar('kode');
        $nama=$this->request->getVar('nama');
        $nip=$this->request->getVar('nip');
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

        $data = [
            'id_data_absen'=>$id,
            'nama'=>$nama,
            'nip'=>$nip,
            'jabatan'=>$jabatan,
            'masuk'=>$masuk,
            'tidak_masuk'=>$tidak_masuk,
            'gaji_pokok'=>$gaji_pokok,
            'uang_transport'=>$uang_transport,
            'uang_makan'=>$uang_makan,
            'tunjangan_kawin'=>$tunjangan_kawin,
            'potongan'=>$potongan,
            'pinjaman'=>$pinjaman,
            'total_gaji'=>$total_gaji
        ];
        $this->User->save($data);
        return redirect()->to('/public/index.php/master_slip_gaji');
    }
    public function delete($id)
    {
        $this->User->delete($id);
        return redirect()->to('/public/index.php/master_slip_gaji');
    }
    public function cetak($id) 
    {
        $dompdf = new Dompdf();

        $data['data_absen']=$this->User->getDataSlipGaji($id);
        $html = view('cetak_slip_gaji/index',$data);
        
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4','portrait');
        $dompdf->render();
        $dompdf->stream('slip_gaji.pdf', array(
            "Attachment" => false
        ));
    }
    public function cetak_rekap() 
    {
        $dompdf = new Dompdf();

        $data['data_absen']=$this->User->getDataSlipGaji();
        $html = view('cetak_rekap/index',$data);
        
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4','landscape');
        $dompdf->render();
        $dompdf->stream('rekap_gaji.pdf', array(
            "Attachment" => false
        ));
    }
    public function cari_rekap()
    {
        // $bulan=$this->request->getVar('periode');
        // $bulan2=date("m",strtotime($bulan));
        // $tahun=date("y",strtotime($bulan));
        
        $periode = $this->request->getPost('periode');
        $bulan=date("m",strtotime($periode));
        $tahun=date("Y",strtotime($periode));

        $modelCari = new AbsensiModel();

        // $dataLaporan = $modelCari->laporanPerPeriode($bulan);
        // $data = [
        //     'datalaporan' => $dataLaporan,
        //     'bulan' => $bulan
        // ];
        // $dataLaporan = $modelCari->laporanPerPeriode($bulan);
        // $data = [
            // $data['data_absen']=$modelCari->laporanPerPeriode($bulan);
// $data['data_absen'] = $dataLaporan;
        // $data['data_absen']=$this->User->getDataAbsen();

        $model = new AbsensiModel();
        $dataLaporan = $model->select('nip,nama,bulan,tahun,nama_jabatan,masuk,alpha,ijin')->where('bulan',$bulan)->where('tahun',$tahun)->findAll();
// $dataLaporan = $data['data_absen'] ;

// $total = $model->select('nama,bulan,tahun')->where('bulan',$bulan)->where('tahun',$tahun)->count_all_results("data_absen");
$data = [
        'dataLaporan' => $dataLaporan,
        'bulan' => $bulan,
        'tahun' => $tahun
    ];

        return view('laporan/cetakRekap',$data);
    }


    public function cari_slip()
    {
        // $bulan=$this->request->getVar('periode');
        // $bulan2=date("m",strtotime($bulan));
        // $tahun=date("y",strtotime($bulan));
        
        $periode = $this->request->getPost('periode');
        $bulan=date("m",strtotime($periode));
        $tahun=date("Y",strtotime($periode));

        $modelCari = new AbsensiModel();

        // $dataLaporan = $modelCari->laporanPerPeriode($bulan);
        // $data = [
        //     'datalaporan' => $dataLaporan,
        //     'bulan' => $bulan
        // ];
        // $dataLaporan = $modelCari->laporanPerPeriode($bulan);
        // $data = [
            // $data['data_absen']=$modelCari->laporanPerPeriode($bulan);
// $data['data_absen'] = $dataLaporan;
        // $data['data_absen']=$this->User->getDataAbsen();

        $model = new AbsensiModel();
        $dataLaporan = $model->select('nip,nama,bulan,tahun,nama_jabatan,masuk,alpha,ijin')->where('bulan',$bulan)->where('tahun',$tahun)->findAll();
// $dataLaporan = $data['data_absen'] ;

// $total = $model->select('nama,bulan,tahun')->where('bulan',$bulan)->where('tahun',$tahun)->count_all_results("data_absen");
$data = [
        'dataLaporan' => $dataLaporan,
        'bulan' => $bulan,
        'tahun' => $tahun
    ];

        return view('laporan/cetakSlip',$data);
    }

}
