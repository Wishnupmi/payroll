<?php

// namespace App\Controllers;
// use App\Models\AbsensiModel;

// class master_absen extends BaseController
// {
//     public function __construct() {
//         $this->User = new AbsensiModel();
//     }
//     public function index()
//     {
//         $data['data_absen']=$this->User->getDataAbsen();
//         // $data['data_pegawai']=$this->User->getDataPegawai();
//         return view('master_absen/index',$data);
//         return view('master_absen/index', ['absen' => $data]);
//     }
// }




namespace App\Controllers;

use App\Models\AbsensiModel;

class master_absen extends BaseController
{
	public function index()
	{
		$model = new AbsensiModel();
		$data = $model->findAll();

		return view('master_absen/index', ['data_absen' => $data]);
	}

	public function save()
	{
		dd($this->request->getPost());
	}
}

