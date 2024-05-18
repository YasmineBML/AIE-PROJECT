<?php

namespace App\Http\Controllers;

use App\Models\Enseignant;

use App\Imports\UserImport;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Excel;


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
            //'date_de_naissence'=> 'required',
            'email' => 'required',
            'mot_de_passe' =>'required',
            'grade' => 'nullable',
            'type' =>['required' ,'in:vacataire,permanent,doctorant'],



        ]);
        $data = $request->except(['_token']);
        Enseignant::create($data);
        return redirect()->route("enseignants.index")->with([
            "success" => "Ajouter avec succes"
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
            //'date_de_naissence'=> 'required',
            'email' => 'required',
            'mot_de_passe' =>'required',
            'grade' => 'nullable',
            'type' =>['required' ,'in:vacataire,permanent,doctorant'],

        ]);
        $data = $request->except(['_token', '_method']);
        $enseignant->update($data);
        return redirect()->route("enseignants.index")->with([
            "success" => "Modification avec succes"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $enseignant= Enseignant::where('email', $id)->first();
        $enseignant->delete();
        return redirect()->route("enseignants.index")->with([
            "success" => "Suppresion avec succes"
        ]);
        //
    }
    public function import_excel()
    {
        //
        return view('enseignants.index');
    }
    public function import_excel_post(Request $request)
       {
           Excel::import(new UserImport,$request->file('excel-file'));
           return redirect()->route("enseignants.index")->with([
            "success" => "Importation avec succes"
        ]);
           
       }
    
}
