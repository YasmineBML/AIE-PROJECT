<?php

namespace App\Http\Controllers;

use App\Models; // Assurez-vous d'importer le modèle Course si nécessaire

class CGModule extends Controller
{
    public function index()
    {

        return view(view: 'module');
    }
}
