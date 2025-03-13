<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>GPC :: Administradora de imóveis</title>

        <!-- Favicon -->
        <link rel="icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}">

        <!-- Meta -->
        <meta name="description" content="GPC :: Administradora de imóveis">
        <meta name="author" content="GPC :: Administradora de imóveis">
        <meta name="keywords" content="GPC :: Administradora de imóveis">

        <meta property="og:title" content="GPC :: Administradora de imóveis">
        <meta property="og:description" content="GPC :: Administradora de imóveis">
        <meta property="og:image" content="{{ asset('img/logo1.webp') }}">
        <meta property="og:url" content="https://gpcadministradora.com.br">

        <meta name="twitter:title" content="GPC :: Administradora de imóveis">
        <meta name="twitter:description" content="GPC :: Administradora de imóveis">
        <meta name="twitter:image" content="{{ asset('img/logo1.webp') }}">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:url" content="https://gpcadministradora.com.br">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
        <link rel="stylesheet" href="{{ asset('build/assets/app-CQdbDxyU.css') }}">

        @stack('head')
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            <livewire:layout.navigation />

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        <script src="{{ asset('build/assets/app-Cc28pn9L.js') }}"></script>
        @stack('foot')
    </body>
</html>
