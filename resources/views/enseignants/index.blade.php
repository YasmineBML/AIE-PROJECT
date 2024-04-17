@extends('layouts.app')

@section('title', 'Enseignant')

@section('content')

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

    <div >
        <div>
         <h6 class="text-center" id="mk">  <strong>Bienvenue dans l'espace d'enseignants,
        vous pouvez effectuer les opérations d'ajouter, modification, suppression.</strong> </h6>
        </div>

        <div class="row" >

            <div class="col-md-9 mx-auto" >
                <div class="text-end"> <a href="{{ route('enseignants.create') }}" >

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

@stop
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

    @endsection
    @section('styles')
        <link rel="stylesheet" href="{{ asset('assets/app.css')}}">
@endsection
