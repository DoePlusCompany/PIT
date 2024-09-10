<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash; 

class UsersController extends Controller
{

    public function create() {
        return view('register');
    }

    public function register(Request $req) {
        $req->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        
        ]);
    
        User::create([
            'name' => $req->name,
            'email' => $req->email,
            'password' => Hash::make($req->password),
           
        ]);
    
        return redirect('/login')->with('success', 'Conta criada com sucesso! Faça login para continuar.');
    }
}
