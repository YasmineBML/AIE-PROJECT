<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
    ];

    public function specialite()
    {
        return $this->belongsTo(Specialite::class);
    }

    // fonction pour la relation avec les groupe :
    public function groupes()
    {
        return $this->hasMany(Groupe::class);
    }
}
