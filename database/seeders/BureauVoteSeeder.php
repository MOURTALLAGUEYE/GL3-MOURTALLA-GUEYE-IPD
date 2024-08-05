<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BureauVoteSeeder extends Seeder
{
    public function run()
    {
        DB::table('bureaux_votes')->insert([
            ['nom' => 'Bureau 1', 'centre_vote_id' => 1],
            ['nom' => 'Bureau 2', 'centre_vote_id' => 2],
            ['nom' => 'Bureau 3', 'centre_vote_id' => 3],
            // Ajoutez d'autres bureaux de vote ici
        ]);
    }
}