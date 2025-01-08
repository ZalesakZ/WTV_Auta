<link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
        <link rel="stylesheet" href={{ asset ("css/style.css") }}>
        <link rel="stylesheet" href={{ asset ('css/topStyle.css') }}>
        <link rel="stylesheet" href={{ asset ('css/galeryStyle.css') }}>
        
         <!-- Scripts -->

         @vite([
            'resources/css/app.css',
            'resources/js/app.js',
            ])

<!-- Styles -->
        @livewireStyles
</head>
<body>
<header>
        <div>
            <nav>
                <a href="{{ route('welcome.route') }}"><i class="fa-solid fa-house-chimney"></i></a>
                <div class="menu">
                    <a href="#" class="aktivni">Filmy</a>
                    <div class="seznam">
                        <a href="{{ route('auta1.route') }}" class="">Auta 1</a>
                        <a href="{{ route('auta2.route') }}" class="">Auta 2</a>
                        <a href="{{ route('auta3.route') }}" class="">Auta 3</a>
                    </div>
                </div>
                <a href="{{ route('hry.route') }}" class="">Hry</a>
                <a href="{{ route('serialy.route') }}" class="">Seriály</a>
                <a href="{{ route('top.route') }}" class="">Síň slávy</a>
            </nav>
        </div>
        <div class="obsah">
                <img src="../img/logo.png" alt="Logo" class="image">
                <div class="login">
                    @if (Route::has('login'))
                        <nav class="-mx-3 flex flex-1 flex-col">
                            @auth
                                <a
                                    href="{{ url('/dashboard') }}"
                                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                                >
                                    Dashboard
                                </a>
                                        
                            @else
                                <a
                                    href="{{ route('login') }}"
                                    
                                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                                >
                                    Log in
                                </a>
                                <hr>
                                @if (Route::has('register'))
                                    <a
                                        href="{{ route('register') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                                    >
                                        Register
                                    </a>
                                    
                                @endif
                            @endauth
                        </nav>
                    @endif

                
                </div>        
            </div>
        </header>
        <main>
        <div class="font-sans text-gray-900 antialiased">
                {{ $slot }}
            </div>
         </main>

        @livewireScripts
        <footer>
        <p>&copy; 2024 Disney & Pixar | Autoři: Vobruba, Zálešák, Kůřil | Poslední aktualizace: 12. listopadu 2024</p>
        </footer>
    </body>
</html>
