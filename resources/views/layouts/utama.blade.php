<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'SIP') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link rel="icon" href="{{ Vite::asset('resources/images/logo-kementrianagama.png') }}" type="image/x-icon">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&display=swap" rel="stylesheet">
       

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased bg-whiteColor" x-data="{ sidebarOpen: true }" @sidebar-toggle.window="sidebarOpen = $event.detail">
    <div class="flex h-screen">
        <!-- Sidebar -->
        @include('layouts.sidebars.sidebar')

        <!-- Page Content -->
        <div class="flex-1">
            <header :class="{'ml-10': sidebarOpen, 'ml-18': !sidebarOpen}">
                @include('layouts.navbars.navigation')
            </header>

            <main :class="{'ml-72': sidebarOpen, 'ml-24': !sidebarOpen}" class="transition-all duration-300 m-10 mt-28  ">
                @yield('content')
            </main>
        </div>
    </div>
    </body>
</html>
