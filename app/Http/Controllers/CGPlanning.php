<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class CGPlanning extends BaseController
{   public function index()
{
    // Exemple de récupération de données depuis la base de données
    // Supposons que vous souhaitez récupérer toutes les données des cours

    // Puis, retournez la vue avec les données récupérées
    return view(view: 'GestionPlanning');
}
    use AuthorizesRequests, ValidatesRequests;
}
