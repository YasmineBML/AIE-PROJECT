<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
          crossorigin="anonymous">

    <title>compte</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>

    <!-- Styles -->
    <style>




        #header {
            background-color: #38512F; /* Changer la couleur de fond en vert */
            width: calc(100% - 14.08rem); /* Calculer la largeur en soustrayant
            la largeur de la barre de menu  */
            float: right;
            height: 70px;}


            .box {
                width: 600px;
                height: 730px;
                border: 2px solid green; /* Spécifie une bordure de 2 pixels de large, solide et rouge */
                position: absolute; /* Position absolue par rapport au corps */
                top: 93%; /* Place le haut de la boîte à 50% de la hauteur du corps */
                left: 60%; /* Place la gauche de la boîte à 50% de la largeur du corps */
                text-align: center;
                transform: translate(-50%, -50%); /* Centre la boîte horizontalement et verticalement */
                background-color: #38512F;
                border-radius: 15px;

              }








        #body {
            background-color: #FEF5E7; /* Changer la couleur de fond de l'interface en #FEF5E7 */
        }

        .liste {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            width: 400px;
            margin-left:100px;
            margin-top:0px;
            background:#FEF5E7;
            text-align: left;
            margin-bottom:0px;
         }
       .element-liste {
       border-bottom: 1px solid #ccc; /* Ligne divisive entre les éléments */
       padding: 8px;
       margin: 0; /* Réinitialiser les marges */
       height:70px; }
       .box img {
        margin-top: 0px;
         margin-bottom: 0px; /* Définit la marge supérieure de l'image à zéro */


   }
   h6{
    margin-left:40px;
   }

   /* Style pour le dernier élément */
   .element-liste:last-child {
       border-bottom: none; /* Supprime la ligne divisive du dernier élément */
   }
    </style>
</head>
<body id="body">
    <header id="header">
        <nav class="navbar navbar-light ">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('ImagesCoteEnseignant/utilisateur.png') }}"
                         width="32" height="32" class="d-inline-block align-text-top">
                    <span class="custom-bold-text text-white">Mon compte</span>
                </a>
            </div>
        </nav>
    </header>
    <div class="box">
      <!-- <strong class="custom-bold-text text-white text-center ">Mes informations </strong> -->
      <div>
        <img src="{{ asset('ImagesCoteEnseignant/specialite-removebg-preview.png') }}"
               width="170" height="150" class="d-inline-block align-text-top  ">
     </div>

      <div class="liste">
        <div class="element-liste">
            <strong><img src="{{ asset('ImagesCoteEnseignant/utilisateur (2).png') }}"
                         width="32" height="32" class="d-inline-block align-text-top">
                         Nom :</strong> <h6>Boulanouar</h6>
        </div>
        <div class="element-liste">
            <strong> <img src="{{ asset('ImagesCoteEnseignant/utilisateur (2).png') }}"
                          width="32" height="32" class="d-inline-block align-text-top">
                          Prénom :</strong> <h6>Thawanza</h6>

        </div>
        <div class="element-liste">
               <strong> <img src="{{ asset('ImagesCoteEnseignant/calendrier (1).png') }}"
                            width="32" height="32" class="d-inline-block align-text-top">
                            Date de Naissance :</strong><h6> 19/06/2002</h6>
        </div>
        <div class="element-liste">
            <strong><img src="{{ asset('ImagesCoteEnseignant/e-mail.png') }}"
                         width="32" height="32" class="d-inline-block align-text-top">
                         Adresse email :</strong> <h6>thawanza.boulanouar@example.com</h6>
        </div>


        <div class="element-liste">
            <strong> <img src="{{ asset('ImagesCoteEnseignant/icons8-diploma-50.png') }}"
                          width="32" height="32" class="d-inline-block align-text-top">
                          Grade :</strong><h6> Classe A</h6>
        </div>


        <div class="element-liste">
            <strong><img src="{{ asset('ImagesCoteEnseignant/icons8-type-50.png') }}"
                        width="32" height="32" class="d-inline-block align-text-top">
                        Type :</strong> <h6>Permanent</h6>
        </div>
    </div>

    </div>
    <div class="Bar">
           @include('CoteEnseignant.BarreDeMenuEns')
    </div>

</body>
</html>























