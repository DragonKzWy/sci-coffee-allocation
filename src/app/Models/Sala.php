<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Sala extends Model
{
    protected $fillable = [
        'nome',
        'lotacao',
    ];

    public function alocacoesSala(): HasMany
    {
        return $this->hasMany(AlocacaoSala::class);
    }
}
