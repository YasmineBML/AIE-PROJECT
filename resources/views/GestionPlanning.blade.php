@extends('layouts.app')

@section('title', 'emploidutemps')

@section('content')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Planning</title>



<div style="margin-bottom: 100px">
    <h2 id="texte1" style="text-align: center">Veuillez sélectionner les informations relatives à votre emploi du temps</h2>
</div>
<div class="container" id="container" style="margin-top: 50px" >
    <div style="margin-bottom: 80px">
        <img id="logo" src="{{ asset('images/fond_de_site-removebg-preview.png') }}" alt="Logo" >
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-6" >
            <h3>Session :</h3>
            <select id="session" name="session">
                <option value="1">Normale</option>
                <option value="2">Remplacement</option>
                <option value="3">Rattrapage</option>
            </select>
            <br>
            <h3>Spécialité/filière</h3>
            <select id="formation" name="formation">
                <option value="1">Formation 1</option>
                <option value="2">Formation 2</option>
                <!-- Ajoutez d'autres options selon vos besoins -->
            </select>
            <br>
            <h3>Niveau :</h3>
            <select id="niveau" name="niveau">
                <option value="debutant">Licence 1</option>
                <option value="intermediaire">Licence 2</option>
                <option value="avance">Licence 3</option>
                <option value="avance">Master 1</option>
                <option value="avance">Master 2</option>
                <!-- Ajoutez d'autres options selon vos besoins -->
            </select>
        </div>
        <div class="col-sm-12 col-md-6" >
            <h3>Modules associés:</h3>
            <div class="scrollable-list" style="background: whitesmoke">
                <ul id="modulesList">
                    <li>Module 1</li>
                    <li>Module 2</li>
                    <li>Module 3</li>
                    <li>Module 4</li>
                    <li>Module 5</li>
                    <li>Module 6</li>
                    <li>Module 4</li>
                    <li>Module 5</li>
                    <li>Module 6</li>
                    <li>Module 4</li>
                    <li>Module 5</li>
                    <li>Module 6</li>
                </ul>
            </div>
        </div>
    </div>
    <button id="nextPageButton" onclick="window.location.href='{{ route('GestionHoraire') }}'" style="margin-top: 30px">Page suivante</button>
</div>
@endsection
@section('styles')
    <link rel="stylesheet" href="/CSS/GestionPlanning.css">
@endsection
