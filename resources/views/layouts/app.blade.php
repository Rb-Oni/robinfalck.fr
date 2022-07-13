<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Robin Falck">
    <meta name="description" content="FALCK Robin, Développeur web">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="icon" type="image/jpg" href="{{ asset('/img/logo.jpg') }}">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body class="bg-black selection:bg-green">

    @include('partials.navbar')

    @yield('content')

    @include('layouts.footer')

    <script src="{{ asset('js/app.js') }}"></script>

</body>

</html>