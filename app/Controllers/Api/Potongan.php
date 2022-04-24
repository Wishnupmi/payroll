<?php

namespace App\Controllers\Api;

use App\Models\PotonganModel;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\RESTful\ResourceController;


class Potongan extends ResourceController
{
    use ResponseTrait;
    
    public function show($id = null)
    {
        $model = new PotonganModel();
        $data = $model->find($id);

        return $this->respond($data);
    }
}