<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/module', [\App\Http\Controllers\CGModule::class, 'index'])->name('module');


Route::get('/GestionPlanning', [\App\Http\Controllers\CGPlanning::class, 'index'])->name('GestionPlanning');
Route::get('/GestionHoraire', [\App\Http\Controllers\CGHoraire::class, 'index'])->name('GestionHoraire');
