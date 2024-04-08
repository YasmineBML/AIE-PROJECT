<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disponibilite extends Model
{
    use HasFactory;
    protected $fillable = [
        'jour',
        'crenaux',     
    ];

    // fonction pour la relier enseignant :
    public function enseignants()
    {
        return $this->belongsToMany(Enseignant::class);
    }
}
