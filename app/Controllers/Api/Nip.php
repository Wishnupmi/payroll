<?php

namespace App\Controllers\Api;

use App\Models\NipModel;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\RESTful\ResourceController;


class Nip extends ResourceController
{
    use ResponseTrait;
    
    public function show($id = null)
    {
        $model = new NipModel();
        $data = $model->find($id);

        return $this->respond($data);
    }
}