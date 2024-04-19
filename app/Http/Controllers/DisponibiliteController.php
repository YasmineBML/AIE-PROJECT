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
   
   
    public function show(string $id)
    {
        //
    }


        
     public function edit($id)
     {
         $disponibilite = Disponibilite::findOrFail($id);
         $crenaux = ["8h-10h", "10h-12h", "12h-14h", "14h-16h"]; // ou bien récupérer ces valeurs à partir de la base de données
         return view('CoteEnseignant.edit', compact('disponibilite', 'crenaux'));
     }
     
    
    

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'jour' => ['required', 'in:Samedi,Dimanche,Lundi,Mardi,Mercredi,Jeudi'],
        'crenaux' => ['required', 'array'],
        'crenaux.*' => ['in:8h-10h,10h-12h,12h-14h,14h-16h'],
    ]);

    $disponibilite = Disponibilite::findOrFail($id);
    $data = $request->except(['_token']);
    $data['crenaux'] = implode(',', $request->crenaux);
    $disponibilite->update($data);

    return redirect()->route('DisponnabilitéEns')->with([
        "success" => " updated successfully"
    ]);
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
