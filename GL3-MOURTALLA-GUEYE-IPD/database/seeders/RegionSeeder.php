<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegionSeeder extends Seeder
{
    public function run()
    {
        DB::table('regions')->insert([
            ['nom' => 'DAKAR'],
            ['nom' => 'THIES'],
            ['nom' => 'DIOURBEL'],
            // Ajoutez d'autres régions ici
        ]);
    }
}