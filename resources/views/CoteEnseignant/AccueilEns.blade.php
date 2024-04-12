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
             #animated-text {
                margin-top:50px;
                margin-left:20px;
                font-size: 24px;
                font-family: Arial, sans-serif;
                color: #FFFF;
                overflow: hidden;
                font-weight: bold; /* Met le texte en gras */
            }
            
            
            
            
            


      
    </style>
</head>
<body id="body">
    <header id="header">
        <nav class="navbar navbar-light ">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('ImagesCoteEnseignant/page-daccueil (2).png') }}" 
                         width="32" height="32" class="d-inline-block align-text-top">
                    <span class="custom-bold-text text-white">Accueil</span>
                </a>
            </div>
        </nav>
    </header>
    <div class="box">
        
         <div><img src="{{ asset('ImagesCoteEnseignant/fond_de_site-removebg-preview.png') }}" 
          width="300" height="200" class="d-inline-block align-text-top"></div>
          <div id="animated-text"></div>

    </div>   


    <div class="Bar">
        @include('CoteEnseignant.BarreDeMenuEns')
    </div>   
    
    <script>
    const text = "Bienvenue dans votre espace enseignant!\nPlanifiez vos examens en toute simplicité. Saisissez votre disponibilité, consultez l'emploi du temps des examens.\n\n\nPrêt à commencer ?";
    const delay = 100; // Délai en millisecondes entre l'affichage de chaque lettre

    let index = 0;
    const animatedText = document.getElementById('animated-text');

    function animateText() {
      if (index < text.length) {
        animatedText.innerHTML += text.charAt(index);
        index++;
        setTimeout(animateText, delay);
      }
    }

    animateText();
  </script>


















  
   
   
   
   
    
    
    

</body>
</html>





































































































































































