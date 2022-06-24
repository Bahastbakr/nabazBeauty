<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <script src="https://kit.fontawesome.com/5db2eb3dde.js" crossorigin="anonymous"></script>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <style>
        body {
            background-color: #c1ceb2;
        }
    </style>
</head>

<body>
    <main class="md:px-16 md:py-16 px-8 py-8 md:mx-24 md:my-24 mx-4 my-4 bg-white space-y-20"
        style="border-radius:70px">
        {{ $slot }}
    </main>
    <script src="https://unpkg.com/flowbite@1.4.7/dist/flowbite.js"></script>

</body>

</html>
