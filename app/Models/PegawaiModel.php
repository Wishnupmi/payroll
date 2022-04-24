<?php
namespace App\Models;

use CodeIgniter\Model;

class PegawaiModel extends Model
{
    protected $table="data_pegawai";
    protected $primaryKey="id_pegawai";
    protected $allowedFields=['nama','nip','jabatan','alamat','status','status_bpjs'];

    public function getDataPegawai($id = false) 
    {
        if($id == false) {
            return $this->findAll();
        } else {
            return $this->where(['id_pegawai'=>$id]) -> first();
        }
        
    }
}

