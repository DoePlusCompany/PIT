<?php

namespace App\Models;

class CarrosselImage{

    private $imagem;

    public function __construct($imagem){
        
        $this->imagem = $imagem;
    }

    public function get_image(){
        return $this->imagem;
    }
}