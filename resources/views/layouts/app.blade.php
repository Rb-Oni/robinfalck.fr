<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Robin Falck">
    <meta name="description" content="FALCK Robin, Développeur web">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body class="bg-black">
    @include('partials.navbar')
    @yield('content')
    <script src="{{ asset('js/app.js') }}"></script>
    <footer class="border-t-2 border-white text-center bg-black py-3">
        <p class="text-white font-semibold">2022 | Robin FALCK</p>
    </footer>
</body>

</html>