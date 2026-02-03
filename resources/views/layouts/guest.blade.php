<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'বিশ্ব ব্যাংক ঋণ') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body class="font-sans antialiased text-gray-900">
    <div class="relative">
        <div class="flex lg:h-screen flex-col lg:flex-row min-h-screen w-full">

        <div class="flex flex-1 lg:w-1/2 items-center justify-center bg-wb-gradient mobile-curve py-12 lg:py-0 px-4 lg:px-12 relative">
            <div class="z-10 w-full px-4">
                <img src="{{ asset('images/logo.svg') }}" alt="World Bank"
                    class="w-[180px] h-[60px] lg:w-[490px] lg:h-[218px] mx-auto">
            </div>
        </div>

        <div class="flex flex-1 lg:w-1/2 items-center justify-center bg-[#F0F8FD] p-6 md:p-12">
            <div class="w-full max-w-md">
                @yield('content')
            </div>
        </div>

    </div>
    </div>
    
</body>

</html>
