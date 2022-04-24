<?php
namespace App\Models;

use CodeIgniter\Model;

class KoperasiModel extends Model
{
    protected $table="data_koperasi";
    protected $primaryKey="id_data_koperasi";
    protected $allowedFields=['nip','nama','masuk_bln','masuk_thn'];

    public function getDataKoperasi($id = false) 
    {
        if($id == false) {
            return $this->findAll();
        } else {
            return $this->where(['id_data_koperasi'=>$id]) -> first();
        }
        
    }
}

