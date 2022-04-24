<?php
namespace App\Models;

use CodeIgniter\Model;

class AbsensiModel extends Model
{
    protected $table="data_absen";
    protected $primaryKey="id_data_absen";
    protected $allowedFields=['nama','nip','jabatan','masuk','alpha','gaji_pokok','uang_transport','uang_makan','tunjangan_kawin','potongan_ijin','pinjaman','total_gaji','sewa_motor','nama_jabatan','bpjs','ijin','potongan_alpha','tanggal_input','bulan','tahun'];

    public function getDataAbsen($id = false) 
    {
        if($id == false) {
            return $this->findAll();
        } else {
            return $this->where(['id_data_absen'=>$id]) -> first();
        }
        
    }

    // protected $table2="data_pegawai";
    // protected $primaryKey2="id_pegawai";
    // protected $allowedFields2=['nama','nip','jabatan','alamat','status','status_bpjs'];

    public function getDataGaji($id = false) 
    {
        $db = \Config\Database::connect();
    $builder = $db->table('data_gaji');
    
    return $builder->where(['id_data_gaji' => $id])
         ->get()->getResult();

        // if($id == false) {
        //     return $this->findAll();
        // } else {
        //     return $this->where(['id_pegawai'=>$id]) -> first();
        // }
        
    }
    public function laporanPerPeriode($bulan) 
    {
       return $this->table('data_absen')->where('bulan=',$bulan)->get();
        
    }
}

