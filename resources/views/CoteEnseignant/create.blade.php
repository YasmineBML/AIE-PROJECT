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
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
           .custom-navbar {
             background-color: #38512F !important; /* Utilisation de la couleur verte spécifique en hexadécimal */
              }
            .custom-bold-text {
                font-weight: bold;

             }
             #header {
               background-color: #38512F;
               width: calc(100% - 14.08rem);
               float: right;

                height: 70px;}


               #body {
                  background-color: #FEF5E7; /* Changer la couleur de fond de l'interface en #FEF5E7 */
                }
                .box {
                width: 500px;
                height: 700px;
                border: 2px solid green; /* Spécifie une bordure de 2 pixels de large, solide et rouge */
                position: absolute; /* Position absolue par rapport au corps */
                top: 70%; /* Place le haut de la boîte à 50% de la hauteur du corps */
                left: 60%; /* Place la gauche de la boîte à 50% de la largeur du corps */
                text-align: center;
                transform: translate(-50%, -50%); /* Centre la boîte horizontalement et verticalement */
                background-color: #38512F;
                border-radius: 15px;

                }
.box{
    width: 600px;
    height: 600px;
    margin-top: 0px;
}

        </style>


    </head>
    <div class="box" id="ski">

        <div class="card-body">

            <div class="text-end" id="hov">
                <a href="{{route('DisponnabilitéEns')}}" >
                    <i class="fa-solid fa-xmark  fa-xl" ></i>
                </a>
               </div>
            <form method="POST" class="mt-3" action="{{ route('str') }}" enctype="multipart/form-data">
                @csrf


                <div class="form-group mb-5" id="in3">

                       <select name="jour" class="form-control" id="numbor" required>
                            <option value="" selected disabled>
                                jour
                            </option>
                            <option value="Samedi">Samedi</option>
                            <option value="Dimanche">Dimanche</option>
                            <option value="Lundi">Lundi </option>
                            <option value="Mardi">Mardi </option>
                            <option value="Mercredi">Mercredi </option>
                            <option value="Jeudi">Jeudi </option>
                        </select>

                </div>
                <div class="form-group mb-5" id="in3">

                    <select name="Crenaux" class="form-control" id="numbor" required>
                         <option value="" selected disabled>
                             Crenaux
                         </option>
                         <option value="8h-10h">8h-10h</option>
                         <option value="10h-12h">10h-12h</option>
                         <option value="12h-14h">12h-14h </option>
                         <option value="14h-16h">14h-16h </option>

                     </select>

             </div>


                <div class="form-group row mb-0">
                    <div class="col-md-8">
                        <button type="submit" class="btn btn-dark" id="aj">
                            {{ __('Ajouter') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="Bar">
        @include('CoteEnseignant.BarreDeMenuEns')
      </div>

 </body>
</html>


























































































