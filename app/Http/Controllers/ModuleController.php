<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Module;
use App\Models\Specialite;
use App\Models\Enseignant;
use App\Models\EnseignantsModules;


class ModuleController extends Controller
{
    public function listemodule()
    {
        $spec = Specialite::all();
        $mod = Module::all();
        $ens = Enseignant::all();
        return view('Modules.module',compact('mod','spec','ens'));
    }

    // la focntion pour ajouter un module:
    public function ajouter_module(Request $request)
    {
        $request->validate([
            'libelle' => 'required',
            'semestre'=> 'required',
            'specialite_id' => 'required',
        ]);
        // recuperer les donne :

        // pour inserer :
        $module = new Module();
        $module->libelle = $request->libelle;
        $module->semestre = $request->semestre;
        $module->specialite_id = $request->specialite_id;
        $module->save();

        $enseignant_id = $request->input('enseignant_id');
        $module_id = $module->id;

        foreach ($enseignant_id as $enseignant_id) {
            
            $emm = new EnseignantsModules();
            $emm->enseignant_id = $enseignant_id;
            $emm->module_id = $module_id;
            $emm->save();
        }

        return redirect('Modules/module')->with('status','Ajouter avec succes');

    }
    // la fonction pour la supression d'un module :
    public function supprimer_mod($id)
    {   
        // pour commencer dans la supression dans la table association puis le module :
        EnseignantsModules::whereIn('module_id', [$id])->delete();
        $mod = Module::find($id);       
        $mod->delete();
        return redirect('Modules/module');
    }

    // traiter la modification d'un module :

    // la fonction pour afficher la vue de la modification :
    public function update_mod($id)
    {
        $sp = Specialite::all();
        $mo = Module::find($id);
        return view('Modules.modifiermodule',compact('mo','sp'));
    }

    // traitement de modification
    public function modifier_module(Request $request)
    {
        $request->validate([
            'libelle' => 'required',
            'semestre' => 'required',           
            'specialite_id' => 'required',
        ]);

        $mod = Module::find($request->id);
       
        $mod->libelle = $request->libelle;
        $mod->semestre = $request->semestre;     
        $mod->specialite_id = $request->specialite_id;
        $mod->update();

        return redirect('/Modules/module')->with('status','Modification avec succes');
    }


    // la fonction pour la recherche :
    public function search(Request $request)
    {
        $search = $request->search ;

        $mod = Module::where(function($query) use ($search){
            $query->where('libelle','like',"%$search%");
        })
        ->get();

        return view('Modules.module',compact('mod','search'));
    }
}
