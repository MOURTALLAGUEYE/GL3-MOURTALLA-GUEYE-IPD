<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommuneSeeder extends Seeder
{
    public function run()
    {
        DB::table('communes')->insert([
            ['nom' => 'COMDAKAR', 'departement_id' => 1],
            ['nom' => 'COMTHIES', 'departement_id' => 2],
            ['nom' => 'COMDIOURBEL', 'departement_id' => 3],
            // Ajoutez d'autres communes ici
        ]);
    }
}