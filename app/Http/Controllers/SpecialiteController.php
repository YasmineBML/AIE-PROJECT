<?php

namespace App\Http\Controllers ;

use Illuminate\Http\Request ;
use App\Models\Specialite ;
use App\Models\Module;
use App\Models\EnseignantsModules;

class SpecialiteController extends Controller 
{
    // la focntion pour afficher la liste de sspecialite :
    public function listespecialite()
    {
        // recuperer la liste des module :
        $modules = Module::all();
        $specia = Specialite::all();
        return view('specialites.specialite',compact('specia','modules'));
    }
    
    
    // la fonction pour ajouter une specialite :
    public function ajouter_specialite(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'departement' => 'required',
            'niveau' => 'required',
        ]);
        
        // pour inserer :
        $specialite = new Specialite();
        $specialite->nom = $request->nom;
        $specialite->departement = $request->departement;
        $specialite->niveau = $request->niveau;
        $specialite->save();
        return redirect('/specialites/specialite')->with('status','Ajouter avec succes');
    }
    
    // traiter la supression :           
    public function supprimer_specialite($id)
    {
        // recuperer les id des module de cette formation :
        $module_ids = Module::where('specialite_id',$id)->pluck('id');
        // supprimer dans la table Enseignant_Module:
        EnseignantsModules::whereIn('module_id',$module_ids)->delete();
        // supprimer les module lie a cette formation:
        Module::where('specialite_id',$id)->delete();
        // supprimer la specialite de la table specialite:
        $specialite = Specialite::find($id);     
        $specialite->delete();
        return redirect('/specialites/specialite')->with('status','Suppresion avec succes');
    }
        
    // traiter la modification :
    // la fonction pour modifier la formation :
    public function update_specialite($id)
    {
        $spec = Specialite::find($id);    
        return view('specialites.modifier',compact('spec'));
    }
                
    // traiter la modification :
                    
    public function update_specialite_traitement(Request $request)
    {
                        
        $request->validate([
            'nom' => 'required',
            'departement' => 'required',
            'niveau' => 'required',
        ]);
                        
        $speci = Specialite::find($request->id);                        
        $speci->nom = $request->nom;
        $speci->departement = $request->departement; 
        $speci->niveau = $request->niveau; 
        $speci->update();
                        
        return redirect('/specialites/specialite')->with('status','Modification avec succes');
    }
                    
}