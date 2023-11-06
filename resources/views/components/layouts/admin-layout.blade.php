<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Ecommerce-Admin: {{ $title ?? '' }}</title>

    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body>

    <main class="grid grid-cols-12">

        <section class="col-span-2">
            <x-layouts.navbar-admin/>
        </section>

        <section class="col-span-10 py-5 px-2">
            {{ $slot }}
        </section>

    </main>

</body>
</html>
