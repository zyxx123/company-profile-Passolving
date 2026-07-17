<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'PASSolving - Empowering Agility' }}</title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    
    @livewireStyles
</head>
<body class="antialiased">
    
    <!-- Background element from original Next.js globals.css / page.module.css -->
    <div class="pageBg"></div>
    
    <x-header />

    <main class="main">
        {{ $slot }}
    </main>

    <x-footer />

    @livewireScripts
</body>
</html>
