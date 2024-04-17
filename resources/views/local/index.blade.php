@extends('layouts.app')

@section('title', 'Local')

@section('content')

<div class="row">
    <div class="col-md-10 mx-auto">
        <div class="row my-5">
            <div class="col-md-6 mx-auto">
                @include('alert')
            </div>
        </div>
        <div class="text-end"> <a href="{{ route('local.create') }}" >

            <img src="{{ asset('assets/add.png') }}" alt="Description de l'image">

        </a></div>

        <div class="card my-3">
            <div class="card-header">
                <h3 class="text-center ">
                Locals
                </h3>
            </div>
            <div class="card-body">
                <table id="myTable" class="table table-bordered table-striped table-hover table-responsive-sm">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>libelle</th>
                            <th>capacite</th>
                            <th>type</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($local as $key => $local)
                            <tr>
                                <td>{{$key+=1}}</td>
                                <td>{{$local->libelle}}</td>
                                <td>{{$local->capacite}}</td>
                                <td>
                                    @if ($local->type == 'Salle')
                                  <span >Salle</span>
                               @else ($local->type == 'Amphi')
                                <span >Amphi</span>

                            @endif
                                </td>
                                <td class="d-flex justify-content-center align-items-center">
                                    <a href="{{route('local.edit',$local->libelle)}}"
                                        class="btn btn-sm btn-warning mx-2">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form id="{{$local->libelle}}" action="{{route("local.destroy",$local->libelle)}}" method="post">
                                        @csrf
                                        @method("DELETE")
                                    </form>
                                    <button onclick="deleteAd({{$local->libelle}})"
                                        type="submit" class="btn btn-sm btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </button>{{--
                                    <form id="{{$local->libelle}}" action="{{route('local.destroy',$local->libelle)}}" method="post">
                                        @csrf
                                        @method("DELETE")
                                       <button type="submit" class="btn  btn-sm  btn-danger"><i class="fa fa-trash"></i></button>
                                    </form>--}}


                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
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

