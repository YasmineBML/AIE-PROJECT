@extends('layouts.app')

@section('title', 'Enseignant')

@section('content')
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
        margin-bottom: 20px;

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
                        <a href="{{route('local.index')}}" >
                            <i class="fa-solid fa-xmark  fa-xl"></i>
                        </a>
                       </div>
                    <h3 class="text-dark">
                        Modification
                    </h3>
                </div>
                <div class="card-body">

                    <form method="POST" class="mt-3" action="{{ route('local.update',$local->libelle) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div id="ided">
                        <div class="form-group mb-4" id="spasnom">
                            <label class="form-label fw-bold" for="libelle" >libelle</label>
                            <input type="text" name="libelle" value="{{old("libelle",$local->libelle)}}" placeholder="libelle" class="form-control" id="bordpre">
                        </div>
                        <div class="form-group mb-4">
                            <label for="capacite" class="form-label fw-bold">capacite</label>
                            <input type="numbre" name="capacite" maxlength="3" value="{{old("capacite",$local->capacite)}}" placeholder="capacite" class="form-control" id="bordpre">
                        </div></div>
                        <div id="ided">
                        <div class="form-group mb-4" id="spasnom">
                            <label class="form-label fw-bold" for="type">Type</label>
                            <select name="type" class="form-control" id="bornum" required>
                            <option value=""  disabled>
                                Type
                            </option>
                            <option {{ $local->type === "Salle" ? "selected" : "" }} value="Salle">Salle</option>
                            <option {{$local->type === "Amphi" ? "selected" : "" }} value="Amphi">Amphi</option>


                        </select>
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


@endsection
@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/app.css')}}">
@endsection
