@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modules</title>
    <!-- Inclure jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>



    {{-- lien pour la selection multiple --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@2.0.1/dist/css/multi-select-tag.css">



    <div class="row">
        <div>
            <input type="text" id="searchInput" placeholder="Rechercher un module...">
        </div>
        <div style="text-align: right;">
            <button class="btn btn-success" id="btnajoutm">Ajouter un module</button>
        </div>
    </div>
    <div class="container" style="margin-top: 10px">
        <table class="table table-bordered">
            <thead>
                <tr class="table-head">
                    <th>Code du module/ID</th>
                    <th>Libellé</th>
                    <th>Spécialite</th>
                    <th>Semestre</th>
                    <th>Charge</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mod as $m)
                <tr>
                    <td>{{ $m->id }}</td>
                    <td>{{ $m->libelle }}</td>
                    <td>{{ $m->specialite->nom }}</td>
                    <td>{{ $m->semestre }}</td>
                    <td>
                        @foreach ($m->enseignants as $e)
                            <ul>
                                <ol>{{$e->nom}}</ol>
                            </ul>
                        @endforeach
                    </td>
                    <td>
                        <a href="/update_module/{{ $m->id }}" class="btn btn-default" style="background-color: red">update</a>
                        <a href="/delete_module/{{ $m->id }}" class="btn btn-defalut" style="background-color: red">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Modal AJOUT MODULE -->
    <div class="modal" id="resource-modal">
        <!-- Header -->
        <div class="modal-header">
            <h3 class="modal-heading">Ajouter un nouveau module</h3>
            <button class="close"> <span>x</span></button>
        </div>
        <hr class="modal-divider">

        <!-- Content -->
        <div class="modal-content">
            <form action="/add/traitement" method="post">
                @csrf
                <div class="row">
                    <div class="col-lg-10 col-md-10 col-sm-10 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
                        <div class="form-group">
                            <label style="margin-right: 90px">Libelle : </label>
                            <input type="text" name="libelle" >
                        </div>
                        <div class="form-group">
                            <label style="margin-right: 90px">Semestre : </label>
                            <input type="text" name="semestre">
                        </div>
                        <div class="form-group">
                            <label >La Spécialite</label>
                            <div class="select2-wrapper" style="margin-top: 10px">
                                <select name="specialite_id" id="" style="width: 100%">
                                    @foreach ($spec as $s)
                                        <option value="{{$s->id}}">{{$s->nom}} {{$s->niveau}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label >Les Charges</label>
                            <div class="select2-wrapper" style="margin-top: 10px">
                                <select name="enseignant_id[]" id="countries" multiple>
                                    @foreach ($ens as $e)
                                        <option value="{{$e->id}}">{{$e->nom}} {{$e->prenom}}</option>
                                    @endforeach
                                </select>
                            </div>
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

    {{-- script pour la selection multiple --}}
    <script src="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@2.0.1/dist/js/multi-select-tag.js"></script>
    <script>
        new MultiSelectTag('countries')  // id
    </script>

@endsection
@section('styles')
    <link rel="stylesheet" href="/CSS/Module.css">
@endsection
