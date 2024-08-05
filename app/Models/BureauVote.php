<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BureauVote extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'centre_vote_id'];

    // Relation avec le centre de vote
    public function centreVote()
    {
        return $this->belongsTo(CentreVote::class);
    }

    // Relation avec les scores
    public function scores()
    {
        return $this->hasMany(Score::class);
    }
}