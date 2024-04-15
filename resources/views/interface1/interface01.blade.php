<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('CSS/interface01.css') }}">
</head>
<body>

<div class="Desktop13">
    <div class="GestionDEmploisDuTempsDExamens">Gestion d'Emplois du Temps d'Examens</div>
    <div class="FacilitezLaPlannificationDExamensUniversitaireAvecNotreSiteDeGNRationDEmploisDuTemps">
        Facilitez la plannification d’examens universitaire avec notre site de génération d’emplois du temps
    </div>
    <div class="Rectangle1"></div>
    <form method="GET" action="{{ route('admin.login') }}">
        <button type="submit" class="SeConnecter">Commencer</button>
    </form>

    <img class="ScheduleAmico1" src="/Images/ilage1.png" alt="Image 1" />
    <img class="LogoooRemovebgPreview2" src="/Images/logo.png" alt="Logo" />
</div>

</body>
</html>
