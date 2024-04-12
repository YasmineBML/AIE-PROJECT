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
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" 
          rel="stylesheet"/>

    <!-- Styles -->
    <style>
        #header {
            background-color: #38512F; /* Changer la couleur de fond en vert */
            width: calc(100% - 14.08rem); /* Calculer la largeur en soustrayant 
            la largeur de la barre de menu */
            float: right;
            height: 70px;
            
        }
        #body {
            background-color: #FEF5E7; /* Changer la couleur de fond de l'interface en #FEF5E7 */
        }
        .page-container {
            min-height: 100vh; /* Hauteur minimum de la page pour occuper toute la fenêtre */
            display: flex;
            justify-content: center; /* Alignement horizontal au centre */
            align-items: center; /* Alignement vertical au centre */
        }
        .box {
             width: 600px;
             height: 500px;
             border: 2px solid green; /* Spécifie une bordure de 2
                                       pixels de large, solide et rouge */
             position: absolute; /* Position absolue par rapport au corps */
             top: 55%; /* Place le haut de la boîte à 50% de la hauteur du corps */
             left: 60%; /* Place la gauche de la boîte à 50% de la largeur du corps */
             text-align: center;
             transform: translate(-50%, -50%); /* Centre la boîte horizontalement et verticalement */
             background-color: #38512F; 
             border-radius: 15px;
               
             }
           
           
           
           
           
           
           
           
           


      
    </style>
</head>
<body id="body">
    <header id="header">
        <nav class="navbar navbar-light ">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('ImagesCoteEnseignant/Planning.png') }}" 
                         width="32" height="32" class="d-inline-block align-text-top">
                    <span class="custom-bold-text text-white">Emploi des examens</span>
                </a>
            </div>
        </nav>
    </header>
    <div class="box">
         <strong class="custom-bold-text text-white text-center">
                        Voici Votre Emploie des examens</strong>
         
    </div>   


    <div class="Bar">
        @include('CoteEnseignant.BarreDeMenuEns')
    </div>   
    
    



  
   
   
   
   
    
    
    

</body>
</html>




































































