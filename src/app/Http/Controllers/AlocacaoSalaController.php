<?php

namespace App\Http\Controllers;

use App\Models\AlocacaoSala;
use App\Models\Etapa;
use App\Models\Pessoa;
use App\Models\Sala;
use Illuminate\Http\Request;

class AlocacaoSalaController extends Controller
{
    public function index()
    {
        $alocacoes = AlocacaoSala::with([
            'pessoa',
            'sala',
            'etapa'
        ])->get();

        return view(
            'alocacoes_sala.index',
            compact('alocacoes')
        );
    }

    public function create()
    {
        $pessoas = Pessoa::all();
        $salas = Sala::all();
        $etapas = Etapa::all();

        return view(
            'alocacoes_sala.create',
            compact(
                'pessoas',
                'salas',
                'etapas'
            )
        );
    }

    public function store(Request $request)
    {
        $dados = $request->validate([
            'pessoa_id' => 'required|exists:pessoas,id',
            'sala_id' => 'required|exists:salas,id',
            'etapa_id' => 'required|exists:etapas,id',
        ]);

        $jaExiste = AlocacaoSala::where(
            'pessoa_id',
            $dados['pessoa_id']
        )
        ->where(
            'etapa_id',
            $dados['etapa_id']
        )
        ->exists();

        if ($jaExiste) {
            return back()->withErrors([
                'pessoa_id' =>
                'Esta pessoa já possui uma sala nesta etapa.'
            ]);
        }

        $sala = Sala::findOrFail(
            $dados['sala_id']
        );

        $ocupacao = AlocacaoSala::where(
            'sala_id',
            $dados['sala_id']
        )
        ->where(
            'etapa_id',
            $dados['etapa_id']
        )
        ->count();

        if ($ocupacao >= $sala->lotacao) {
            return back()->withErrors([
                'sala_id' =>
                'A lotação máxima já foi atingida.'
            ]);
        }

        AlocacaoSala::create($dados);

        return redirect('/alocacoes-sala');
    }

    public function show(string $id)
    {
        $alocacao = AlocacaoSala::with([
            'pessoa',
            'sala',
            'etapa'
        ])->findOrFail($id);

        return view(
            'alocacoes_sala.show',
            compact('alocacao')
        );
    }

    public function edit(string $id)
    {
        //
    }

    public function update(
        Request $request,
        string $id
    )
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}