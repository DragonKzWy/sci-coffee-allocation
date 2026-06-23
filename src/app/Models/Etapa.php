<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Etapa extends Model
{
    protected $fillable = [
        'nome',
        'ordem',
    ];

    public function alocacoesSala(): HasMany
    {
        return $this->hasMany(AlocacaoSala::class);
    }
}
