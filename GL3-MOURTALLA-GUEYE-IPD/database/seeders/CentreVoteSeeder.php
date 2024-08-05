<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CentreVoteSeeder extends Seeder
{
    public function run()
    {
        DB::table('centres_votes')->insert([
            ['nom' => 'Centre A', 'commune_id' => 1],
            ['nom' => 'Centre B', 'commune_id' => 2],
            ['nom' => 'Centre C', 'commune_id' => 3],
            // Ajoutez d'autres centres de vote ici
        ]);
    }
}