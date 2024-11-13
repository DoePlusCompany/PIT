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
            'name_ong'  => 'required|string',
            'chave_pix' => 'nullable|string',
        ]);
    
        $donation = new Donation($request->all());
        $donation->save();
    
        return redirect()->route('donations.index')->with('success', 'Doação criada com sucesso!');
    }
    
   
    public function index(Request $request)
    {
        $query = Donation::query();
    
        // Verifica se foi passado um tipo de doação para filtrar
        if ($request->has('donation_type') && $request->donation_type != '') {
            $query->where('donation_type', $request->donation_type);
        }
    
        // Obtém as doações filtradas ou todas se não houver filtro
        $donations = $query->get();
    
        return view('donations.index', compact('donations'));
    }

    public function show($id)
{
    $donation = Donation::findOrFail($id);
    return view('donations.show', compact('donation'));
}

}