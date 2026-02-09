<?php

namespace App\Controllers;

class Berita extends BaseController
{
    public function index(): string
    {
        return view('about_message');
    }
    public function details(): string
    {   
        return view('about_message');
    }
}