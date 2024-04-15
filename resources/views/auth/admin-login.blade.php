<!DOCTYPE html>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="{{ asset('CSS/login.css') }}" rel="stylesheet">
</head>
<body>
<div class="login-container">
    <img src="/Images/ilage1.png" class="login-image" alt="Admin Image">
    <div class="login-box">
        <h1>Bienvenue dans votre site d’EDT d’examens</h1>
        <p>Authentifiez-vous pour accéder au site</p>

        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <form method="POST" action="{{ route('admin.login') }}">
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
                <form method="GET" action="{{ route('acceuil') }}">
                    <button type="submit" class="login-btn">Se connecter</button>
                    <a href="{{ route('teacher_login') }}" class="login-btn">Je suis enseignant</a>
                </form>
            </div>
        </form>
    </div>
</div>
<script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
