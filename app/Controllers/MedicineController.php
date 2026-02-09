<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class MedicineController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'MediMarket - Home'
        ];
        
        return view('index', $data);
    }
}
