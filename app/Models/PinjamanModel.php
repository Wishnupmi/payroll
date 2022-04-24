<?php
namespace App\Models;

use CodeIgniter\Model;

class PinjamanModel extends Model
{
    protected $table="data_pinjaman";
    protected $primaryKey="id_data_pinjaman";
    protected $allowedFields=['nip','nama','pinjaman','jangka_waktu'];

    public function getDataPinjaman($id = false) 
    {
        if($id == false) {
            return $this->findAll();
        } else {
            return $this->where(['id_data_pinjaman'=>$id]) -> first();
        }
        
    }
}

