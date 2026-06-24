<?php

namespace App\Http\Controllers;

use App\Models\Sala;
use Illuminate\Http\Request;

class SalaController extends Controller
{
    public function index()
    {
        $salas = Sala::all();

        return view('salas.index', compact('salas'));
    }

    public function create()
    {
        return view('salas.create');
    }

    public function store(Request $request)
    {
        $dados = $request->validate([
            'nome' => 'required|string|max:255|unique:salas,nome',
            'lotacao' => 'required|integer|min:1',
        ]);

        Sala::create($dados);

        return redirect('/salas');
    }

    public function show(string $id)
    {
        $sala = Sala::with([
            'alocacoesSala.pessoa',
            'alocacoesSala.etapa',
        ])->findOrFail($id);

        return view(
            'salas.show',
            compact('sala')
        );
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