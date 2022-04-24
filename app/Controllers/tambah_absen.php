<?php

// namespace App\Controllers;

// use App\Models\AbsensiModel;

// class master_absen extends BaseController
// {
// 	public function index()
// 	{
// 		$model = new AbsensiModel();
// 		$data = $model->findAll();

// 		return view('master_absen/index', ['data_absen' => $data]);
// 	}

// 	public function save()
// 	{
// 		dd($this->request->getPost());
// 	}
// }


namespace App\Controllers;
use App\Models\GajiModel;
use App\Models\AbsensiModel;
use App\Models\PotonganModel;
use App\Models\PegawaiModel;

class tambah_absen extends BaseController
{
    public function __construct() {
        $this->Gaji = new GajiModel();
        $this->Absen= new AbsensiModel();
        $this->Potongan= new PotonganModel();
        $this->Pegawai= new PegawaiModel();
    }
    public function index()
    {
        // $data['data_absen']=$this->User->getDataAbsen();
        // return view('master_absen/tambah_absen',$data);
        
        // $model = new GajiModel();
		// $data = $model->findAll();
        
        $model = new GajiModel();
        $data['data_gaji'] = $model->findAll();

        $model2 = new PotonganModel();
        $data['data_potongan'] = $model2->findAll();

        $model3 = new PegawaiModel();
        $data['data_pegawai'] = $model3->findAll();
        
		return view('master_absen/tambah_absen', $data);

        
    }
    public function ubah($id) 
    {
        

        // $model = new AbsensiModel(); 
        // $data=$model->getDataAbsen($id);
        // return view('ubah_absen/index',['data_absen' => $data]);

        

//         $db      = \Config\Database::connect();
// $builder = $db->table('data_gaji');
// $data_gaji   = $builder->get();  // Produces: SELECT * FROM mytable

// foreach ($data_gaji->getResult() as $baris)
// {
//         echo $baris->gaji;
// }
// return view('ubah_absen/index', ['data_absen' => $data_absen]);
// return view('ubah_absen/index',['data_gaji' => $data_gaji]);


// $modelabsen = new AbsensiModel();
$data_absen=$this->Absen->find($id);
$data['data_absen'] = $data_absen;

$model = new GajiModel();
$data['data_gaji'] = $model->findAll();

$model2 = new PotonganModel();
$data['data_potongan'] = $model2->findAll();

return view('ubah_absen/index',$data);

if(is_object($data_absen)) {
    $data['data_absen'] = $data_absen;
    // $modelgj = new GajiModel();
    // $data['data_gaji'] = $this->Gaji->findAll();
    // $model = new GajiModel();
	// $data['data_gaji'] = $model->findAll();
    return view('ubah_absen/index',$data);
} else {
    throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
}        



// foreach ($query->getResult() as $row) {
//     echo $row->title;
// }
        // $modelgj = new AbsensiModel();
		// $datagj=$modelgj->getDataGaji();
        // return view('ubah_absen/index', ['data_gaji' => $datagj]);
        // $data['data_gaji']=$this->User->getDataGaji($id);
        // return view('ubah_absen/index',$data);

    }
    public function update() 
    {
        $id=$this->request->getVar('kode');
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
        $sewa_motor=$this->request->getVar('sewa_motor');
        $bpjs=$this->request->getVar('bpjs');
        $ijin=$this->request->getVar('ijin');
        $bulan=$this->request->getVar('periode');
        $bulan2=date("m",strtotime($bulan));
        $tahun=date("y",strtotime($bulan));

        if($alpha=="" and $ijin=="0") {
            $alpha = 0;
            $ijin = 0;
        }
        $data = [
            'id_data_absen'=>$id,
            'nama'=>$nama,
            'nip'=>$nip,
            'jabatan'=>$jabatan,
            'masuk'=>$masuk,
            'alpha'=>$alpha,
            'gaji_pokok'=>$gaji_pokok,
            'uang_transport'=>$uang_transport,
            'uang_makan'=>$uang_makan,
            'tunjangan_kawin'=>$tunjangan_kawin,
            'potongan'=>$potongan,
            'total_gaji'=>$total_gaji,
            'nama_jabatan'=>$jabatan2,
            'sewa_motor'=>$sewa_motor,
            'bpjs'=>$bpjs,
            'ijin'=>$ijin,
            'bulan'=>$bulan2,
            'tahun'=>$tahun
        ];
        $this->Absen->save($data);
        return redirect()->to('/public/index.php/master_absen');
    }
    public function delete($id)
    {
        $this->Absen->delete($id);
        return redirect()->to('/public/index.php/master_absen');
    }
    public function cari()
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

        return view('laporan/cetakAbsen',$data);
    }
}
