<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<<<<<<< Updated upstream:resources/views/Modules/modifiermodule.blade.php
    <title>Modifier Specialite</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    {{-- link au css --}}
    <link rel="stylesheet" href="/Css/modifier.css">

=======
    <title>Ajouter specialite</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    
    {{-- link au css --}}
    <link rel="stylesheet" href="Css/addformation.css">
    
>>>>>>> Stashed changes:resources/views/specialites/addspecialite.blade.php
    {{-- link de bootstrap --}}
    <link rel="stylesheet" href="/bootstrap-5.0.2-dist/css/bootstrap.css">
    
    {{-- link de fontawesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<<<<<<< Updated upstream:resources/views/Modules/modifiermodule.blade.php


=======
    
    {{-- lien pour la selection multiple --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@2.0.1/dist/css/multi-select-tag.css">
    
    
>>>>>>> Stashed changes:resources/views/specialites/addspecialite.blade.php
</head>
<body>
    
    {{-- debut de la navbar  --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid" id="manav">
            
            {{-- debut de code de logo --}}
            <img src="/images/logos.png" class="img-fluid" alt="...">
            {{-- fin code de logo --}}
            
            {{-- debut button de responsivité --}}
            <button class="navbar-toggler" id="navbutton" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            {{-- fin de button de responsivité --}}
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav" id="listechoix">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Aceuille</a>
                    </li>                   
                    <li class="nav-item">
                        <a class="nav-link" href="#">Formation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Enseignant</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Emploie de temps</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Salles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Horaires</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa-solid fa-user" id="iconeuser"></i></a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>
    {{-- fin de la navbar --}}
    
    <section class="container" id="sec1">
<<<<<<< Updated upstream:resources/views/Modules/modifiermodule.blade.php

        <form action="/updatemodule/traitement" method="post">
=======
        
        <form action="/ajouter/traitement" method="POST">
>>>>>>> Stashed changes:resources/views/specialites/addspecialite.blade.php
            @csrf
            
            <div class="row">
                <div class="col-12 col-md-3">
                    <label for="">id:</label>
                </div>
                <div class="col-12 col-md-9">
<<<<<<< Updated upstream:resources/views/Modules/modifiermodule.blade.php
                    <input  type="text" name="id" value="{{$mo->id}}" readonly>
                </div>
            </div>
    
            <div class="row">
=======
                    <input type="text" name="nom">
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-3">
                    <label for="">Departement:</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" name="departement">
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-3">
                    <label for="">Niveau:</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" name="niveau">
                </div>
            </div>
            
            
            
            
            {{-- <div class="row">
                
>>>>>>> Stashed changes:resources/views/specialites/addspecialite.blade.php
                <div class="col-12 col-md-3">
                    <label for="">Libelle:</label>
                </div>
                <div class="col-12 col-md-9">
<<<<<<< Updated upstream:resources/views/Modules/modifiermodule.blade.php
                    <input type="text" name="libelle" value="{{$mo->libelle}}">
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-3">
                    <label for="">Semestre:</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" name="semestre" value="{{$mo->semestre}}">
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-3">
                    <label for="">Specialite:</label>
                </div>
                <div class="col-12 col-md-9">
                    {{-- <input type="text" name="niveau" value="{{$mo->specialite->nom}}"> --}}
                    <select name="specialite_id" id="">
                        {{-- <option value="{{$mo->specialite->id}}">{{ $mo->specialite->nom}}</option> --}}
                        @foreach ($sp as $s)
                            <option value="{{$s->id}}">{{$s->nom}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
                
=======
                    {{-- pour le choix multipl ajoute ces deux  name="countries" id="countries" dans select   
                    <select placeholder="Choisissez un pays">              
                        @foreach ($for as $f)               
                        <option value="{{ $f->id }}">{{ $f->nom }}</option>
                        @endforeach                  
                    </select>
                </div>          
            </div>  --}}
            
>>>>>>> Stashed changes:resources/views/specialites/addspecialite.blade.php
            <div class="row">
                <div class="col-12">
                    <p style="text-align: center"><button type="submit" class="btnajouter">Modifier</button></p>
                    <p style="text-align: center"><button type="" class="btnajouter"><a href="/Modules/module" style="text-decoration: none; color: white">voir liste</a></button></p>
                </div>
            </div>
        </form>
<<<<<<< Updated upstream:resources/views/Modules/modifiermodule.blade.php

=======
        
        
>>>>>>> Stashed changes:resources/views/specialites/addspecialite.blade.php
    </section>
    
    {{-- message pour afficher que en a bien insérer dans la base de donnés  --}}
    @if (session('status'))
    <div class="alert success">
        {{ session('status') }}
    </div>
    @endif
<<<<<<< Updated upstream:resources/views/Modules/modifiermodule.blade.php

 
=======
    
    
    
    
    {{-- script pour la selection multiple --}}
    <script src="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@2.0.1/dist/js/multi-select-tag.js"></script>
    <script>
        new MultiSelectTag('countries')  // id
    </script>
    
>>>>>>> Stashed changes:resources/views/specialites/addspecialite.blade.php
</body>
{{-- script pour js  --}}
<script src="/bootstrap-5.0.2-dist/js/bootstrap.js"></script>
</html>