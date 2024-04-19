<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use App\Models\Disponibilite;

class DisponibiliteController extends Controller

{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $disponibilite = Disponibilite::all();
        return view('CoteEnseignant.DisponnabilitéEns')->with([
            'disponibilite' =>$disponibilite
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('CoteEnseignant.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    use AuthorizesRequests, ValidatesRequests;
    /*public function store(Request $request)
    {
        //
        $this->validate($request, [
            'jour' =>['required' ,'in:Samedi,Dimanche,Lundi,Mardi,Mercredi,Jeudi'],
            
            'crenaux' =>['required','in:8h-10h,10h-12h,12h-14h,14h-16h'],

        ]);
        $data = $request->except(['_token']);
        Disponibilite::create($data);
        return redirect()->route('DisponnabilitéEns')->with([
            "success" => " added successfully"
        ]);
    } */
    public function store(Request $request)
{
    $this->validate($request, [
        'jour' => ['required', 'in:Samedi,Dimanche,Lundi,Mardi,Mercredi,Jeudi'],
        'crenaux' => ['required', 'array'], // Mettre 'crenaux' comme un tableau
        'crenaux.*' => ['in:8h-10h,10h-12h,12h-14h,14h-16h'], // Chaque élément de 'crenaux' doit être dans cette liste
    ]);

    $data = $request->except(['_token']);
    $data['crenaux'] = implode(',', $request->crenaux); // Convertir le tableau en chaîne de caractères

    Disponibilite::create($data);

    return redirect()->route('DisponnabilitéEns')->with([
        "success" => " added successfully"
    ]);
}



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
       
       
       
       
       
    }
   
   
   

    /**
     * Update the specified resource in storage.
     */
     
     public function update(Request $request, $id)
{
    // Valider les données
    $validatedData = $request->validate([
        'jour' => ['required', 'in:Samedi,Dimanche,Lundi,Mardi,Mercredi,Jeudi'],
        'crenaux' => ['required', 'array'],
        'crenaux.*' => ['in:8h-10h,10h-12h,12h-14h,14h-16h'],
    ]);

    // Trouver la disponibilité à mettre à jour
    $disponibilite = Disponibilite::findOrFail($id);

    // Mettre à jour les champs
    $disponibilite->jour = $validatedData['jour'];
    $disponibilite->crenaux = implode(',', $validatedData['crenaux']); // Convertir le tableau en chaîne

    // Sauvegarder les modifications
    $disponibilite->save();

    // Redirection avec un message de succès
    return redirect()->route('DisponnabilitéEns')->with('success', 'Disponibilité mise à jour avec succès.');
}

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $enseignants=  Disponibilite::where('id', $id)->first();
        $enseignants->delete();
        return redirect()->route('DisponnabilitéEns')->with([
            "success" => "Employe deleted successfully"
        ]);
    }
}
