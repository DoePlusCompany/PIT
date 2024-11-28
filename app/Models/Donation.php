<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title', 
        'description', 
        'donation_type',
        'name_ong',       
        'chave_pix',
        'phone',
        'email',
        'address'
    ];

}
