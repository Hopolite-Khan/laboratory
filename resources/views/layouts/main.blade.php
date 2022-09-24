<!DOCTYPE html>
<html lang="{{ i18n()->current() }}" dir="{{ i18n()->dir() }}">

<head>
    <script src="{{ asset('assets/js/alpine.min.js') }}" defer></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Laboratory')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @stack('styles')
    @vite
</head>

<body>
    <header>
        <x-navigation />
        @yield('header')
    </header>
    <main class="container">
        @yield('content')
    </main>
    <footer>
        @yield('footer')
    </footer>
    @stack('scripts')
</body>

</html>
