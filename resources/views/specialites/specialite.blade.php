<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Liste de Specialite</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    {{-- lien de fontawesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- link to bootstrap --}}
    <link rel="stylesheet" href="/bootstrap-5.0.2-dist/css/bootstrap.css">

    {{-- link de css --}}
    <link rel="stylesheet" href="/Css/style.css">

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
                    <a class="nav-link" href="">Aceuille</a>
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

    {{-- debut de la premiere section --}}
    <section class="container" id="firstsection">
       <div class="row">
        <div class="col-12">
            <h4 class="welcometext">
                Bienvenue dans l'espace formations, vous pouvez effectuer les opérations
                d'ajout, modification et supression.
            </h4>
        </div>
       </div>

       <div class="row" id="deuxiemediv">
            <div class="col-12 col-md-6">
                <a href="/module"><button id="btnsersh">Rechercehr par nom</button></a>
            </div>
            <div class="col-12 col-md-6">
                <a href="/addspecialite"><button id="btnaddfor" style="float: right;background-color: #35512F;"><i class="fa-sharp fa-regular fa-plus"></i></button></a>
            </div>
        </div>
        <div class="row" >
            <div class="col-12" id="divtab">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">nom</th>
                        <th scope="col">niveau</th>
                        <th scope="col">Modules</th>                         
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($specia as $sp)
                            <tr>
                                <td style="width: 150px">{{ $sp->id }}</td>
                                <td style="width: 150px">{{ $sp->nomspecialite }}</td> 
                                <td style="width: 150px">{{ $sp->niveau }}</td>
                                <td style="width: 150px">
                                    @foreach ($sp->modules as $m)
                                        <p>{{ $m->libelle }}</p>
                                    @endforeach
                                </td>
                                                           
                                <td>
                                    <a href="/update_formation/{{ $sp->id }}" class="btn btn-default" style="background-color: red">update</a>
                                    <a href="/delete_formation/{{ $sp->id }}" class="btn btn-defalut" style="background-color: red">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                                                                                    
                    </tbody>
                </table>
            </div>
        </div>

    </section>

    {{-- fin de la premiere section --}}

    





</body>

{{-- script pour js  --}}
<script src="/bootstrap-5.0.2-dist/js/bootstrap.js"></script>

</html>
