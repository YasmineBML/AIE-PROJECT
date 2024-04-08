<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrateur extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'prenom',
        'date_de_naissence',
        'email',
        'mot_de_passe',       
    ];
}
