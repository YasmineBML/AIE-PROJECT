<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
          rel="stylesheet" 
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
          crossorigin="anonymous">
    <title>Laravel</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>
    <!-- Styles -->
    <style>
        .custom-navbar {
            background-color: #38512F; /* Utilisation de la couleur verte spécifique en hexadécimal */
            height: 130vh; 
            /* Hauteur de la barre de menu égale à 100% de la hauteur de la fenêtre */
            position: sticky; /* Barre de menu fixée pour rester visible lors du défilement */
            top: 0;
        }
        .custom-bold-text {
            font-weight: bold;
            font-size: 18px;
            
        
        }
        .main-content {
            padding-top: 20px; /* Ajoute un espace en haut pour ne pas être collé au bord supérieur */
        }
        .nav-link {
            margin-bottom: 40px;
            margin-top:10px ; /* Ajoute un espacement en bas de chaque élément de la liste */
        }
       
         .custom-bg-color {
              background-color: #C3E6CB; /* Changer la couleur de fond en vert clair */
              height: 70px;
            
      }
      .text{
        font-weight: bold;
       }
        

    </style>    
</head>
<body>
    <nav class="col-lg-2  sidebar custom-navbar">
        <div class="position-sticky">
            <ul class="nav flex-column">
                <li class="nav-item custom-bg-color">
                    <a class="nav-link active" href="#">
                        <img src="{{ asset('ImagesCoteEnseignant/Examen-Planifier.png') }}" 
                             width="32" height="32" class="d-inline-block align-text-top">
                        <span class="custom-bold-text text-white">ExamsPlanifier</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('AccueilEns') }}">
                        <img src="{{ asset('ImagesCoteEnseignant/page-daccueil (2).png') }}" width="24" height="24" class="d-inline-block align-text-top">
                        <span class="custom-bold-text text-white">Accueil</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('DisponnabilitéEns') }}">
                        <img src="{{ asset('ImagesCoteEnseignant/Disponiblité.png') }}" 
                             width="32" height="32" class="d-inline-block align-text-top">
                        <span class="custom-bold-text text-white">Disponibilité</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('ConsultationPlanningEns') }}">
                        <img src="{{ asset('ImagesCoteEnseignant/Planning.png') }}"
                              width="32" height="32" class="d-inline-block align-text-top">
                        <span class="text text-white">Emploi des examens</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('MonCompteEns') }}">
                        <img src="{{ asset('ImagesCoteEnseignant/utilisateur.png') }}" width="32" height="32" class="d-inline-block align-text-top">
                        <span class="custom-bold-text text-white">Mon compte</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <img src="{{ asset('ImagesCoteEnseignant/se-deconnecter.png') }}" width="32" height="32" class="d-inline-block align-text-top">
                        <span class="custom-bold-text text-white">Se deconnecter</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <main class="col-lg-10 main-content">
        <!-- Content Here -->
    </main>
</body>
</html>
