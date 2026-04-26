<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function news()
{
    $article = [
        'title' => 'RoboDog Kendali Jarak Jauh, Inovasi ITS bersama Indosat, Nokia, dan NVIDIA',
        'date' => 'Minggu, 1 Maret 2026',
        'author' => 'Naurah Fitri',
        'images' => [
            'https://www.its.ac.id/news/wp-content/uploads/sites/2/2026/03/kerjasama-robodog-2-1024x682.jpeg',
            'https://www.its.ac.id/news/wp-content/uploads/sites/2/2026/03/kerjasama-robodog-3-1024x712.jpeg',
            'https://www.its.ac.id/news/wp-content/uploads/sites/2/2026/03/kerjasama-robodog-1-1024x686.jpeg'
        ],
        'content' => [
            'Surabaya, ITS News — Institut Teknologi Sepuluh Nopember (ITS) kembali menegaskan kapasitasnya dalam pengembangan robotika dan AI.',
            'Sinergi empat institusi menjadi kunci terwujudnya inovasi ini.',
            'RoboDog dirancang mampu menerima perintah suara manusia dan memahami konteks instruksi.',
            'Dalam skenario demonstrasi, RoboDog dapat dikendalikan dari jarak ribuan kilometer.'
        ]
    ];

    return view('news', compact('article'));
}
}
