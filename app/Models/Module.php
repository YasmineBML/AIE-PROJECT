<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    protected $fillable = ['libelle', 'idspecialite'];

    public function specialite()
    {
        return $this->belongsTo(Specialite::class, 'idspecialite', 'idspecialite');
    }
}
