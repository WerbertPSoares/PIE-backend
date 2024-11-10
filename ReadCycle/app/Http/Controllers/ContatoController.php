<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contato;
use Illuminate\Support\Facades\Log;

class ContatoController extends Controller
{
    public function store(Request $request)
    {
        try {
            // Validação dos dados recebidos
            $validatedData = $request->validate([
                'nome' => 'required|string|max:255',
                'telefone' => 'required|string|max:20',
                'email' => 'required|email', // Validação de e-mail
                'mensagem' => 'required|string',
            ]);

            // Armazenando os dados no banco de dados
            Contato::create($validatedData);

            // Redirecionar com uma mensagem de sucesso
            return redirect()->back()->with('success', 'Mensagem enviada com sucesso!');
        } catch (\Exception $e) {
            // Log do erro para depuração
            Log::error('Erro ao enviar contato: '.$e->getMessage());

            // Redirecionar com uma mensagem de erro
            return redirect()->back()->with('error', 'Houve um erro ao enviar sua mensagem. Tente novamente!');
        }
    }
    public function index()
    {
        // Busca todas as mensagens da tabela de contatos
        $mensagens = Contato::all();

        // Retorna a view com as mensagens
        return view('admin.contatos.index', compact('mensagens'));
    }
}

