<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modules</title>
    <!-- Inclure jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>

        .container {
            width: 50%;
            border: 1px solid #ccc;
            border-radius: 10px;
            padding: 20px;
            margin: 0 auto;
            position: relative;
            background: #35512F;
            color: white;
        }

        table {
            width: 100%;
        }

        th, tr, td {
            text-align: center;
        }

        #searchInput, #btnajoutm {
            border-radius: 10px;
            height: 40px;
        }

        #btnajoutm {
            cursor: pointer;
        }

        .row > div {
            display: inline-block;
            float: none;
        }
        #ajouter,#annuler{
            font-weight: 500;
            font-size: 1em;
            display: block;
            margin: 10px auto;
            border: none;
            border-radius: 20px;
            padding: 15px 30px;
            cursor: pointer;
            color:  white; /* Couleur du texte */
            background: #35512F;
        }
        .modal {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 1000;
            background-color: #fff;
            padding: 10px;
            border-radius: 10px;
            color: black;
            width: 450px;
            height: 450px;
        }

        .modal-content {
            padding: 20px;
            border-radius: 10px;
        }

        .close {
            color: black;
            font-size: 20px;
            cursor: pointer;
            background: none;
            border: none;
        }

        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 40px;
        }
        label{
            margin-right: 10px;
        }
        label,input,select,option{
            margin-bottom: 10px;
        }

        .modal-header .modal-heading {
            margin-top: 10px;
            font-size: 20px;
        }

        .modal-footer .form-group {
            text-align: center;
            margin: 20px;
        }
        .modal-divider {
            border: none;
            height: 2px; /* Augmentez la hauteur pour la rendre plus visible */
            background-color: #ccc;
            margin: 10px 0;
        }

    </style>

</head>
<body>

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
            <th style="width: 30%">Code du module/ID</th>
            <th style="width: 30%">Libellé</th>
            <th style="width: 30%">Chargé de module</th>
            <th style="width: 10%">Actions</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>001</td>
            <td>Course A</td>
            <td>
                <ul>
                    <li>Professor X</li>
                    <li>Professor Y</li>
                </ul>
            </td>
            <td>
                <button class="btn btn-primary btn-sm resource-update-btn"><i class="fa fa-pencil"></i></button>
                <button class="btn btn-danger btn-sm resource-delete-btn"><i class="fa fa-trash-o"></i></button>
            </td>
        </tr>
        <tr>
            <td>001</td>
            <td>Course A</td>
            <td>
                <ul>
                    <li>Professor X</li>
                    <li>Professor Y</li>
                </ul>
            </td>
            <td>
                <button class="btn btn-primary btn-sm resource-update-btn"><i class="fa fa-pencil"></i></button>
                <button class="btn btn-danger btn-sm resource-delete-btn"><i class="fa fa-trash-o"></i></button>
            </td>
        </tr>
        <tr>
            <td>001</td>
            <td>Course A</td>
            <td>
                <ul>
                    <li>Professor X</li>
                    <li>Professor Y</li>
                </ul>
            </td>
            <td>
                <button class="btn btn-primary btn-sm resource-update-btn"><i class="fa fa-pencil"></i></button>
                <button class="btn btn-danger btn-sm resource-delete-btn"><i class="fa fa-trash-o"></i></button>
            </td>
        </tr><tr>
            <td>001</td>
            <td>Course A</td>
            <td>
                <ul>
                    <li>Professor X</li>
                    <li>Professor Y</li>
                </ul>
            </td>
            <td>
                <button class="btn btn-primary btn-sm resource-update-btn"><i class="fa fa-pencil"></i></button>
                <button class="btn btn-danger btn-sm resource-delete-btn"><i class="fa fa-trash-o"></i></button>
            </td>
        </tr>
        <tr>
            <td>001</td>
            <td>Course A</td>
            <td>
                <ul>
                    <li>Professor X</li>
                    <li>Professor Y</li>
                </ul>
            </td>
            <td>
                <button class="btn btn-primary btn-sm resource-update-btn"><i class="fa fa-pencil"></i></button>
                <button class="btn btn-danger btn-sm resource-delete-btn"><i class="fa fa-trash-o"></i></button>
            </td>
        </tr>
        <tr>
            <td>001</td>
            <td>Course A</td>
            <td>
                <ul>
                    <li>Professor X</li>
                    <li>Professor Y</li>
                </ul>
            </td>
            <td>
                <button class="btn btn-primary btn-sm resource-update-btn"><i class="fa fa-pencil"></i></button>
                <button class="btn btn-danger btn-sm resource-delete-btn"><i class="fa fa-trash-o"></i></button>
            </td>
        </tr>
        <tr>
            <td>001</td>
            <td>Course A</td>
            <td>
                <ul>
                    <li>Professor X</li>
                    <li>Professor Y</li>
                </ul>
            </td>
            <td>
                <button class="btn btn-primary btn-sm resource-update-btn"><i class="fa fa-pencil"></i></button>
                <button class="btn btn-danger btn-sm resource-delete-btn"><i class="fa fa-trash-o"></i></button>
            </td>
        </tr>
        <tr>
            <td>001</td>
            <td>Course A</td>
            <td>
                <ul>
                    <li>Professor X</li>
                    <li>Professor Y</li>
                </ul>
            </td>
            <td>
                <button class="btn btn-primary btn-sm resource-update-btn"><i class="fa fa-pencil"></i></button>
                <button class="btn btn-danger btn-sm resource-delete-btn"><i class="fa fa-trash-o"></i></button>
            </td>
        </tr>
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
        <form class="form" method="POST" action="" id="resource-form">
            <input type="hidden" name="_method" value="">
            <div class="row">
                <div class="col-lg-10 col-md-10 col-sm-10 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
                    <input type="hidden" name="_token" value="YOUR_CSRF_TOKEN">
                    <div class="form-group">
                        <label style="margin-right: 90px">Nom : </label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label >Le(s) chargé(s) de module(s)</label>
                        <div class="select2-wrapper" style="margin-top: 10px">
                            <select id="professors-select" name="professor_ids[]" class="form-control select2" style="width: 50%" multiple>
                                <option value="1">Prof 1</option>
                                <option value="2">Prof 2</option>
                                <option value="3">Prof 3</option>
                                <option value="4">Prof 4</option>
                                <option value="5">Prof 5</option>
                            </select>
                            <span id="selected-professors"></span>

                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <!-- Footer -->
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


</script>

</body>
</html>
