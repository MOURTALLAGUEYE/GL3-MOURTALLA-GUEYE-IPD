<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ScoreSeeder extends Seeder
{
    public function run()
    {
        DB::table('scores')->insert([
            ['bureau_vote_id' => 1, 'candidat_id' => 1, 'voix' => 120],
            ['bureau_vote_id' => 1, 'candidat_id' => 2, 'voix' => 80],
            ['bureau_vote_id' => 2, 'candidat_id' => 1, 'voix' => 150],
            // Ajoutez d'autres scores ici
        ]);
    }
}