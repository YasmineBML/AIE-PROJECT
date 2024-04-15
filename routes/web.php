<?php

use App\Http\Controllers\EnseignantController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AdminLoginController;


Route::get('/', function () {
    return view('interface1/interface01');
})->name('interface1');


Route::get('admin/login', [AdminLoginController::class, 'showLoginForm'])->name('admin.login');


Route::post('admin/login', [AdminLoginController::class, 'login']);
Route::post('admin/logout', [AdminLoginController::class, 'logout'])->name('admin.logout');



Route::get('teacher_login', function () {
    return view('auth/teacher_login');
})->name('teacher_login');


Route::get('/acceuil', function () {
    return view('acceuil');
})->name('acceuil');


//Route::get('/', function () {
   // return view('welcome');
//});


Route::get('/module', [\App\Http\Controllers\ModuleController::class, 'index'])->name('module');

//Route::get('/GestionPlanning', [\App\Http\Controllers\CGPlanning::class, 'index'])->name('GestionPlanning');
//Route::get('/GestionHoraire', [\App\Http\Controllers\CGHoraire::class, 'index'])->name('GestionHoraire');

// Traitement de module :
// route pour afficher les module :
Route::get('/Modules/module','App\Http\Controllers\ModuleController@listemodule');
// la route pour ajouter des module :
Route::post('/add/traitement','App\Http\Controllers\ModuleController@ajouter_module');
// pour la supression d'un module :
Route::get('/delete_module/{id}','App\Http\Controllers\ModuleController@supprimer_mod');
// la route pour afficher la vue de update :
Route::get('/update_module/{id}','App\Http\Controllers\ModuleController@update_mod');
// effectuer la modification des modules :
Route::post('/updatemodule/traitement','App\Http\Controllers\ModuleController@modifier_module');



Route::resource('enseignants',EnseignantController::class);

// la route pour retourner liste des specialite
Route::get('/specialites/specialite','App\Http\Controllers\SpecialiteController@listespecialite');

// la route pour redirection lors de lajoute de specialite
Route::post('/ajouter/traitement','App\Http\Controllers\SpecialiteController@ajouter_specialite');

// gerer la supression de specialite :
Route::get('/delete_formation/{id}','App\Http\Controllers\SpecialiteController@supprimer_specialite');

// affciher la vue de modification :
Route::get('/update_formation/{id}','App\Http\Controllers\SpecialiteController@update_specialite');
// la route pour effecuter la modification :
Route::post('/update/traitement','App\Http\Controllers\SpecialiteController@update_specialite_traitement');

//RouteCoteEnseignants
Route::get('/consultation-planning', function () {
    return view('CoteEnseignant.ConsultationPlanningEns');
})->name('ConsultationPlanningEns'); // Définir le nom de la route ici

Route::get('/Accueil-Ens', function () {
    return view('CoteEnseignant.AccueilEns');
})->name('AccueilEns');

Route::get('/MonCompte-Ens', function () {
    return view('CoteEnseignant.MonCompteEns');
})->name('MonCompteEns'); // Définir le nom de la route ici
Route::get('/Disponnabilité-Ens', function () {
    return view('CoteEnseignant.DisponnabilitéEns ');
})->name('DisponnabilitéEns'); // Définir le nom de la route ici


// la route pour inserer un module :
Route::post('/add/traitement','App\Http\Controllers\ModuleController@ajouter_module');

// pour la supression d'un module :
Route::get('/delete_module/{id}','App\Http\Controllers\ModuleController@supprimer_mod');

