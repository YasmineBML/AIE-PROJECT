<?php

namespace App\Http\Controllers;

use App\Models; // Assurez-vous d'importer le modèle Course si nécessaire

class CGHoraire extends Controller
{
public function index()
{
// Votre logique pour récupérer et traiter les données de la page horaire
return view('GestionHoraire');
}
}
