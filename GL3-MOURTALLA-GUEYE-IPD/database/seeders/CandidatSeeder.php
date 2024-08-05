<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CandidatSeeder extends Seeder
{
    public function run()
    {
        DB::table('candidats')->insert([
            ['nom' => 'Candidat A'],
            ['nom' => 'Candidat B'],
            ['nom' => 'Candidat C'],
            // Ajoutez d'autres candidats ici
        ]);
    }
}