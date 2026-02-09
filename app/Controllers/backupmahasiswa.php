<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class backupmahasiswa extends BaseController
{
    public function index()
    {
        $data = [
            'Title' => 'Data Mahasiswa',
            'Nama' => ['Luthfi', 'Mohan', 'Satria'],
        ];

        // $data['mahasiswa'] = [
        //     ['nama' => 'Luthfi', 'nim' => '10120221', 'jurusan' => 'Informatika'],
        //     ['nama' => 'Mohan', 'nim' => '10120222', 'jurusan' => 'Sistem Informasi'],
        //     ['nama' => 'Satria', 'nim' => '10120223', 'jurusan' => 'Teknik Komputer'],
        // ];
        return view('backupmahasiswa_view', $data);
    }
}
