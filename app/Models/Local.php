<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
    protected $fillable = ['libelle', 'capacite', 'type', 'idexamen'];

    // Relation avec l'examen
    public function examen()
    {
        return $this->belongsTo(Examen::class, 'idexamen');
    }
}
