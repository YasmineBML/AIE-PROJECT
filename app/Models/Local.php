<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
    use HasFactory;
    protected $fillable = [
        'libelle',
        'capacite',
        'type',
    ];

    // focntion pour relier local avec groupe :
    public function groupes()
    {
        return $this->belongsToMany(Group::class);
    }

    // relation de local avec non disponibilite :

    public function nondisponibilites()
    {
        return $this->belongsToMany(Nondisponibilite::class);
    }
}
