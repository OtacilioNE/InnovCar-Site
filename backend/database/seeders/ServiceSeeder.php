<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Usa o DB::table() diretamente para simplicidade
        DB::table('services')->insert([
            // Dados extraídos do seu Cardápio Automotivo
            [
                'name' => 'Limpeza Nível I',
                'description' => 'Lavagem externa com Snow Foam, aspiração, limpeza de rodas e proteção básica.',
                'price_p' => 100.00,
                'price_m' => 100.00,
                'price_g' => 120.00,
            ],
            [
                'name' => 'Limpeza Nível II',
                'description' => 'Pré-lavagem com Snow Foam, limpeza detalhada de rodas internas e borrachas.',
                'price_p' => 120.00,
                'price_m' => 140.00,
                'price_g' => 160.00,
            ],
            [
                'name' => 'Vitrificação 1 Ano (7H)',
                'description' => 'Correção de 70% da Pintura, Restauração de Brilho, Proteção de Pintura 12 Meses.',
                'price_p' => 1200.00,
                'price_m' => 1250.00,
                'price_g' => 1400.00,
            ],
            [
                'name' => 'Vitrificação 3 Anos (100% de Correção)',
                'description' => 'Correção de 100% da Pintura, Remoção de Riscos Pesados, Proteção de Pintura 36 Meses.',
                'price_p' => 1750.00,
                'price_m' => 1950.00,
                'price_g' => 2250.00,
            ],
            // Adicione aqui todos os outros serviços do seu Cardápio...
        ]);
    }
}