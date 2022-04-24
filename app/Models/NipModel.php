<?php
namespace App\Models;

use CodeIgniter\Model;

class NipModel extends Model
{
    protected $table="data_pegawai";
    protected $primaryKey="nip";
    protected $allowedFields=['nama','nip','jabatan','alamat','status','status_bpjs'];

    public function getDataPegawai($id = false) 
    {
        if($id == false) {
            return $this->findAll();
        } else {
            return $this->where(['nip'=>$id]) -> first();
        }
        
    }
}

