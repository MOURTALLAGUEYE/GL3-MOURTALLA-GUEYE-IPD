<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Score;
use App\Models\BureauDeVote;

class VoteController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'bureau_id' => 'required|exists:bureaux_de_votes,id',
            'nombre_de_voix' => 'required|integer|min:0',
        ]);

        $vote = new Score();
        $vote->bureau_de_vote_id = $validated['bureau_id'];
        $vote->nombre_de_voix = $validated['nombre_de_voix'];
        $vote->save();

        return redirect()->back()->with('success', 'Résultats enregistrés avec succès.');
    }
}