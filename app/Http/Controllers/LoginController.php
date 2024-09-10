<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login() {
        return view('login');
    }

    public function authenticate(Request $req) {
        $credentials = array(
            'email' => $req->email,
            'password' => $req->password
        );
        
        if (Auth::attempt($credentials)) {
            $req->session()->regenerate();
            return redirect('/');
        }

        return back()->withErrors([
            'email' => "Usuário ou Senha Inválidos!"
        ])->withInput();
    }

    public function logout(Request $req) {
        Auth::logout();
        $req->session()->invalidate();
        $req->session()->regenerateToken();
        return redirect('login');
    }


}
