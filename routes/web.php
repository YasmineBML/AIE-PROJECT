<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/module', [\App\Http\Controllers\CGModule::class, 'index'])->name('module');
