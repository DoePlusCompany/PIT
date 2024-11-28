<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CarrosselImage;

class CarrosselController extends Controller
{
    public function index()
    {
        // Imagens do carrossel
        $imagens = [
            (new CarrosselImage('assets/carrosselImgs/noticia1.jpg'))->get_image(),
            (new CarrosselImage('assets/carrosselImgs/noticia2.jpg'))->get_image(),
            (new CarrosselImage('assets/carrosselImgs/noticia3.jpg'))->get_image(),
        ];

        // Passar as imagens para a view da página inicial
        return view('index', compact('imagens'));
    }
}



