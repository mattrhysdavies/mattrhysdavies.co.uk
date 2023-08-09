<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>


<body class="font-sans antialiased">
<div class="flex flex-col h-screen justify-between">

    <header class="h-10">
        &nbsp;
    </header>

    <div class="lg:w-1/2 mx-auto">

        <!-- Page Content -->
        <main class="mb-auto ">
            {{ $slot }}
        </main>

    </div>


    <footer class="py-2 text-center text-xs">
        mattrhysdavies {{ \Illuminate\Support\Carbon::make(now())->format('Y') }}
    </footer>

    @stack('modals')

    @livewireScripts
</body>
</html>
