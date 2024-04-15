<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Enseignants</title>
    <link rel="stylesheet" href="{{ asset('assets/app.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        #edii{
            background-color:#35512f;
            border-radius: 25px;
        }
        #ided{
            display: flex;

        }
        #spasnom{
            margin-right: 80px;
        }
        #buttmod{
            margin-left: 200px;
            width: 160px;
            border-radius: 10px;

        }
        #buttmod:hover {
        background-color: #35dc3b;
        border-color: #35dc3b;
    }


    #buttmod:active {
        background-color: #35dc49;
        border-color:#35dc49 ;
    }
        #bordno{
            border-radius: 20px;
        }

    #bordpre{
        border-radius: 20px;
    }

    #bornum{
        border-radius: 20px;
        width: 210px;
    }

    #borem{
        border-radius: 20px;
        max-width: 340px;

    }
    #om{
        margin-left: 100px;
    }
    #borspe{
        border-radius: 20px;

    }
    #borspee{
        border-radius: 20px;

    }
    #mkl{
        margin-left: 80px;
        width: 210px;
    }
    #borgr{
        border-radius: 20px;
    }
    #hov a {
        color: #000000; /* Couleur par défaut */
        text-decoration: none; /* Supprimer le soulignement */
    }

    /* Style pour le lien au survol */
    #hov a:hover {
        color: red; /* Couleur au survol */
    }
    #hov a:active {
        color: red; /* Couleur au clic */
    }


        </style>

</head>
<body>


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="row my-5">
                    <div class="col-md-6 mx-auto">
                        @include('alert')
                    </div>
                </div>
                <div class="card my-5" id="edii">

                    <div class="card-header  text-center p-3">
                        <div class="text-end" id="hov">
                            <a href="{{route('enseignants.index')}}" >
                                <i class="fa-solid fa-xmark  fa-xl"></i>
                            </a>
                           </div>
                        <h3 class="text-dark">
                            Modification
                        </h3>
                    </div>
                    <div class="card-body">

                        <form method="POST" class="mt-3" action="{{ route('enseignants.update',$enseignant->email) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div id="ided">
                            <div class="form-group mb-4" id="spasnom">
                                <label class="form-label fw-bold" for="nom" >Nom</label>
                                <input type="text" name="nom" value="{{old("nom",$enseignant->nom)}}"  placeholder="nom" class="form-control"id="bordno">
                            </div>
                            <div class="form-group mb-4">
                                <label for="prenom" class="form-label fw-bold">Prénom</label>
                                <input type="text" name="prenom" value="{{old("prenom",$enseignant->prenom)}}" placeholder="prenom" class="form-control" id="bordpre">
                            </div></div>
                            <div id="ided">
                            <div class="form-group mb-4" id="spasnom">
                                <label class="form-label fw-bold" for="type">Type</label>
                               {{--<input type="text" class="form-control" value="{{old("type",$enseignant->type)}}"  name="type" placeholder="type" id="bornum">
                               --}}  <select name="type" class="form-control" id="bornum" required>
                                <option value=""  disabled>
                                    Type
                                </option>
                                <option {{ $enseignant->type === "permanent" ? "selected" : "" }} value="permanent">permanent</option>
                                <option {{$enseignant->type === "vacataire" ? "selected" : "" }} value="vacataire">vacataire</option>
                                <option {{$enseignant->type === "doctorant" ? "selected" : "" }} value="doctorant">doctorant</option>
                                {{--<option value="permanent">permanent</option>
                                <option value="vacataire">vacataire </option>
                                <option value="doctorant">doctorant </option>--}}
                            </select>
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label fw-bold" for="grade">Grade</label>
                                <input type="text" class="form-control" value="{{old("grade",$enseignant->grade)}}"  placeholder="grade" name="grade" id="borgr">
                            </div> </div>
                            <div id="ided">

                            <div class="form-group mb-3" >
                                <label class="form-label fw-bold" for="mot_de_passe">mot_de_passe</label>
                                <input type="text" class="form-control" value="{{old("mot_de_passe",$enseignant->mot_de_passe)}}"  placeholder="mot_de_passe" name="mot_de_passe" id="borspe">
                            </div>
                            <div class="form-group mb-3" id="mkl">
                                <label class="form-label fw-bold" for="date_de_naissence">date_de_naissence</label>
                                <input type="date" class="form-control" value="{{old("date_de_naissence",$enseignant->date_de_naissence)}}"  placeholder="date_de_naissence" name="date_de_naissence" id="borspee">
                            </div>
                        </div>
                        <div class="form-group mb-3" id="om">
                            <label class="form-label fw-bold" for="email">Email</label>
                            <input type="email" class="form-control" value="{{old("email",$enseignant->email)}}"  placeholder="email" name="email" id="borem">
                        </div>


                           </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8">
                                    <button type="submit" class="btn btn-dark" id="buttmod">
                                        {{ __('  Modification') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



</body>
</html>
