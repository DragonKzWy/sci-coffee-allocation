<?php

namespace App\Http\Controllers;

use App\Models\AlocacaoCafe;
use App\Models\EspacoCafe;
use App\Models\Pessoa;
use Illuminate\Http\Request;

class AlocacaoCafeController extends Controller
{
    public function index()
    {
        $alocacoes = AlocacaoCafe::with([
            'pessoa',
            'espacoCafe'
        ])->get();

        return view(
            'alocacoes_cafe.index',
            compact('alocacoes')
        );
    }

    public function create()
    {
        $pessoas = Pessoa::all();

        $espacosCafe = EspacoCafe::all();

        return view(
            'alocacoes_cafe.create',
            compact(
                'pessoas',
                'espacosCafe'
            )
        );
    }

    public function store(Request $request)
    {
        $dados = $request->validate([
            'pessoa_id' => 'required|exists:pessoas,id',
            'espaco_cafe_id' => 'required|exists:espacos_cafe,id',
            'intervalo' => 'required|integer|min:1|max:2',
        ]);

        $jaExiste = AlocacaoCafe::where(
            'pessoa_id',
            $dados['pessoa_id']
        )
        ->where(
            'intervalo',
            $dados['intervalo']
        )
        ->exists();

        if ($jaExiste) {
            return back()->withErrors([
                'pessoa_id' =>
                'Esta pessoa já possui um espaço de café neste intervalo.'
            ]);
        }

        $espacoCafe = EspacoCafe::findOrFail(
            $dados['espaco_cafe_id']
        );

        $ocupacao = AlocacaoCafe::where(
            'espaco_cafe_id',
            $dados['espaco_cafe_id']
        )
        ->where(
            'intervalo',
            $dados['intervalo']
        )
        ->count();

        if ($ocupacao >= $espacoCafe->lotacao) {
            return back()->withErrors([
                'espaco_cafe_id' =>
                'A lotação máxima já foi atingida.'
            ]);
        }

        AlocacaoCafe::create($dados);

        return redirect('/alocacoes-cafe');
    }

    public function show(string $id)
    {
        $alocacao = AlocacaoCafe::with([
            'pessoa',
            'espacoCafe'
        ])->findOrFail($id);

        return view(
            'alocacoes_cafe.show',
            compact('alocacao')
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