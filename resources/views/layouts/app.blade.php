<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config($tittle ?? 'app.name', 'Laravel') }}</title>

    <!-- Fonts -->

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-white">
        <div class="flex">
            @include('layouts.sidebar')
            <main class="w-4/5 py-2 px-2">
                @isset ($header)
                    <div class="font-light text-2xl">{{ $header }}</div>
                    <div class="w-20 bg-blue-600 h-1 mt-2 mb-5 rounded-full"></div>
                @endisset
                {{ $slot }}
            </main>
        </div>
    </div>
</body>

</html>
