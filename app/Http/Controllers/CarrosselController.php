<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarrosselController extends Controller
{
    public function index()
    {
        // Imagens do carrossel
        $imagens = [
            'assets/carrosselImgs/noticia1.png',
            'assets/carrosselImgs/noticia2.png',
            'assets/carrosselImgs/noticia3.png',
        ];

        // Passar as imagens para a view da página inicial
        return view('index', compact('imagens'));
    }
}



