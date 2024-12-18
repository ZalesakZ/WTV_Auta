
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

            <!-- Fonts -->
            <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
        
        <link rel="stylesheet" href= {{ asset('css/style.css') }}>
        <link rel="stylesheet" href= {{ asset('css/topStyle.css') }}>
        <link rel="stylesheet" href= {{ asset('css/galeryStyle.css') }}>

         <!-- Scripts -->

         @vite([
            'resources/css/app.css',
            'resources/js/app.js',
            'public/css/style.css',
            'public/css/topStyle.css',
            'public/css/galeryStyle.css',
            ])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body>


        @auth
            @livewire('navigation-menu')
        @endauth


        @guest
            @include('layouts/inputs/navigace')
        @endguest



        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>

        @livewireScripts
    </body>
</html>
