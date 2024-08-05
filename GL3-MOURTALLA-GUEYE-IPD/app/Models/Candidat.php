<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidat extends Model
{
    use HasFactory;

    protected $fillable = ['nom'];

    // Relation avec les scores
    public function scores()
    {
        return $this->hasMany(Score::class);
    }
}