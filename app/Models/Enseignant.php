<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enseignant extends Model
{
    use HasFactory;
<<<<<<< HEAD

 protected $table = 'enseignants';
 protected $primaryKey = 'idenseignant';
 protected $fillable = ['nom', 'prenom', 'email', 'motdepasse', 'type', 'grade'];

 public function modules()
=======
    protected $fillable = [
        'nom',
        'preom',
        'Date_de_naissence',
        'Email',
        'Mot_de_passe',
        'Grade',
        'Type',
    ];

    // la fontion pour relier enseignant et disponibilite :
    public function disponibilites()
    {
        return $this->belongsToMany(Disponibilite::class);
    }

    // la relation avec examen:
    public function examens()
    {
        return $this->belongsToMany(Enseignant::class);
    }

    // fonction pour relier avec module
    public function modules()
>>>>>>> c67ce7832856445180f575a7976d4c8f4974cfff
    {
        return $this->belongsToMany(Module::class);
    }
}
