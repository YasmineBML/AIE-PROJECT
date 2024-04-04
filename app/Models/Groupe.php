<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Groupe extends Model
{
    protected $fillable = ['nombre_etudiant', 'idsection'];

    // Relation avec la section
    public function section()
    {
        return $this->belongsTo(Section::class, 'idsection');
    }
}
