<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Groupe extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'nombre_etudiant',       
    ];

    public function section()
    {
        return $this->belongsTo(Section::class);
    }

    // la fonction pour relier groupe et local :
    public function locals()
    {
        return $this->belongsToMany(Local::class);
    }
}
