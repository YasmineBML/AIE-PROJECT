<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enseignant extends Model
{
    use HasFactory;

 protected $table = 'enseignants';
 protected $primaryKey = 'idenseignant';
 protected $fillable = ['nom', 'prenom', 'email', 'motdepasse', 'type', 'grade'];

 public function modules()
    {
        return $this->belongsToMany(Module::class);
    }
}
