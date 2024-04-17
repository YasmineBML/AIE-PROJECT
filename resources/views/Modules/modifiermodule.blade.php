<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Modifier Specialite</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    
    {{-- link au css --}}
    <link rel="stylesheet" href="/Css/modifier.css">
    
    <title>Ajouter specialite</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    
    {{-- link au css --}}
    <link rel="stylesheet" href="Css/addformation.css">
    
    
    {{-- link de bootstrap --}}
    <link rel="stylesheet" href="/bootstrap-5.0.2-dist/css/bootstrap.css">
    
    {{-- link de fontawesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    
    
    {{-- lien pour la selection multiple --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@2.0.1/dist/css/multi-select-tag.css">
    
    
    
</head>
<body>
    
    
    
    <section class="container" id="sec1">
        
        
        <form action="/updatemodule/traitement" method="post">         
            @csrf
            
            <div class="row">
                <div class="col-12 col-md-3">
                    <label for="">id:</label>
                </div>
                <div class="col-12 col-md-9">
                    
                    <input  type="text" name="id" value="{{$mo->id}}" readonly>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-3">
                    <label for="">Libelle:</label>
                </div>
                <div class="col-12 col-md-9">
                    
                    <input  type="text" name="libelle" value="{{$mo->libelle}}">
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-3">
                    <label for="">Semestre:</label>
                </div>
                <div class="col-12 col-md-9">
                    
                    <input  type="text" name="semestre" value="{{$mo->semestre}}">
                </div>
            </div>          
            
            <div class="row">
                <div class="col-12 col-md-3">
                    <label for="">Specialite:</label>
                </div>
                <div class="col-12 col-md-9">
                    {{-- <input type="text" name="niveau" value="{{$mo->specialite->nom}}"> --}}
                    <select name="specialite_id" id="">
                        {{-- <option value="{{$mo->specialite->id}}">{{ $mo->specialite->nom}}</option> --}}
                        @foreach ($sp as $s)
                        <option value="{{$s->id}}">{{$s->nom}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            
            
            {{-- pour le choix multipl des enseignants :   --}}
            
            {{-- <select placeholder="Choisissez un pays">              
                @foreach ($for as $f)               
                <option value="{{ $f->id }}">{{ $f->nom }}</option>
                @endforeach                  
            </select> --}}
            
                
            <div class="row">
                <div class="col-12">
                    <p style="text-align: center"><button type="submit" class="btnajouter">Modifier</button></p>
                    <p style="text-align: center"><button type="" class="btnajouter"><a href="/Modules/module" style="text-decoration: none; color: white">voir liste</a></button></p>
                </div>
            </div>

        </form>
    </section>
    
    {{-- message pour afficher que en a bien insérer dans la base de donnés  --}}
    @if (session('status'))
    <div class="alert success">
        {{ session('status') }}
    </div>
    @endif
    
    
    
    
    
    {{-- script pour la selection multiple --}}
    <script src="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@2.0.1/dist/js/multi-select-tag.js"></script>
    <script>
        new MultiSelectTag('countries')  // id
    </script>
    
    
</body>
{{-- script pour js  --}}
<script src="/bootstrap-5.0.2-dist/js/bootstrap.js"></script>
</html>