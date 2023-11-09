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
</head>
<body>
<main class="">

    <section class="">
        <x-layouts.navbar-client/>

    </section>

    <section class="flex mb-5">
        {{ $slot }}
    </section>

    <section>
        <x-layouts.footer-client/>
    </section>

</main>

</body>
</html>
