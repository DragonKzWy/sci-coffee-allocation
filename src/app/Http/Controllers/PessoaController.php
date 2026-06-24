<?php

namespace App\Http\Controllers;

use App\Models\Pessoa;
use Illuminate\Http\Request;

class PessoaController extends Controller
{
    public function index()
    {
        $pessoas = Pessoa::all();

        return view('pessoas.index', compact('pessoas'));
    }

    public function store(Request $request)
    {
        $dados = $request->validate([
            'nome' => 'required|string|max:255',
            'sobrenome' => 'required|string|max:255',
        ]);

        $pessoa = Pessoa::create($dados);

        return redirect('/pessoas');
    }

    public function show(string $id)
    {
        $pessoa = Pessoa::with([
            'alocacoesSala.sala',
            'alocacoesSala.etapa',
            'alocacoesCafe.espacoCafe',
        ])->findOrFail($id);

        return view(
            'pessoas.show',
            compact('pessoa')
        );
    }

    public function create()
    {
        return view('pessoas.create');
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}