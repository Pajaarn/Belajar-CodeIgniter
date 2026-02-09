<?php

namespace App\Controllers;

class DataController extends BaseController
{
    public function create(): string
    {
        return view('create_form');
    }
    
    public function store()
    {
        $data = [
            'id' => uniqid(),
            'nama' => $this->request->getPost('nama'),
            'email' => $this->request->getPost('email'),
            'pesan' => $this->request->getPost('pesan'),
            'tanggal' => date('Y-m-d H:i:s')
        ];
        
        $dataList = session()->get('data_list') ?? [];
        $dataList[] = $data;
        session()->set('data_list', $dataList);
        
        return redirect()->to('/home')->with('success', 'Data berhasil disimpan!');
    }
    
    public function home(): string
    {
        $dataList = session()->get('data_list') ?? [];
        return view('home', ['dataList' => $dataList]);
    }
}