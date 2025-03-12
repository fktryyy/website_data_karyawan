<!DOCTYPE html>
<html lang="id" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>@yield('title')</title>
</head>
<body class="h-full">

<div class="min-h-full">
    <!-- Navbar -->
    <nav class="bg-gray-800" x-data="{ isOpen: false }">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
                <div class="flex items-center">
                    <div class="shrink-0">
                        <img class="size-12" src="{{ asset('img/images.png') }}" alt="Your Company">
                    </div>
                    <div class="hidden md:block">
                        <div class="ml-10 flex items-baseline space-x-4">
                            <a href="{{ route('home') }}" class="rounded-md px-3 py-2 text-sm font-medium 
                                {{ request()->routeIs('home') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">
                                Home
                            </a>
                            <a href="{{ route('karyawan') }}" class="rounded-md px-3 py-2 text-sm font-medium 
                            {{ request()->routeIs('karyawan') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">
                            Data Karyawan
                            </a> 
                            <a href="{{ route('create') }}" class="rounded-md px-3 py-2 text-sm font-medium 
                            {{ request()->routeIs('create') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">
                            Input Data
                            </a>                        
                            </a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </nav>

    <!-- Header -->
    <header class="bg-white shadow">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold tracking-tight text-gray-900">@yield('header')</h1>
        </div>
    </header>

    <!-- Content -->
    <main>
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            @yield('content')
        </div>
    </main>
</div>

</body>
</html>
