<?php

namespace App\Http\Controllers ;

use Illuminate\Http\Request ;
use App\Models\Specialite ;
use App\Models\Module ;

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

    // la focntion pour afficher la vue ajouter une specilaite :
    public function addspecialite()
    {
        return view('specialites.addspecialite');

    }

    // la fonction pour ajouter une specialite :
    public function ajouter_specialite(Request $request)
    {
        $request->validate([
            'nomspecialite' => 'required',
            'niveau' => 'required',
        ]);

        // pour inserer :
        $specialite = new Specialite(); 
        $specialite->nomspecialite = $request->nomspecialite;
        $specialite->niveau = $request->niveau;
        $specialite->save();
        return redirect('addspecialite')->with('status','Ajouter avec succes');
    }

    // traiter la supression : 
    public function supprimer_specialite($id)
    {
        $specialite = Specialite::find($id);
        $specialite->delete();
        return redirect('/specialites/specilaite')->with('status','Suppresion avec succes');
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
            'nomspecialite' => 'required',
            'niveau' => 'required',
        ]);

        $speci = Specialite::find($request->id);
       
        $speci->nomspecialite = $request->nomspecialite;
        $speci->niveau = $request->niveau;     
        $speci->update();

        return redirect('/specialites/specilaite')->with('status','Modification avec succes');
    }

}