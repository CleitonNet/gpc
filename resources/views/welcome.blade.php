<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" style="behavior: smooth;">
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

        <!-- Styles / Scripts -->
        {{-- @vite(['resources/css/styles.css', 'resources/js/scripts.js']) --}}
        <link rel="stylesheet" href="{{ asset('build/assets/styles-C733e1-h.css') }}">

        <style>
            .gradient-text {
                display: inline;
                background: linear-gradient(to right, var(--amarelo), var(--amarelo-claro), var(--amarelo));
                -webkit-background-clip: text;
                color: transparent;
            }
        </style>
    </head>
    <body class="text-white font-swis721 " style="height: 200vh;">

        <x-whatsapp />
        {{-- DEFINIR CADASTRO DE ESTATISTICAS --}}
        {{-- CADASTRO DE LINK DO VIDEO DO YOUTUBE NO HEADER --}}

        <x-web.home.header />
        <x-web.home.about />
        <x-web.home.services />
        <x-web.home.contact />
        <x-web.home.sac />

        <script type="module" src="{{ asset('build/assets/scripts-C31bkPAf.js') }}"></script>
    </body>
</html>
