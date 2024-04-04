<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $fillable = ['nomsection', 'idspecialite'];

    // Relation avec la spécialité
    public function specialite()
    {
        return $this->belongsTo(Specialite::class, 'idspecialite');
    }
}
