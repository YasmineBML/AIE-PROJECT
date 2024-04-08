<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class specialite extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'departement',
        'niveau',
    ];

    // la focntion pour relier les module et specialite :
    public function modules()
    {
        return $this->hasMany(Module::class);
    }
    
}
