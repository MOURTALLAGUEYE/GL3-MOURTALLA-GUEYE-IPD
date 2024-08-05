<?php
namespace App\Http\Controllers;

use App\Models\BureauDeVote;
use App\Models\Candidat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ElectionController extends Controller
{
    public function index()
    {
        $resultats = $this->calculerResultats();
        return view('elections.index', compact('resultats'));
    }

    private function calculerResultats()
    {
        $totalVotes = DB::table('scores')->sum('votes');
        $resultats = [];

        $candidats = Candidat::with('scores')->get();
        foreach ($candidats as $candidat) {
            $totalVoix = $candidat->scores->sum('votes');
            $pourcentage = ($totalVoix / $totalVotes) * 100;

            if ($pourcentage > 50) {
                $resultats['elus'][] = $candidat;
            } else {
                $resultats['nonElus'][] = $candidat;
            }
        }

        $resultats['secondTour'] = $this->determinerSecondTour($resultats['nonElus']);
        return $resultats;
    }

    private function determinerSecondTour($candidats)
    {
        $candidats = $candidats->sortByDesc(function($candidat) {
            return $candidat->scores->sum('votes');
        });

        return $candidats->take(2);
    }
}