<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title','laboratory')</title>

        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        @livewireStyles
        @vite
    </head>
<body>
    <header></header>
    <main class="container">
        @yield('container')
    </main>
    <footer></footer>
    @livewireScripts
</body>
</html>
