<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Aster-Ecommerce: {{ $title ?? '' }}</title>

    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap"
        rel="stylesheet" />
    <link rel="shortcut icon" href="{{ asset('img/ASTER-3.png') }}">

</head>
<body class="bg-gradient-to-r from-yellow-200 via-orange-300 to-lavender-400">
<main class="">
    <img src="{{ asset('img/guest.png') }}" class="py-3 px-3 absolute w-32 h-32" alt="imagen-logo">

    <section class="flex mb-5">
        {{ $slot }}
    </section>


</main>

</body>
</html>
