<?php

namespace App\Mail;

use App\Models\SAC;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SolicitacaoMail extends Mailable
{
    use Queueable, SerializesModels;

    public $solicitacao;

    public function __construct(SAC $solicitacao)
    {
        $this->solicitacao = $solicitacao;
    }

    public function build()
    {
        return $this->subject('Nova Solicitação de Atendimento')
                    ->view('emails.solicitacao');
    }
}


