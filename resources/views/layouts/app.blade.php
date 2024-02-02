<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">
<div id="app">
    <nav class="bg-white shadow">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <div>
                    <a href="{{ route('service.index') }}" class="text-lg font-semibold">SerFive</a>
                </div>
                <div class="hidden sm:block">
                    <ul class=" flex space-x-4">
                        <li>
                            <a href="{{ route('service.index') }}" class="text-gray-600 hover:text-gray-800">Services</a>
                        </li>
                        @guest
                            @if (Route::has('login'))
                                <li>
                                    <a href="{{ route('login') }}" class="text-gray-600 hover:text-gray-800">Login</a>
                                </li>
                            @endif
                            @if (Route::has('register'))
                                <li>
                                    <a href="{{ route('register') }}" class="text-gray-600 hover:text-gray-800">Register</a>
                                </li>
                            @endif
                        @else
                            <li class="relative">
                                <a href="#" class="text-gray-600 hover:text-gray-800">
                                    {{ Auth::user()->name }}
                                </a>
                                <ul class="absolute top-8 right-0 bg-white border shadow-md rounded w-40 py-2 mt-2 hidden">
                                    <li>
                                        <a href="{{ route('logout') }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Logout</a>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
                <div class="block sm:hidden">
                    <button class="navbar-toggler" type="button">
                        <svg class="h-6 w-6 fill-current text-gray-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M2 4.75C2 4.33579 2.33579 4 2.75 4H21.25C21.6642 4 22 4.33579 22 4.75C22 5.16421 21.6642 5.5 21.25 5.5H2.75C2.33579 5.5 2 5.16421 2 4.75ZM2.75 11C2.33579 11 2 11.3358 2 11.75C2 12.1642 2.33579 12.5 2.75 12.5H21.25C21.6642 12.5 22 12.1642 22 11.75C22 11.3358 21.6642 11 21.25 11H2.75ZM2 18.25C2 17.8358 2.33579 17.5 2.75 17.5H21.25C21.6642 17.5 22 17.8358 22 18.25C22 18.6642 21.6642 19 21.25 19H2.75C2.33579 19 2 18.6642 2 18.25Z"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <main class="py-4">
        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                <span class="block sm:inline">{{ session('success') }}</span>
                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.354 5.354a2 2 0 0 1 0 2.828L9.828 10l4.526 4.546a2 2 0 1 1-2.828 2.828L7 12.828l-4.546 4.526a2 2 0 1 1-2.828-2.828L4.172 10 0.646 5.454a2 2 0 1 1 2.828-2.828L7 7.172l4.546-4.526a2 2 0 0 1 2.828 0z"/></svg>
            </span>
            </div>
        @endif
        @yield('content')
    </main>
</div>
</body>
</html>
