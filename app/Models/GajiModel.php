<?php
namespace App\Models;

use CodeIgniter\Model;

class GajiModel extends Model
{
    protected $table="data_gaji";
    protected $primaryKey="id_data_gaji";
    protected $allowedFields=['id_data_gaji','jabatan','gaji','uang_makan','uang_transport','tunjangan_kawin','sewa_motor','bpjs'];

    public function getDataGaji($id = false) 
    {
        if($id == false) {
            return $this->findAll();
        } else {
            return $this->where(['id_data_gaji'=>$id]) -> first();
        }
        
    }
}
