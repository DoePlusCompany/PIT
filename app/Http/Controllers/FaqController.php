<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index()
    {

        $faqs = [
            ['question' => 'O que é a DoePlus?', 'answer' => 'DoePlus é uma plataforma desenvolvida para facilitar doações e conectar doadores a quem mais precisa. Nosso objetivo é simplificar o processo de doação e incentivar o impacto positivo na sociedade.'],
            ['question' => 'Qual o objetivo do projeto?', 'answer' => 'Criar um ambiente onde doadores possam oferecer ajuda de maneira prática e intuitiva, enquanto instituições ou indivíduos possam receber apoio de forma organizada e segura.'],
            [
                'question' => 'Quais funcionalidades o site possui?',
                'answer' => 'Cadastro e login de usuários, 
                registro de doações,
                listagem e busca de campanhas ativas,
                detalhes de campanhas, incluindo metas e progresso,
                sistema de notificação para atualizações sobre campanhas.'
            ],
            ['question' => 'Como posso entrar em contato?', 'answer' => 'Através do email doepluscompany@gmail.com ou preenchendo o formulário presente no site.']
        ];

        return view('/faq/faqs', compact('faqs'));
    }
}