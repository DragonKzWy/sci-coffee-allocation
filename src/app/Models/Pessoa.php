<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pessoa extends Model
{
    protected $fillable = [
        'nome',
        'sobrenome',
    ];

    public function alocacoesSala(): HasMany
    {
        return $this->hasMany(AlocacaoSala::class);
    }

    public function alocacoesCafe(): HasMany
    {
        return $this->hasMany(AlocacaoCafe::class);
    }
}
