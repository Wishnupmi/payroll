<?php
namespace App\Models;

use CodeIgniter\Model;

class PotonganModel extends Model
{
    protected $table="data_potongan";
    protected $primaryKey="id_potongan";
    protected $allowedFields=['jenis_potongan','jumlah'];

    public function getDataPotongan($id = false) 
    {
        if($id == false) {
            return $this->findAll();
        } else {
            return $this->where(['id_potongan'=>$id]) -> first();
        }
        
    }
}

