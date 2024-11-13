<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index()
    {
        
        $faqs = [
            ['question' => 'Qual o objetivo da empresa?', 'answer' => 'Passar de ano'],
            ['question' => 'Como doar?', 'answer' => 'Faz o pix'],
            ['question' => 'Qual a função do lavarini e do kauan?', 'answer' => 'Videomaker e suporte técnico'],
        ];

        return view('/faq/faqs', compact('faqs'));
    }
}