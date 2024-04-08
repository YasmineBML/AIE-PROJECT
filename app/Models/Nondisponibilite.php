<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nondisponibilite extends Model
{
    use HasFactory;
    protected $fillable = [
        'date',
        'crenaux',
    ];

    // la relation entre la non disponibilite et le local  :
    public function locals()
    {
        return $this->belongsToMany(Local::class);
    }
}
