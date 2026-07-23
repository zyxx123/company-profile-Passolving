<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth overflow-x-hidden">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- SEO Optimization -->
    <title>PASSolving | Transforming Organization</title>
    <meta name="description" content="Pioneer in Agility Assessment & National Soft Skill Certification. We work when leadership is ready to face uncomfortable realities.">
    <link rel="icon" type="image/jpeg" href="/passolving_logo.jpg">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- AOS Animation CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Vite (Tailwind + JS) -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- Livewire Styles -->
    @livewireStyles
    
    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-[#F8FAFB] text-[#6B7280] antialiased selection:bg-primary selection:text-primary-dark relative overflow-x-hidden font-sans">
    
    <!-- Global Background Elements -->
    <!-- Subtle Grid Pattern -->
    <div class="fixed inset-0 z-[-1] bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAiIGhlaWdodD0iMjAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGNpcmNsZSBjeD0iMiIgY3k9IjIiIHI9IjIiIGZpbGw9IiNFMUU1RTgiLz48L3N2Zz4=')] [background-size:24px_24px] opacity-60"></div>
    
    <!-- Ambient Glowing Orbs -->
    <div class="fixed top-[-10%] left-[-10%] w-[40%] h-[40%] rounded-full bg-primary/20 blur-[120px] z-[-1] opacity-60 mix-blend-multiply pointer-events-none animate-pulse" style="animation-duration: 8s;"></div>
    <div class="fixed bottom-[-10%] right-[-5%] w-[35%] h-[35%] rounded-full bg-cta/10 blur-[100px] z-[-1] opacity-60 mix-blend-multiply pointer-events-none animate-pulse" style="animation-duration: 12s; animation-delay: 2s;"></div>

    <!-- Main Content Wrapper -->
    <div class="relative z-10 min-h-screen flex flex-col w-full">
        <x-header />

        <!-- Page Content -->
        <main class="flex-grow">
            {{ $slot }}
        </main>

        <x-footer />
    </div>

    <!-- Livewire Scripts -->
    @livewireScripts

    <!-- AOS Animation JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init({
                duration: 800,
                once: true,
                offset: 100,
                easing: 'ease-out-cubic'
            });
        });
    </script>
</body>
</html>
