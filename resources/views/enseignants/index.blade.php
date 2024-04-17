@extends('layouts.app')

@section('title', 'Enseignant')

@section('content')

<<<<<<< Updated upstream
<<<<<<< Updated upstream
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Enseignants</title>
    <link rel="stylesheet" href="{{ asset('assets/app.css')}}">
    <style>
        #mk{
        padding: 50px;
        padding-bottom: 10px;


        }
        .ui{
            border-radius: 10px;

        }


    </style>

=======
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Enseignants</title>
<link rel="preconnect" href="https://fonts.bunny.net">

<link rel="stylesheet" href="https://cdn.datatables.net/v/bs4/dt-1.10.24/b-1.7.0/b-html5-1.7.0/b-print-1.7.0/r-2.2.7/datatables.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
<style>
    #mk{
        padding: 50px;
        padding-bottom: 10px;
=======
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Enseignants</title>
<link rel="preconnect" href="https://fonts.bunny.net">

<link rel="stylesheet" href="https://cdn.datatables.net/v/bs4/dt-1.10.24/b-1.7.0/b-html5-1.7.0/b-print-1.7.0/r-2.2.7/datatables.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
<style>
    #mk{
        padding: 50px;
        padding-bottom: 10px;
>>>>>>> Stashed changes
        
        
    }
    .ui{
        border-radius: 10px;
        
    }
    
    
</style>
</head>
<body>
>>>>>>> Stashed changes
    <div >
        <div>
            <h6 class="text-center" id="mk">  <strong>Bienvenue dans l'espace d'enseignants,
                vous pouvez effectuer les opérations d'ajouter, modification, suppression.</strong> 
            </h6>
        </div>
        
        <div class="row" >
<<<<<<< Updated upstream
<<<<<<< Updated upstream

            <div class="col-md-9 mx-auto" >
=======
=======
>>>>>>> Stashed changes
            
            <div class="col-md-8 mx-auto" >
>>>>>>> Stashed changes
                <div class="text-end"> <a href="{{ route('enseignants.create') }}" >
                    
                    <img src="{{ asset('assets/add.png') }}" alt="Description de l'image">
                    
                </a></div>
<<<<<<< Updated upstream
<<<<<<< Updated upstream



                <div class="card my-3" >
=======
=======
>>>>>>> Stashed changes
                
                
                
                <div class="card my-2" >
>>>>>>> Stashed changes
                    <div class="card-header">
                        <h3 class="text-center " >
                            Enseignants
                        </h3>
                    </div>
                    <div class="card-body" >
                        <table id="myTable" class="table table-bordered table-striped table-hover table-responsive-sm">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nom</th>
                                    <th>Prénom</th>
                                    <th>Type</th>
                                    <th>Grade</th>
                                    <th></th>
                                </tr>
                                
                            </thead>
                            <tbody>
                            @foreach ($enseignant as $key => $enseignant)
                            <tr>
                                <td>{{$key+=1}}</td>
                                <td>{{$enseignant->nom}}</td>
                                <td>{{$enseignant->prenom}}</td>
                                <td>
                                    @if ($enseignant->type == 'permanent')
                                    <span >Permanent</span>
                                    @elseif ($enseignant->type == 'vacataire')
                                    <span >Vacataire</span>
                                    @else
                                    <span >doctorant</span>
                                    @endif
                                </td>
                                <td>{{$enseignant->grade}}</td>
                                <td class="d-flex justify-content-center align-items-center">
                                    <a href="{{route('enseignants.show',$enseignant->email)}}"
                                        class="btn btn-sm btn-primary">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{route('enseignants.edit',$enseignant->email)}}"
                                        class="btn btn-sm btn-warning mx-2">
                                        <i class="fas fa-edit"></i>
                                    </a>

                                    <form id="{{$enseignant->email}}" action="{{route('enseignants.destroy',$enseignant->email)}}" method="post">
                                        @csrf
                                        @method("DELETE")
<<<<<<< Updated upstream
<<<<<<< Updated upstream

                                    <button onclick="deleteAd({{$enseignant->email}})"
=======
=======
>>>>>>> Stashed changes
                                        {{-- <button
                                            onclick="
                                            event.preventDefault();
                                            if(confirm('Voulez vous supprimer le menu {{ $enseignant->id }} ?'))
                                            document.getElementById({{ $enseignant->id }}).submit() "
                                            class="btn btn-danger">
                                            <i class="fas fa-trash"></i>
                                        </button>--}}
                                        <button type="submit" class="btn  btn-sm  btn-danger"><i class="fa fa-trash"></i></button>
                                    </form>
                                    {{--<button onclick="deleteAd({{$enseignants->numero}})"
>>>>>>> Stashed changes
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
<<<<<<< Updated upstream
<<<<<<< Updated upstream
    @section('script')
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'excel', 'csv', 'pdf', 'print'
                ]
            });
        });
    </script>
 @if(session()->has("success"))
 <script>
     Swal.fire({
         position: 'top-end',
         icon: 'success',
         title: "{{session()->get('success')}}",
         showConfirmButton: false,
         timer: 3500
     });
 </script>
@endif
<script>
 function deleteAd(id){
     const swalWithBootstrapButtons = Swal.mixin({
         customClass: {
             confirmButton: 'btn btn-success',
             cancelButton: 'btn btn-danger mr-2'
         },
         buttonsStyling: false
         })
=======
=======
>>>>>>> Stashed changes
    
</div>
@include('enseignants.script')
@yield('enseignants.script')


<script src="{!! URL::asset('https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js') !!}"></script>
<script src="{!! URL::asset('https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js') !!}"></script>
<script src="{!! URL::asset('https://cdn.datatables.net/v/bs4/dt-1.10.24/b-1.7.0/b-colvis-1.7.0/b-html5-1.7.0/b-print-1.7.0/r-2.2.7/datatables.min.js') !!}"></script>
<script src="{!! URL::asset('https://cdn.jsdelivr.net/npm/sweetalert2@11.0.12/dist/sweetalert2.all.min.js') !!}"></script>


<script>
    $(document).ready( function () {
        $('#myTable').DataTable({
            dom: 'Bfrtip',
            buttons: [
            'copy', 'excel', 'csv', 'pdf', 'print', 'colvis'
            ]
        });
    });
</script>
<<<<<<< Updated upstream
>>>>>>> Stashed changes
=======

>>>>>>> Stashed changes

         swalWithBootstrapButtons.fire({
             title: 'Are you sure?',
             text: "You won't be able to revert this!",
             icon: 'warning',
             showCancelButton: true,
             confirmButtonText: 'Yes, delete it!',
             cancelButtonText: 'No, cancel!',
             reverseButtons: true
         }).then((result) => {
         if (result.isConfirmed) {
             document.getElementById(id).submit();
         } else if (
             /* Read more about handling dismissals below */
             result.dismiss === Swal.DismissReason.cancel
         ) {
             swalWithBootstrapButtons.fire(
                 'Cancelled',
                 'Your ad is safe :)',
                 'error'
             )
         }
         })
 }
</script>

<<<<<<< Updated upstream
<<<<<<< Updated upstream
@stop
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
=======

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
>>>>>>> Stashed changes
=======
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
>>>>>>> Stashed changes

@endsection
@section('styles')
<link rel="stylesheet" href="{{ asset('assets/app.css')}}">
@endsection
