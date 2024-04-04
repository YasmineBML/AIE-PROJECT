<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnseignantDisponibilite extends Model
{
    protected $fillable = ['enseignant_id', 'disponibilite_id'];

    // Relation avec l'enseignant
    public function enseignant()
    {
        return $this->belongsTo(Enseignant::class);
    }

    // Relation avec la disponibilité
    public function disponibilite()
    {
        return $this->belongsTo(Disponibilite::class);
    }
}
