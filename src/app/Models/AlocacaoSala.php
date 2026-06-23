<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AlocacaoSala extends Model
{
    protected $table = 'alocacoes_sala';

    protected $fillable = [
        'pessoa_id',
        'sala_id',
        'etapa_id',
    ];

    public function pessoa(): BelongsTo
    {
        return $this->belongsTo(Pessoa::class);
    }

    public function sala(): BelongsTo
    {
        return $this->belongsTo(Sala::class);
    }

    public function etapa(): BelongsTo
    {
        return $this->belongsTo(Etapa::class);
    }
}
