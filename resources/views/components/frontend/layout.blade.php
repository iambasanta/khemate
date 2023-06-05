<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Khemate @isset($title) | {{ $title }} @endisset</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/components.js', 'resources/js/app.js'])

        @livewireStyles

        @stack('styles')
    </head>
    <body class="antialiased">
        {{ $slot }}

        @livewireScripts

        @stack('scripts')
    </body>
</html>
