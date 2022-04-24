<?php
namespace App\Models;

use CodeIgniter\Model;

class SlipGajiModel extends Model
{
    protected $table="data_absen";
    protected $primaryKey="id_data_absen";
    protected $allowedFields=['nama','nip','jabatan','masuk','alpha','gaji_pokok','uang_transport','uang_makan','tunjangan_kawin','potongan_alpha','pinjaman','total_gaji','nama_jabatan','sewa_motor','bpjs','ijin','potongan_ijin'];

    public function getDataSlipGaji($id = false) 
    {
        if($id == false) {
            return $this->findAll();
        } else {
            return $this->where(['id_data_absen'=>$id]) -> first();
        }
        
    }
}
