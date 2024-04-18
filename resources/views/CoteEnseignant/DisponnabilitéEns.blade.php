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
    height: 500px;
    margin-top: 60px;
}


        </style>


    </head>

    <body id="body">
         <header id="header">
            <nav class="navbar navbar-light ">
               <div class="container-fluid">
                   <a class="navbar-brand" href="#">
                     <img src="{{ asset('ImagesCoteEnseignant/Disponiblité.png') }}"
                          width="32" height="32" class="d-inline-block align-text-top">
                       <span class="custom-bold-text text-white">Disponibilité</span>
                    </a>
               </div>
            </nav>
         </header>

         <div  class="box">
            <div>
             <h6 class="text-center" id="mk">  <strong>Bienvenue dans l'espace d'enseignants,
            vous pouvez effectuer les opérations d'ajouter, modification, suppression.</strong> </h6>
            </div>

            <div class="row" >

                <div class="col-md-9 mx-auto" >

                    <div class="text-end"> <a href="{{ route('create') }}" >

                        <img src="{{ asset('assets/add.png') }}" alt="Description de l'image">

                    </a></div>



                    <div class="card my-3" >
                        <div class="card-header">
                            <h3 class="text-center " >
                                Enseignants
                            </h3>
                        </div>
                        <div class="card-body" >
                            <table id="myTable" class="table table-bordered table-striped table-hover table-responsive-sm">
                                <thead>
                                    <tr>

                                        <th>Id</th>
                                        <th>Jours</th>
                                        <th>Crenaux</th>
                                        <th></th>
                                    </tr>

                                </thead>

                                <tbody>
                                @foreach ($disponibilite as $key =>$disponibilite)
                                <tr>
                                    <td>{{$key+=1}}</td>

                                    <td>
                                        @if ($disponibilite->jour == 'Samedi')
                                      <span >Samedi</span>
                                   @elseif ($disponibilite->type == 'Dimanche')
                                    <span >Dimanche</span>
                                    @elseif ($disponibilite->type == 'Lundi')

                                    <span >Lundi</span>
                                    @elseif ($disponibilite->type == 'Mardi')

                                    <span >Mardi</span>
                                    @elseif ($disponibilite->type == 'Mercredi')

                                    <span >Mercredi</span>
                                    @elseif ($disponibilite->type == 'Jeudi')

                                    <span >Jeudi</span>

                                @endif
                                    </td>

                                    <td class="d-flex justify-content-center align-items-center">

                                        <a href="{{route('enseignants.edit',$enseignant->email)}}"
                                            class="btn btn-sm btn-warning mx-2">
                                            <i class="fas fa-edit"></i>
                                        </a>

                                        <form id="{{$enseignant->email}}" action="{{route('enseignants.destroy',$enseignant->email)}}" method="post">
                                            @csrf
                                            @method("DELETE")

                                        <button onclick="deleteAd({{$enseignant->email}})"
                                            type="submit" class="btn btn-sm btn-danger">
                                            <i class="fa fa-trash"></i>
                                        </button> </form>


                                    </td>
                                </tr>
                            @endforeach
                        </tbody>

                            </table>
                        </div>
                    </div>
                </div>

            </div>

        </div>
         <div class="Bar">
           @include('CoteEnseignant.BarreDeMenuEns')
         </div>

    </body>
</html>
