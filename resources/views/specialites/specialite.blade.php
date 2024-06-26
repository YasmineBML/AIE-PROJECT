@extends('layouts.app')

@section('title', 'Specialite')

@section('content')
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Inclure jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>



{{-- lien pour la selection multiple --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@2.0.1/dist/css/multi-select-tag.css">


{{--  le lien de css de sabrina --}}
<link rel="stylesheet" href="{{ asset('assets/app.css')}}">

<div class="row my-5">
    <div class="col-md-6 mx-auto">
        @include('alert')
    </div>
</div>

<div class="col-md-10 mx-auto">
    <div>
        <h6 class="text-center" id="mk">  <strong>Bienvenue dans l'espace Modules,
            vous pouvez effectuer les opérations d'ajouter, modification, suppression.</strong>
        </h6>
    </div>


    <div style="text-align: right;">
        {{-- <button class="btn btn-success" id="btnajoutm" style="background-image: url({{ asset('assets/add.png') }})"></button> --}}
        <img src="{{ asset('assets/add.png') }}" alt="Description de l'image" id="btnajoutm">
    </div>
</div>



{{-- la div de sabrina--}}
<div class="card my-2 col-md-10 mx-auto">
    <div class="card-header">
        <h3 class="text-center " >
            Spécialites
        </h3>
    </div>
    <div class="card-body" >
        <table id="myTable" class="table table-bordered table-striped table-hover table-responsive-sm">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nom</th>
                    <th>Departement</th>
                    <th>Niveau</th>
                    <th>Actions</th>
                </tr>

            </thead>
            <tbody>
                @foreach ($specia as $s)
                <tr>
                    <td>{{ $s->id }}</td>
                    <td>{{ $s->nom }}</td>
                    <td>{{ $s->departement }}</td>
                    <td>{{ $s->niveau }}</td>
                    <td>
                        <a href="/update_formation/{{ $s->id }}" class="btn btn-sm btn-warning mx-2"><i class="fas fa-edit"></i></a>
                        <a href="/delete_formation/{{ $s->id }}" class="btn  btn-sm  btn-danger"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>
</div>



<!-- Modal AJOUT MODULE -->
<div class="modall" id="resource-modal">

    <!-- Header -->
    <div class="modal-header">
        <h3 class="modal-heading">Ajouter une nouvelle spécialite</h3>
        <button class="close"> <span>x</span></button>


    </div>
    <hr class="modal-divider">

    <!-- Content -->
    <div class="modal-content">
        <form action="/ajouter/traitement" method="post">
            @csrf
            <div class="row">

                <div class="col-lg-10 col-md-10 col-sm-10 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
                    <div class="form-group">
                        <label style="margin-right: 90px">Nom : </label>
                        <input type="text" name="nom" >
                    </div>
                    <div class="form-group">
                        <label style="margin-right: 90px">Departement : </label>
                        <input type="text" name="departement">
                    </div>
                    <div class="form-group">
                        <label style="margin-right: 90px">Niveau : </label>
                        <input type="text" name="niveau">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="form-group">
                    <div class="row">
                        <hr class="modal-divider">
                        <div class="col-lg-5 col-md-5 col-sm-5 col-offset-1 col-md-offset-1">
                            <button type="button" class="btn btn-danger btn-block" data-dismiss="modal" id="annuler">Annuler</button>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-5">
                            <button type="submit" class="submit-btn btn btn-primary btn-block" id="ajouter">Ajouter</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <!-- Footer -->

</div>


<script>
    // Sélectionnez le bouton "Ajouter un module"
    const btnajout = document.getElementById('btnajoutm');

    // Sélectionnez le modal à afficher
    const resourceModal = document.getElementById('resource-modal');

    // Sélectionnez l'élément de fermeture du modal
    const closeBtn = document.querySelector('.close');

    // Ajoutez un écouteur d'événement pour détecter le clic sur le bouton
    btnajout.addEventListener('click', function() {
        // Afficher le modal
        resourceModal.style.display = 'block';
    });

    // Ajoutez un écouteur d'événement pour détecter le clic sur le bouton de fermeture
    closeBtn.addEventListener('click', function() {
        // Cacher le modal
        resourceModal.style.display = 'none';
    });
    // Sélection du select element
    const selectElement = document.getElementById('professors-select');

    // Sélection du span pour afficher les options sélectionnées
    const selectedProfessorsSpan = document.getElementById('selected-professors');

    // Écouter les changements dans la sélection
    selectElement.addEventListener('change', function() {
        // Créer un tableau pour stocker les options sélectionnées
        const selectedProfessors = [];

        // Boucler à travers toutes les options et vérifier celles qui sont sélectionnées
        for (const option of selectElement.selectedOptions) {
            selectedProfessors.push(option.textContent);
        }

        // Mettre à jour le contenu du span avec les options sélectionnées
        selectedProfessorsSpan.textContent = selectedProfessors.join(', ');
    });

    // Au moment d'ajouter un module, vous pouvez envoyer une requête AJAX pour l'ajouter à la base de données.
    document.getElementById('ajouter').addEventListener('click', function() {
        const nomModule = document.querySelector('input[name="name"]').value;
        const professeursSelect = document.getElementById('professors-select');
        const professeursSelectionnes = Array.from(professeursSelect.selectedOptions).map(option => option.textContent);

        // Envoyer une requête AJAX pour ajouter le module à la base de données
        $.ajax({
            type: 'POST',
            url: 'ajouter_module.php', // Endpoint pour l'ajout du module
            data: {
                nom: nomModule,
                professeurs: professeursSelectionnes
            },
            success: function(response) {
                // Gérer la réponse
                console.log(response);
            },
            error: function(xhr, status, error) {
                // Gérer les erreurs
                console.error(error);
            }
        });
    });

    // Sélectionnez le bouton "Annuler"
    const btnAnnuler = document.getElementById('annuler');

    // Ajoutez un gestionnaire d'événements pour détecter le clic sur le bouton "Annuler"
    btnAnnuler.addEventListener('click', function() {
        // Sélectionnez le formulaire
        const form = document.getElementById('resource-form');

        // Réinitialisez les champs du formulaire
        form.reset();

        // Réinitialisez les sélections
        const selectElements = document.querySelectorAll('.select2');
        selectElements.forEach(function(selectElement) {
            selectElement.value = ''; // Réinitialisez la sélection à la valeur vide
        });

        // Réinitialisez l'affichage des options sélectionnées
        const selectedProfessorsSpans = document.querySelectorAll('#selected-professors');
        selectedProfessorsSpans.forEach(function(selectedProfessorsSpan) {
            selectedProfessorsSpan.textContent = ''; // Effacez le contenu du span
        });

        // Cacher le modal
    });
</script>


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
{{-- script pour la selection multiple --}}
<script src="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@2.0.1/dist/js/multi-select-tag.js"></script>
<script>
    new MultiSelectTag('countries')  // id
</script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
@endsection


@section('styles')
<link rel="stylesheet" href="/CSS/Module.css">
@endsection
