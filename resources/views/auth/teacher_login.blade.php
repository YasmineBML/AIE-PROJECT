<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="{{ asset('css/teacher.css') }}" rel="stylesheet">
</head>
<body>
<div class="login-container">
    <div class="login-box">
        <h1>Bienvenue dans votre site d’EDT d’examens</h1>
        <p>Authentifiez-vous pour accéder au site</p>
        <form  method="GET" action="{{ route('AccueilEns') }}">
            @csrf

            <div class="form-group">
                <label for="email">Email</label>
                <input id="email" type="email" name="email" required autocomplete="email" autofocus>
            </div>

            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input id="password" type="password" name="password" required autocomplete="current-password">
            </div>

            <div class="login-btns">
                <form method="GET" action="{{ route('AccueilEns') }}">
                <button type="submit" class="login-btn">Se connecter</button>
                <a href="{{ route('admin.login') }}" class="login-btn">Je suis administrateur</a>
                </form>
            </div>
        </form>
    </div>
    <img src="/Images/enseignants-removebg-preview.png" class="login-image" alt="Teacher Image">
</div>
<script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
