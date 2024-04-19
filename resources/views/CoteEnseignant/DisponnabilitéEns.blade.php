<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('assets/app.css')}}">
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link rel="stylesheet" href="https://cdn.datatables.net/v/bs4/dt-1.10.24/b-1.7.0/b-html5-1.7.0/b-print-1.7.0/r-2.2.7/datatables.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
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
                width: 600px;
                height: 700px;
                border: 2px solid green; /* Spécifie une bordure de 2 pixels de large, solide et rouge */
                position: absolute; /* Position absolue par rapport au corps */
                top: 80%; /* Place le haut de la boîte à 50% de la hauteur du corps */
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
                     <img src="{{ asset('ImagesCoteEnseignant/Disponiblité.png') }}"
                          width="32" height="32" class="d-inline-block align-text-top">
                       <span class="custom-bold-text text-white">Disponibilité</span>
                    </a>
               </div>
            </nav>
         </header>

         <div  class="box">
            <div>
             <h6 class="text-center" id="mk">  <strong class="text-white">
                Effectuer les opérations d'ajouter, modification, suppression sur vos disponnibilités .</strong> </h6>
            </div>

            <div class="row" >

                <div class="col-md-9 mx-auto" >

                    <div class="text-end"> <a href="{{ route('create') }}" >

                        <img src="{{ asset('assets/add.png') }}" alt="Description de l'image">

                    </a></div>



                    <div class="card my-3" >
                        <div class="card-header">
                            <h3 class="text-center " >
                                Disponnibilité
                            </h3>
                        </div>
                        <div class="card-body" >
                            <table id="myTable" class="table table-bordered table-striped table-hover table-responsive-sm">
                                <thead>
                                    <tr>

                                        <th>Id</th>
                                        <th>Jours</th>
                                        <th>Crenaux</th>
                                        <th>Actions</th>
                                    </tr>

                                </thead>

                                <tbody>
                                @foreach ($disponibilite as $key =>$disponibilite)
                                <tr>
                                    <td>{{$key+=1}}</td>

                                    <td>
                                        @if ($disponibilite->jour == 'Samedi')
                                      <span >Samedi</span>
                                   @elseif ($disponibilite->jour== 'Dimanche')
                                    <span >Dimanche</span>
                                    @elseif ($disponibilite->jour == 'Lundi')

                                    <span >Lundi</span>
                                    @elseif ($disponibilite->jour == 'Mardi')

                                    <span >Mardi</span>
                                    @elseif ($disponibilite->jour == 'Mercredi')

                                    <span >Mercredi</span>
                                    @elseif ($disponibilite->jour == 'Jeudi')

                                    <span >Jeudi</span>

                                    @endif
                                    </td>
                                    <td>
                                 <!-- @if ($disponibilite->crenaux == '8h-10h')
                                      <span >8h-10h</span>
                                   @elseif ($disponibilite->crenaux == '10h-12h')
                                    <span >10h-12h</span>
                                    @elseif ($disponibilite->crenaux == '12h-14h')

                                    <span >12h-14h</span>
                                    @elseif ($disponibilite->crenaux == '14h-16h')

                                    <span >14h-16h</span> 


                                    @endif-->
                                
                                  
                                    @php
                                         $crenaux = explode(',', $disponibilite->crenaux); // Séparer les créneaux par des virgules
                                 @endphp
                             @foreach ($crenaux as $crenaux)
                                <span>{{ $crenaux }}</span><br>
                            @endforeach
                          

                                    </td>

                                    <td class="d-flex justify-content-center align-items-center">
                                     
                                        <a href="{{ route('edit', $disponibilite->id) }}"
                                            class="btn btn-sm btn-warning mx-2">
                                            <i class="fas fa-edit"></i>
                                        </a>

                                        <form id="{{$disponibilite->id}}" action="{{route('dest',$disponibilite->id)}}" 
                                         method="post">
                                            @csrf
                                            @method("DELETE")

                                        <button onclick="deleteAd({{$disponibilite->id}})"
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
