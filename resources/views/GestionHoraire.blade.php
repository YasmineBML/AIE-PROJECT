<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion d'horaire</title>
    <link rel="stylesheet" href="/CSS/GestionHoraire.css">
</head>
<body>
<div style="margin-bottom: 100px">
    <h2 id="texte1" style="text-align: center">Vous pouvez maintenant programmer votre emploi du temps avec les horaires souhaités</h2>
</div>
<div class="container" style="margin-top: 50px">
    <div style="margin-bottom: 80px">
        <img id="logo" src="{{ asset('images/horaires-removebg-preview.png') }}" alt="Logo" >
    </div>
    <div class="row">
        <div class="col-8">
            <div class="date-container">
                <h4 style="margin-right: 55px">Date de début</h4>
                <input type="date" id="date_debut" name="date_debut">
            </div>
            <div class="date-container">
                <h4 style="margin-right: 75px">Date de fin</h4>
                <input type="date" id="date_fin" name="date_fin">
            </div>
            <div class="date-container">
                <h4 style="margin-right: 40px">Durée d'examen</h4>
                <select id="duree_examen" name="duree_examen">
                    <option value="30">30 minutes</option>
                    <option value="60">1 heure</option>
                    <option value="90">1 heure 30 minutes</option>
                    <option value="120">2 heures</option>
                </select>
            </div>
        </div>
    </div>
    <table style="margin-bottom: 50px">
        <tr>
            <th>8H-10H</th>
            <th>10H-12H</th>
            <th>12H-14H</th>
            <th>14H-16H</th>
        </tr>
        <tr>
            <td><input type="checkbox"></td>
            <td><label><input type="checkbox"></label></td>
            <td><input type="checkbox"></td>
            <td><input type="checkbox"></td>
        </tr>
    </table>
    <button id="pagesuivante" >Valider</button>
</div>
</body>
</html>
