<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SAC extends Model
{
    protected $table = 'sac';
    
    protected $fillable = [
        'nome_cliente',
        'email_cliente',
        'mensagem',
        'status'
    ];
    
}

