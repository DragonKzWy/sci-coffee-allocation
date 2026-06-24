<?php

namespace App\Http\Controllers;

use App\Models\EspacoCafe;
use Illuminate\Http\Request;

class EspacoCafeController extends Controller
{
    public function index()
    {
        $espacosCafe = EspacoCafe::all();

        return view('espacos_cafe.index', compact('espacosCafe'));
    }

    public function create()
    {
        return view('espacos_cafe.create');
    }

    public function store(Request $request)
    {
        $dados = $request->validate([
            'nome' => 'required|string|max:255|unique:espacos_cafe,nome',
            'lotacao' => 'required|integer|min:1',
        ]);

        EspacoCafe::create($dados);

        return redirect('/espacos-cafe');
    }

    public function show(string $id)
    {
        return EspacoCafe::findOrFail($id);
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