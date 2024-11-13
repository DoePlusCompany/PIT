<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{
   
    public function showProfile()
    {
        $user = Auth::user();
        return view('profile.show', compact('user'));
    }

 
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }

    public function editProfile()
{
    $user = Auth::user();
    return view('profile.edit', compact('user'));
}

public function updateProfile(Request $request)
{
    $user = Auth::user();

    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255|unique:users,email,' . $user->id,
        'address' => 'nullable|string|max:255',
        'phone' => 'nullable|string|max:20',
        'birthdate' => 'nullable|date',
        'bio' => 'nullable|string|max:500',
    ]);

    $user->update($request->only(['name', 'email', 'address', 'phone', 'birthdate', 'bio']));

    return redirect()->route('profile.show')->with('success', 'Perfil atualizado com sucesso!');
}


}
