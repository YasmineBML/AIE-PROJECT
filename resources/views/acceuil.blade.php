@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
    <h2 style="color: #35512F;">Bienvenue sur votre espace d'administrateur</h2>

    <div class="conteneur">

        <div class="bloc">
            <img src="Images/specialite-removebg-preview.png" alt="Image 1">
            <h2>Spécialités</h2>
            <p>10</p>
        </div>
        <div class="bloc">
            <img src="Images/ens.png" alt="Image 2">
            <h2>Enseignants</h2>
            <p>23</p>
        </div>
        <div class="bloc">
            <img src="Images/salles-removebg-preview.png" alt="Image 3">
            <h2>Salles</h2>
            <p>29</p>
        </div>

        <div class="bloc">
            <img src="Images/etudiant-removebg-preview.png" alt="Image 4">
            <h2>Etudiants</h2>
            <p>987</p>
        </div>
    </div>
@endsection
@section('styles')
    <link rel="stylesheet" href="{{ asset('CSS/acceuil.css') }}">
@endsection
