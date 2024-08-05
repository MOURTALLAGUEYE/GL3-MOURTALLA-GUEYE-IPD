<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CentreVote extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'commune_id'];

    // Relation avec la commune
    public function commune()
    {
        return $this->belongsTo(Commune::class);
    }

    // Relation avec les bureaux de vote
    public function bureauxDeVote()
    {
        return $this->hasMany(BureauVote::class);
    }
}