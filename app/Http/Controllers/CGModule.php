<?php

namespace App\Http\Controllers;

use App\Models; // Assurez-vous d'importer le modèle Course si nécessaire

class CGModule extends Controller
{
    public function index()
    {
        return view(view: 'module');     

    }

     // la fonction pour insérer un module :
     public function ajouter_module(Request $request)
     {

         $request->validate([
             'name' => 'required',             'professor' => 'required',
             'specialite' => 'required',
         ]);
 
 
         $module = new Module(); 
         $module->name = $request->name;
         $module->professor = $request->professor;
         $module->specialite = $request->specialite;
         $module->save();
 
         return redirect('/module')->with('status','Ajouter avec succes');
     }
}
