<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <style>
        .content {
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            margin-top: 10px;
        }
    </style>

    <link rel="stylesheet" href="{{ asset('CSS/sidebar.css') }}">


    <style>

        body {
            background-color: #FEF5E7;

        }
    </style>


    @yield('styles')
</head>
<body>
@include('includes.sidebar')
<div class="content">
    @yield('content')
</div>
</body>
</html>
