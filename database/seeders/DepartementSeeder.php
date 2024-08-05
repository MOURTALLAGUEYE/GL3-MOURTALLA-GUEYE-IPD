<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartementSeeder extends Seeder
{
    public function run()
    {
        DB::table('departements')->insert([
            ['nom' => 'DEPDAKAR', 'region_id' => 1],
            ['nom' => 'DEPTHIES', 'region_id' => 2],
            ['nom' => 'DEPDIOURBEL', 'region_id' => 3],
            // Ajoutez d'autres départements ici
        ]);
    }
}