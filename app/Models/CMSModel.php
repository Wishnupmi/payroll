<?php
namespace App\Models;

use CodeIgniter\Model;

class CMSModel extends Model
{
    protected $table="tb_user";
    protected $primaryKey="id_users";
    protected $allowedFields=['nm_users','kelamin_users','username','password'];

    public function getUsers() {
        return $this->findAll();
    }
}