<?php
namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table="tb_user";
    protected $primaryKey="id_users";
    protected $allowedFields=['nm_users','kelamin_users','username','password'];

    public function getUsers($id = false) 
    {
        if($id == false) {
            return $this->findAll();
        } else {
            return $this->where(['id_users'=>$id]) -> first();
        }
        
    }
}

