<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Side Navigation Menu</title>
    <link rel="stylesheet" href="/fonts/fontawesome-free-6.5.2-web/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('CSS/sidebar.css') }}">

</head>
<body>
<div class="sidenav">
    <div class="sidenav-header">
        <img src="Images/menu.png" alt="Logo">

    </div>
    <a href="{{ route('acceuil') }}"><i class="fas fa-home"></i> Accueil</a>
    <a href="#"><i class="fas fa-graduation-cap"></i> Formations</a>
    <a href="#"><i class="fas fa-book"></i> Spécialités</a>
    <a href="{{ route('enseignants.index') }}"><i class="fas fa-chalkboard-teacher"></i> Enseignants</a>
    <a href="#"><i class="fas fa-building"></i> Salles</a>
    <a href="#"><i class="fas fa-user-graduate"></i> Étudiants</a>
    <a href="#"><i class="fas fa-calendar-alt"></i> Emplois du temps</a>
    <a href="#"><i class="fas fa-door-closed"></i> Salles</a>

    <form id="logout-form" action="{{ route('admin.logout') }}" method="POST">
        @csrf
        <button type="submit"><i class="fas fa-sign-out-alt"></i> Se déconnecter</button>
    </form>

</div>



</body>
</html>
