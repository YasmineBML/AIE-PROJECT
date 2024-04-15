@extends('layouts.app')

@section('title', 'enseignant')

@section('content')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Enseignants</title>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>

        #ski{
            background-color:#35512f;
            border-radius: 25px;


        }
        #in{
            display: flex;


        }
        #in3{
            display: flex;

        }
        #in4{
            display: flex;
            margin-bottom: 30px;

        }
        #to{
            margin-right: 80px;
            max-width: 250px;
          border-radius: 20px;
        }
        #to2{
            margin-right: 80px;
            max-width: 250px;
            border-radius: 20px;

        }
        #mk{
        padding: 50px;
        margin-bottom: -12%;

        }

        #numbor{
            margin-right: 80px;
            max-width: 260px;
            border-radius: 20px;
        }
        #sp{
            margin-right: 80px;
            max-width: 250px;
            border-radius: 20px;
        }
        #jp{
            margin-right: 80px;
            max-width: 210px;
            border-radius: 20px;
        }

    #me{
        border-radius: 20px;
        max-width: 210px;

    }
    #mee{
        border-radius: 20px;
        max-width: 340px;
        margin-left: 100px;

    }


    #aj{
        margin-left: 180px;
        width: 200px;
        border-radius: 20px;


    }
    #aj:hover {
        background-color: #35dc3b;
        border-color: #35dc3b;
    }


    #aj:active {
        background-color:#35dc3b ;
        border-color:#35dc3b;
    }

    #hov a {
        color: #000000;
        text-decoration: none;
        border-radius: 10px;
    }


    #hov a:hover {
        color: red;
    }
    #hov a:active {
        color: red;
    }

</style>



<div class="container">

    <div>
        <h6 class="text-center" id="mk">  <strong>Vous pouvez maintenant ajouter un enseignant en insérant ses coordonnées.</strong> </h6>
       </div>
    <div class="row justify-content-center">

        <div class="col-md-8">

            <div class="row my-5">
                <div class="col-md-6 mx-auto">
                    @include('alert')

                </div>
            </div>


            <div  id="ski">

                <div class="card-body">

                    <div class="text-end" id="hov">
                        <a href="{{route('enseignants.index')}}" >
                            <i class="fa-solid fa-xmark  fa-xl" ></i>
                        </a>
                       </div>
                    <form method="POST" class="mt-3" action="{{ route('enseignants.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="input-group mb-5" id="in">
                            <input type="text" name="nom"   value="{{old("nom")}}"  placeholder="Nom" class="form-control" id="to">

                            <input type="text" name="prenom" value="{{old("prenom")}}" placeholder="Prénom" class="form-control" id="to2">
                        </div>




                        <div class="form-group mb-5" id="in3">
                            <input type="text" class="form-control" value="{{old("grade")}}"  placeholder="grade" name="grade" id="sp">

                               <select name="type" class="form-control" id="numbor" required>
                                    <option value="" selected disabled>
                                        Type
                                    </option>
                                    <option value="permanent">permanent</option>
                                    <option value="vacataire">vacataire </option>
                                    <option value="doctorant">doctorant </option>
                                </select>

                        </div>
                        <div class="form-group mb-5" id="in4">
                            <input type="text" class="form-control" value="{{old("mot_de_passe")}}"  placeholder="mot de passe" name="mot_de_passe" id="jp">
                           <input type="date" class="form-control" value="{{old("date_de_naissence")}}"  placeholder="date de naissence" name="date_de_naissence" id="me">
                          </div>
                          <div class="form-group mb-5" >
                           <input type="email" class="form-control" value="{{old("email")}}"  placeholder="exemple@gmail.com" name="email" id="mee">
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
        </div>
    </div>
</div>

@endsection
@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/app.css')}}">
@endsection



