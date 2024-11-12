<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donation;

class DonationController extends Controller
{
    public function create()
    {
        return view('donations.create');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            
            'title' => 'required|string|max:255',
            'description' => 'required',
            'donation_type' => 'required|string',
        ]);
    
        $donation = new Donation($request->all());
    
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images', 'public');
            $donation->image = $path;
        }
    
        $donation->save();
    
        return redirect()->route('donations.index')->with('success', 'Doação criada com sucesso!');
    }
    
   
    public function index()
    {
        $donations = Donation::all(); 
        return view('donations.index', compact('donations'));
    }

}