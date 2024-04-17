@extends('layouts.app')

@section('title', 'Enseignant')

@section('content')
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


    #numbor{
        margin-right: 80px;
        max-width: 260px;
        border-radius: 20px;
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
                    <a href="{{route('local.index')}}" >
                        <i class="fa-solid fa-xmark  fa-xl" ></i>
                    </a>
                   </div>
                <form method="POST" class="mt-3" action="{{ route('local.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-5" id="in3">
                        <select name="type" class="form-control" id="numbor" required>
                             <option value="" selected disabled>
                                 Type
                             </option>
                             <option value="Salle">Salle</option>
                             <option value="Amphi">Amphi </option>
                         </select>

                 </div>
                    <div class="input-group mb-5" id="in">
                        <input type="text" name="libelle"   value="{{old("libelle")}}"  placeholder="le nom de l'amphi ou la salle" class="form-control" id="to">

                    </div>
                    <div class="form-group mb-5" >
                    <input type="numbre" name="capacite" maxlength="3" value="{{old("capacite")}}" placeholder="capacite" class="form-control" id="to2">
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
