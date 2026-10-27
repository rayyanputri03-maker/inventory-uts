<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Maison de Clarissa') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700,800|playfair-display:400,600,700&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased bg-pink-50/30 text-gray-800">
        <div class="min-h-screen flex">
            <!-- Sidebar Permanent -->
            @include('layouts.navigation')

            <!-- Main Content Area -->
            <div class="flex-1 flex flex-col min-w-0">
                @if (isset($header))
                    <header class="bg-white/80 backdrop-blur-md border-b border-rose-100 sticky top-0 z-10">
                        <div class="max-w-7xl mx-auto py-5 px-6 sm:px-8">
                            {{ $header }}
                        </div>
                    </header>
                @endif

                <main class="flex-1 p-6 sm:p-8">
                    {{ $slot }}
                </main>
            </div>
        </div>
    </body>
</html>