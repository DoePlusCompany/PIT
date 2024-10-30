<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SAC;
use Illuminate\Support\Facades\Mail;
use App\Mail\SolicitacaoMail;

class SACController extends Controller
{
    public function create()
    {
        return view('sac.create');
    }

    public function store(Request $request)
{
    // Validação
    $request->validate([
        'nome_cliente' => 'required|string|max:255',
        'email_cliente' => 'required|email|max:255',
        'mensagem' => 'required|string',  // A mensagem é obrigatória
    ]);

    // Criar nova solicitação
    $solicitacao = SAC::create([
        'nome_cliente' => $request->nome_cliente,
        'email_cliente' => $request->email_cliente,
        'mensagem' => $request->mensagem,  // Certifique-se de que o campo mensagem está sendo inserido
    ]);

    // Enviar e-mail
    Mail::to('atendimento@empresa.com')->send(new SolicitacaoMail($solicitacao));

    return redirect()->back()->with('success', 'Solicitação enviada com sucesso!');
}

    public function index()
    {
        $solicitacoes = SAC::all();
        return view('sac.index', compact('solicitacoes'));
    }

    public function update(Request $request, $id)
    {
    // Validação da requisição
    $request->validate([
        'status' => 'required|string|max:255',
    ]);

    

    // Encontrar a solicitação pelo ID
    $solicitacao = SAC::find($id);

    // Atualizar o status
    $solicitacao->status = $request->status;
    $solicitacao->save();

    // Redirecionar com mensagem de sucesso
    return redirect()->back()->with('success', 'Status da solicitação atualizado com sucesso!');
    }

    public function destroy($id)
{
    // Encontrar a solicitação pelo ID
    $solicitacao = SAC::find($id);

    // Verificar se a solicitação existe e se o status é "Concluída" ou "Cancelada"
    if ($solicitacao && ($solicitacao->status === 'Concluída' || $solicitacao->status === 'Cancelada')) {
        $solicitacao->delete();
        return redirect()->back()->with('success', 'Solicitação excluída com sucesso!');
    }

    return redirect()->back()->with('error', 'Solicitação não pode ser excluída. O status deve ser "Concluída" ou "Cancelada".');
}



}
