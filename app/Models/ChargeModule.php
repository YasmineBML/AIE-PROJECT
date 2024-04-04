<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class ChargeModule extends Model
{
    protected $fillable = ['idenseignant', 'idmodule'];

    public function enseignant()
    {
        return $this->belongsTo(Enseignant::class, 'idenseignant');
    }

    public function module()
    {
        return $this->belongsTo(Module::class, 'idmodule');
    }
}
