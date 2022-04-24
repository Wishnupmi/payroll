<?php

namespace App\Controllers\Api;

use App\Models\GajiModel;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\RESTful\ResourceController;


class Home extends ResourceController
{
    use ResponseTrait;
    
    public function show($id = null)
    {
        $model = new GajiModel();
        $data = $model->find($id);

        return $this->respond($data);
    }
}