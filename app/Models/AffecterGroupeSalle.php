<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AffecterGroupeSalle extends Model
{
    protected $fillable = ['idlocal', 'idgroupe'];

    public function local()
    {
        return $this->belongsTo(Local::class, 'idlocal');
    }

    public function groupe()
    {
        return $this->belongsTo(Groupe::class, 'idgroupe');
    }
}
