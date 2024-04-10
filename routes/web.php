<?php

use App\Http\Controllers\EnseignantController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/module', [\App\Http\Controllers\CGModule::class, 'index'])->name('module');

Route::get('/GestionPlanning', [\App\Http\Controllers\CGPlanning::class, 'index'])->name('GestionPlanning');
Route::get('/GestionHoraire', [\App\Http\Controllers\CGHoraire::class, 'index'])->name('GestionHoraire');

Route::resource('enseignants',EnseignantController::class);


// la route pour retourner liste des specialite
Route::get('/specialites/specilaite','App\Http\Controllers\SpecialiteController@listespecialite');

// la route pour ajouter une formation
Route::get('/addspecialite','App\Http\Controllers\SpecialiteController@addspecialite');

// la route pour redirection lors de lajoute de formation
Route::post('/ajouter/traitement','App\Http\Controllers\SpecialiteController@ajouter_specialite');

// gerer la supression de specialite :
Route::get('/delete_formation/{id}','App\Http\Controllers\SpecialiteController@supprimer_specialite');

// affciher la vue de modification :
Route::get('/update_formation/{id}','App\Http\Controllers\SpecialiteController@update_specialite');
// la route pour effecuter la modification :
Route::post('/update/traitement','App\Http\Controllers\SpecialiteController@update_specialite_traitement');


  //RouteCoteEnseignants
Route::get('/consultation-planning', function () {
    return view('ConsultationPlanningEns');
})->name('ConsultationPlanningEns'); // Définir le nom de la route ici

Route::get('/Accueil-Ens', function () {
    return view('AccueilEns');
})->name('AccueilEns');

Route::get('/MonCompte-Ens', function () {
    return view('MonCompteEns');
})->name('MonCompteEns'); // Définir le nom de la route ici
Route::get('/Disponnabilité-Ens', function () {
    return view('DisponnabilitéEns ');
})->name('DisponnabilitéEns'); // Définir le nom de la route ici



