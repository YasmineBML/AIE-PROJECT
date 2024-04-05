<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NoDisponibiliteLocal extends Model
{
    protected $fillable = ['idlocal', 'idND'];

    public function local()
    {
        return $this->belongsTo(Local::class, 'idlocal');
    }

    public function nondisponibilite()
    {
        return $this->belongsTo(Nondisponibilite::class, 'idND');
    }
}
