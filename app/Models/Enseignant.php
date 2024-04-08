<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enseignant extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'prenom',
        'date_de_naissence',
        'email',
        'mot_de_passe',
        'grade',
        'type',
    ];

    // la fontion pour relier enseignant et disponibilite :
    public function disponibilites()
    {
        return $this->belongsToMany(Disponibilite::class);
    }

    // la relation avec examen:
    public function examens()
    {
        return $this->belongsToMany(Examen::class);
    }

    // fonction pour relier avec module
    public function modules()
    {
        return $this->belongsToMany(Module::class);
    }
}
