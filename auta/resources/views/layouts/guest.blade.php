<link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
<link rel="stylesheet" href={{ asset ('css/style.css') }}>
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
                <a href="{{ route('welcome_blade.route') }}" class="{{ request()->routeIs('welcome_blade.route') ? 'aktivni' : '' }}"><i class="fa-solid fa-house-chimney"></i></a>
                <div class="menu">
                    <a href="#" class="{{ request()->routeIs('auta1_blade.route', 'auta2_blade.route', 'auta3_blade.route') ? 'aktivni' : '' }}">Filmy</a>
                    <div class="seznam">
                        <a href="{{ route('auta1_blade.route') }}" class="{{ request()->routeIs('auta1_blade.route') ? 'aktivni' : '' }}">Auta 1</a>
                        <a href="{{ route('auta2_blade.route') }}" class="{{ request()->routeIs('auta2_blade.route') ? 'aktivni' : '' }}">Auta 2</a>
                        <a href="{{ route('auta3_blade.route') }}" class="{{ request()->routeIs('auta3_blade.route') ? 'aktivni' : '' }}">Auta 3</a>
                    </div>
                </div>
                <a href="{{ route('hry_blade.route') }}" class="{{ request()->routeIs('hry_blade.route') ? 'aktivni' : '' }}">Hry</a>
                <a href="{{ route('serialy_blade.route') }}" class="{{ request()->routeIs('serialy_blade.route') ? 'aktivni' : '' }}">Seriály</a>
                <a href="{{ route('top_blade.route') }}" class="{{ request()->routeIs('top_blade.route') ? 'aktivni' : '' }}">Síň slávy</a>
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
        <p>&copy; 2025 Disney & Pixar | Autoři: Vobruba, Zálešák, Kůřil | Poslední aktualizace: 20. ledna 2025</p>
        </footer>
    </body>
</html>
