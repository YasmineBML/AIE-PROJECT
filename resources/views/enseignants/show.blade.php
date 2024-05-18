@extends('layouts.app')

@section('title', 'enseignant')

@section('content')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Enseignants</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('assets/app.css')}}">


<style>
#ski{
    background-color:#35512f;

    border-radius: 25px;

}
#spaspro{
  margin-left: 50px;
}
#bien{

 max-width: 500px;
}
#bien:hover{
    background-color: #96f099;
        border-color: #96f099;
}
#hov a {
        color: #000000;
        text-decoration: none;
        border-radius: 10px;
    }


    #hov a:hover {
        color: red;
    }
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8" >
            <div class="card my-5" id="ski">

                <div class="card-header  text-center p-3">
                    <div class="text-end" id="hov">
                        <a href="{{route('enseignants.index')}}" >
                            <i class="fa-solid fa-xmark  fa-xl" ></i>
                        </a>
                       </div>
                    <h3 class="text-dark">
                        Profile : {{$enseignant->nom}}
                    </h3>
                </div>

                    <hr>
                    <div id="spaspro">
                    <div class="form-group mb-3">
                        <label for="nom" class="form-label fw-bold">Nom</label>
                        <div class="border border-success rounded-pill rounded p-2" id="bien">
                            {{$enseignant->nom}}
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="prenom" class="form-label fw-bold">Prénom</label>
                        <div class="border border-success rounded-pill rounded p-2" id="bien">
                            {{$enseignant->prenom}}
                        </div>
                    </div>

                    <div class="form-group mb-3">
                        <label for="email"  class="form-label fw-bold">Email</label>
                        <div class="border border-success rounded-pill  rounded p-2" id="bien">
                            {{$enseignant->email}}
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="mot_de_passe" class="form-label fw-bold">mot de passe</label>
                        <div class="border border-success rounded-pill  rounded p-2" id="bien">
                            {{$enseignant->mot_de_passe}}
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="type" class="form-label fw-bold">Type</label>
                        <div class="border border-success rounded-pill rounded p-2" id="bien">
                            {{$enseignant->type}}
                        </div>
                    </div>
                    <div class="form-group mb-3">
                        <label for="grade" class="form-label fw-bold">Grade</label>
                        <div class="border border-success rounded-pill rounded p-2" id="bien">
                            {{$enseignant->grade}}
                        </div>
                    </div>
                     <!--<div class="form-group mb-3">
                        <label for="date_de_naissence" class="form-label fw-bold">Date de naissance</label>
                        <div class="border border-success rounded-pill rounded p-2" id="bien">
                            {{$enseignant->date_de_naissence}}
                        </div>
                    </div>!-->
                </div>

                </div>
            </div>
        </div>
    </div>
</div>






@endsection
@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/app.css')}}">
@endsection
