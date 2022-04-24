<?php
 
namespace App\Controllers;
use App\Models\Serverside_model;
 
class Serverside extends BaseController
{
 
    public function __construct()
    {
        $this->serverside_model = new \App\Models\Serverside_model();
    }
 
    public function index()
    {
    return view('v_serverside_index');
  }
 
    public function listdata()
    {
 
        $request = \Config\Services::request();
        $list_data = $this->serverside_model;
        $where = ['id_pengguna !=' => 0];
                //Column Order Harus Sesuai Urutan Kolom Pada Header Tabel di bagian View
                //Awali nama kolom tabel dengan nama tabel->tanda titik->nama kolom seperti pengguna.nama
        $column_order = array(NULL,'pengguna.username','pengguna.nama','pengguna.level');
        $column_search = array('pengguna.username','pengguna.nama','pengguna.level');
        $order = array('pengguna.username' => 'asc');
        $list = $list_data->get_datatables('pengguna', $column_order, $column_search, $order, $where);
        $data = array();
        $no = $request->getPost("start");
        foreach ($list as $lists) {
            $no++;
            $row    = array();
            $row[] = $no;
            $row[] = $lists->username;
            $row[] = $lists->nama;
            $row[] = $lists->level;
            $data[] = $row;
        }
        $output = array(
            "draw" => $request->getPost("draw"),
            "recordsTotal" => $list_data->count_all('pengguna', $where),
            "recordsFiltered" => $list_data->count_filtered('pengguna', $column_order, $column_search, $order, $where),
            "data" => $data,
        );
 
        return json_encode($output);
    }
   
}