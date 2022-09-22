<!DOCTYPE html>
<html lang="en">

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

<body dir="rtl">
    <header >
        <nav class="container navbar navbar-expand-lg navbar-primary bg-primary">
            <ul class="">
                <li>home</li>
                <li>about us</li>
                <li>contact us</li>
            </ul>
        </nav>
        @yield('header')

    </header>
    <main class="container">
        @yield('content')
    </main>
    <footer>
        @yield('footer')
    </footer>
</body>
@stack('scripts')

</html>
