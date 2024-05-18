<?php

use App\Http\Controllers\EnseignantController;
use App\Http\Controllers\LocalController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\DisponibiliteController;

//use App\Models\Disponibilite;

//les route de fatima
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







//les route de yasmine

Route::get('/module', [\App\Http\Controllers\ModuleController::class, 'index'])->name('module');
Route::get('/GestionPlanning', [\App\Http\Controllers\CGPlanning::class, 'index'])->name('GestionPlanning');
Route::get('/GestionHoraire', [\App\Http\Controllers\CGHoraire::class, 'index'])->name('GestionHoraire');
// Traitement de module :
// route pour afficher les module :
Route::get('/Modules/module','App\Http\Controllers\ModuleController@listemodule') ->name('Modules.module');
// la route pour ajouter des module :
Route::post('/add/traitement','App\Http\Controllers\ModuleController@ajouter_module');
// pour la supression d'un module :
Route::get('/delete_module/{id}','App\Http\Controllers\ModuleController@supprimer_mod');
// la route pour afficher la vue de update :
Route::get('/update_module/{id}','App\Http\Controllers\ModuleController@update_mod');
// effectuer la modification des modules :
Route::post('/updatemodule/traitement','App\Http\Controllers\ModuleController@modifier_module');
// la route pour inserer un module :
Route::post('/add/traitement','App\Http\Controllers\ModuleController@ajouter_module');

// pour la supression d'un module :
Route::get('/delete_module/{id}','App\Http\Controllers\ModuleController@supprimer_mod');

// la route pour la recherche d'un module
Route::get('/search','App\Http\Controllers\ModuleController@search');






//les route de sabrina
Route::resource('enseignants',EnseignantController::class);
Route::resource('local',LocalController::class);
Route::resource('disponibilite',DisponibiliteController::class);








//les route de bachir
// la route pour retourner liste des specialite
Route::get('/specialites/specialite','App\Http\Controllers\SpecialiteController@listespecialite')->name('specialites.specialite');;

// la route pour redirection lors de lajoute de specialite
Route::post('/ajouter/traitement','App\Http\Controllers\SpecialiteController@ajouter_specialite');

// gerer la supression de specialite :
Route::get('/delete_formation/{id}','App\Http\Controllers\SpecialiteController@supprimer_specialite');

// affciher la vue de modification :
Route::get('/update_formation/{id}','App\Http\Controllers\SpecialiteController@update_specialite');
// la route pour effecuter la modification :
Route::post('/update/traitement','App\Http\Controllers\SpecialiteController@update_specialite_traitement');










//les route de thawanza
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
Route::get('/Disponnabilité-Ens', DisponibiliteController::class .'@index')->name('DisponnabilitéEns');


Route::get('/Create-Ens', function () {
    return view('CoteEnseignant.create ');
})->name('create');

Route::get('/Edit-Ens', function () {
    return view('CoteEnseignant.edit');
})->name('edit');



Route::post('/storer', DisponibiliteController::class .'@store')->name('str');
Route::delete('/destroy/{id}', DisponibiliteController::class .'@destroy')->name('dest');


Route::get('/disponibilite/{id}/edit', 'DisponibiliteController@edit')->name('edit');

// Route pour mettre à jour la disponibilité
Route::put('/disponibilite/{id}', 'DisponibiliteController@update')->name('upd');


//route importer enseignants 
 Route::get('import-excel', [EnseignantController::class, 'import_excel']);
 Route::post('import-excel', [EnseignantController::class, 'import_excel_post']);

 //route importer salles  
 Route::get('import_excel_local', [LocalController::class, 'import_excel_local']);
 Route::post('import_excel_local', [LocalController::class, 'import_excel_local_post']);