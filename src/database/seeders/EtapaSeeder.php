<?php

namespace Database\Seeders;

use App\Models\Etapa;
use Illuminate\Database\Seeder;

class EtapaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Etapa::firstOrCreate(
            ['ordem' => 1],
            [
                'nome' => 'Etapa 1',
            ]
        );

        Etapa::firstOrCreate(
            ['ordem' => 2],
            [
                'nome' => 'Etapa 2',
            ]
        );
    }
}