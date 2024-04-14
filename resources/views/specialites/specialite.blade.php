<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Liste de Specialite</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    
    {{-- lien de fontawesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    {{-- link to bootstrap --}}
    <link rel="stylesheet" href="/bootstrap-5.0.2-dist/css/bootstrap.css">
    
    {{-- link de css --}}
<<<<<<< Updated upstream
    <link rel="stylesheet" href="/Css/specialite.css">
    
    {{-- lien pour css de modal --}}
    <link rel="stylesheet" href="/Css/modal.css">
=======
    <link rel="stylesheet" href="/Css/style.css">
    <link rel="stylesheet" href="/Css/Modal.css">
>>>>>>> Stashed changes
    
</head>
<body>
    
    {{-- debut de la navbar  --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid" id="manav">
            
            {{-- debut de code de logo --}}
            <img src="/images/logos.png" class="img-fluid" alt="...">
            {{-- fin code de logo --}}
            
            {{-- debut button de responsivité --}}
            <button class="navbar-toggler" id="navbutton" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            {{-- fin de button de responsivité --}}
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav" id="listechoix">
                    <li class="nav-item">
                        <a class="nav-link" href="">Aceuille</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Formation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Enseignant</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Emploie de temps</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Salles</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Horaires</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa-solid fa-user" id="iconeuser"></i></a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>
    {{-- fin de la navbar --}}
    
    {{-- debut de la premiere section --}}
    <section class="container" id="firstsection">
        <div class="row">
            <div class="col-12">
                <h4 class="welcometext">
                    Bienvenue dans l'espace formations, vous pouvez effectuer les opérations
                    d'ajout, modification et supression.
                </h4>
            </div>
        </div>
        
        <div class="row" id="deuxiemediv">
            <div class="col-12 col-md-6">
                <a href="/Modules/module"><button id="btnsersh">Voir Les modules</button></a>
            </div>
            <div class="col-12 col-md-6">
<<<<<<< Updated upstream
                <button id="btnajouter" style="float: right;background-color: #35512F;"><i class="fa-sharp fa-regular fa-plus"></i></button>
=======
                <button id="btnajoutm" style="float: right;background-color: #35512F;"><i class="fa-sharp fa-regular fa-plus"></i></button>
>>>>>>> Stashed changes
            </div>
        </div>
        <div class="row" >
            <div class="col-12" id="divtab">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">id</th>
<<<<<<< Updated upstream
                            <th scope="col">nom</th>
                            <th scope="col">Departement</th>
                            <th scope="col">niveau</th>
=======
                            <th scope="col">Nom</th>
                            <th scope="col">Departement</th>
                            <th scope="col">Niveau</th>
>>>>>>> Stashed changes
                            <th scope="col">Modules</th>                         
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($specia as $sp)
                        <tr>
                            <td style="width: 150px">{{ $sp->id }}</td>
<<<<<<< Updated upstream
                            <td style="width: 150px">{{ $sp->nom }}</td>
                            <td style="width: 150px">{{ $sp->departement }}</td>  
                            <td style="width: 150px">{{ $sp->niveau }}</td>
                            <td style="width: 150px">                                   
=======
                            <td style="width: 150px">{{ $sp->nom }}</td> 
                            <td style="width: 150px">{{ $sp->departement }}</td>
                            <td style="width: 150px">{{ $sp->niveau }}</td>
                            <td style="width: 250px">
>>>>>>> Stashed changes
                                <p>Premier Semestre :</p>
                                @foreach ($sp->modules as $m)                                   
                                @if ($m->semestre === '1')
                                <ul>
                                    <li>{{ $m->libelle }}</li>
                                </ul>
                                @endif
                                @endforeach
                                <p>Deuxieme Semestre :</p>
                                @foreach ($sp->modules as $m)                                   
                                @if ($m->semestre === '2')
                                <ul>
                                    <li>{{ $m->libelle }}</li>
                                </ul>
                                @endif
<<<<<<< Updated upstream
                                @endforeach 
                            </td>
                            
                            <td>
                                <a href="/update_formation/{{ $sp->id }}" class="btn btn-default"  style="background-color: rgb(22, 216, 64)">update</a>
=======
                                @endforeach
                            </td>
                            
                            <td>     
                                <a href="/update_formation/{{ $sp->id }}" id="btnupd" class="btn btn-default" style="background-color: blue" id="modifier">update</a>
>>>>>>> Stashed changes
                                <a href="/delete_formation/{{ $sp->id }}" class="btn btn-defalut" style="background-color: red">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                        
                    </tbody>
                </table>
            </div>
        </div>
        
    </section>
    
    {{-- fin de la premiere section --}}
    
<<<<<<< Updated upstream
    {{-- le modal pour ajouter une specialite --}}
=======
>>>>>>> Stashed changes
    <!-- Modal AJOUT MODULE -->
    <div class="modal" id="resource-modal">
        <!-- Header -->
        <div class="modal-header">
<<<<<<< Updated upstream
            <h3 class="modal-heading">Ajouter une nouvelle specialite</h3>
=======
            <h3 class="modal-heading">Ajouter une nouvelle Specialite</h3>
>>>>>>> Stashed changes
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
                        
<<<<<<< Updated upstream
                        
=======
>>>>>>> Stashed changes
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
    
    
<<<<<<< Updated upstream
    {{-- le script pour ouvrir et fermer le popup --}}
    <script>
        // Sélectionnez le bouton "Ajouter un module"
        const btnajout = document.getElementById('btnajouter');
=======
    
    
    <script>
        // Sélectionnez le bouton "Ajouter un module"
        const btnajout = document.getElementById('btnajoutm');
>>>>>>> Stashed changes
        
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
<<<<<<< Updated upstream
        // Sélection du select element
        const selectElement = document.getElementById('professors-select');
        
        // Sélection du span pour afficher les options sélectionnées
        const selectedProfessorsSpan = document.getElementById('selected-professors');
        
        // Écouter les changements dans la sélection
        selectElement.addEventListener('change', function() {
            // Créer un tableau pour stocker les options sélectionnées
            const selectedProfessors = [];
            
=======
        
        
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
>>>>>>> Stashed changes
        });
        
        // Sélectionnez le bouton "Annuler"
        const btnAnnuler = document.getElementById('annuler');
        
        // Ajoutez un gestionnaire d'événements pour détecter le clic sur le bouton "Annuler"
        btnAnnuler.addEventListener('click', function() {
            // Sélectionnez le formulaire
            const form = document.getElementById('resource-form');
            
            // Réinitialisez les champs du formulaire
            form.reset();
            
<<<<<<< Updated upstream
=======
            
            
>>>>>>> Stashed changes
            // Cacher le modal
        });
    </script>
    
    
<<<<<<< Updated upstream
=======
    
    
>>>>>>> Stashed changes
</body>

{{-- script pour js  --}}
<script src="/bootstrap-5.0.2-dist/js/bootstrap.js"></script>

</html>
