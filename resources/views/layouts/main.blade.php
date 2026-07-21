<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'PT PP Presisi Tbk')</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <!-- Vite / Tailwind -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        fontFamily: {
                            sans: ['"Space Grotesk"', 'sans-serif'],
                            heading: ['"Space Grotesk"', 'sans-serif'],
                        },
                        colors: {
                            ppblue: {
                                50: '#f8fafc',
                                100: '#f1f5f9',
                                500: '#3b82f6',
                                600: '#1e3a8a',
                                700: '#1e3a8a',
                                800: '#172554',
                                900: '#0f172a',
                            },
                            accent: '#ea580c',
                            ppyellow: '#f59e0b',
                            gold: '#ca8a04',
                        }
                    }
                }
            }
        </script>
    @endif
</head>
<body class="font-sans antialiased text-gray-800 bg-gray-50 selection:bg-ppblue-500 selection:text-white flex flex-col min-h-screen">

    <x-navbar />

    <!-- Main Content -->
    <main class="flex-grow pt-20">
        @yield('content')
    </main>

    <x-footer />
</body>
</html>
