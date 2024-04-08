<?php

namespace App\Http\Controllers;

use App\Models\Enseignant;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;

class EnseignantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $enseignant = Enseignant::all();
        return view('enseignants.index')->with([
            'enseignant' =>$enseignant
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('enseignants.create');
    }

    /**
     * Store a newly created resource in storage.
     */

     use AuthorizesRequests, ValidatesRequests;
    public function store(Request $request)
    {
        //
        $this->validate ($request, [
            'nom' =>'required',
            'prenom' => 'required',
            'email' => 'required',
            'motdepasse' =>'required',
            'type' =>['required' ,'in:vacataire,permanent,doctorant'],
            'grade' => 'nullable',


        ]);
        $data = $request->except(['_token']);
        Enseignant::create($data);
        return redirect()->route("enseignants.index")->with([
            "success" => "Enseignant added successfully"
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $enseignant = Enseignant::where('email', $id)->first();
        return view("enseignants.show")->with([
            'enseignant' =>$enseignant
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $enseignant= Enseignant::where('email', $id)->first();
        return view("enseignants.edit")->with([
            "enseignant" =>  $enseignant
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $enseignant=  Enseignant::where('email', $id)->first();
        $this->validate($request, [
            'nom' =>'required',
            'prenom' => 'required',
            'email' => 'required',
            'motdepasse' =>'required',
            'type' =>['required' ,'in:vacataire,permanent,doctorant'],
            'grade' => 'nullable',

        ]);
        $data = $request->except(['_token', '_method']);
        $enseignant->update($data);
        return redirect()->route("enseignants.index")->with([
            "success" => "Enseignant updated successfully"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $enseignant= Enseignant::where('idenseignant', $id)->first();
        $enseignant->delete();
        return redirect()->route("enseignants.index")->with([
            "success" => "Enseignant deleted successfully"
        ]);
        //
    }
}
