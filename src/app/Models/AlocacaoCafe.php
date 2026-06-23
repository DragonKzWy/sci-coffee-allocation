<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AlocacaoCafe extends Model
{
    protected $table = 'alocacoes_cafe';

    protected $fillable = [
        'pessoa_id',
        'espaco_cafe_id',
        'intervalo',
    ];

    public function pessoa(): BelongsTo
    {
        return $this->belongsTo(Pessoa::class);
    }

    public function espacoCafe(): BelongsTo
    {
        return $this->belongsTo(EspacoCafe::class);
    }
}
