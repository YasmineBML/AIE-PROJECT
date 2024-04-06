<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class module extends Model
{
    use HasFactory;
    protected $fillable = [
        'libelle',
        'semsetre',       
    ];

    public function specialite()
    {
        return $this->belongsTo(Specialite::class);
    }

    // focntion pour relier au enseignant :
    public function enseignants()
    {
        return $this->belongsToMany(Enseignant::class);
    }

    // la focntion pour relier les module et examen :
    public function examens()
    {
        return $this->hasMany(Examen::class);
    }
}
