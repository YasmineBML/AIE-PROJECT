<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Examen extends Model
{
    use HasFactory;
    protected $fillable = [
        'date_examen',
        'crenaux',

    ];

    // relation pour la relier avec module :
    public function module()
    {
        return $this->belongsTo(Module::class);
    }

    // relation avec ensieignant :
    public function enseignants()
    {
        return $this->belongsToMany(Enseignant::class,'examens_enseignants');
    }

    // relation avec local :
    public function locals()
    {
        return $this->belongsToMany(Local::class,'examens_locals');
    }
}
