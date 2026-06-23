<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class EspacoCafe extends Model
{
    protected $table = 'espacos_cafe';

    protected $fillable = [
        'nome',
        'lotacao',
    ];

    public function alocacoesCafe(): HasMany
    {
        return $this->hasMany(AlocacaoCafe::class);
    }
}
