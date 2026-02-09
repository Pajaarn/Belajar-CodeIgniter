<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class BeritaCard extends BaseController
{
    public function index()
    {
        $data['BeritaList'] = [
            [
                'judul' => 'Teknologi AI Terbaru 2026',
                'isi' => 'Perkembangan teknologi Artificial Intelligence semakin pesat di tahun 2026. Berbagai inovasi baru bermunculan untuk memudahkan kehidupan manusia dalam berbagai sektor industri dan pendidikan.'
            ],
            [
                'judul' => 'Mahasiswa Indonesia Raih Prestasi',
                'isi' => 'Tim mahasiswa dari berbagai universitas di Indonesia berhasil meraih juara dalam kompetisi pemrograman internasional. Prestasi ini membanggakan dan mengharumkan nama Indonesia di kancah global.'
            ],
            [
                'judul' => 'Framework Web Development Populer',
                'isi' => 'CodeIgniter 4, Laravel, dan React menjadi framework paling populer di kalangan developer Indonesia. Framework ini memudahkan proses pengembangan aplikasi web modern yang scalable dan maintainable.'
            ],
        ];
        return view('beritacard_view', $data);
    }
}
