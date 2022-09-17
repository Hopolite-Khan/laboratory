<!DOCTYPE html>
<html lang="en">

<head>
    <script src="{{ asset('assets/js/alpine.min.js') }}" defer></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','Laboratory Application')</title>

    <link rel="stylesheet" href=" {{ asset('assets/css/main/app.css') }} ">
    <link rel="stylesheet" href=" {{ asset('assets/css/main/app-dark.css') }} ">
    @vite
    <style>
        :root{
            font-size: 16px;
        }
        .table>:not(caption)>*>*{
            border: none;
        }
        tr{
            border-bottom-width: 0.01rem;
        }
        .place-center {
            place-items: center;
        }
        .s-1 {
            --size: 1rem;
            height: var(--size);
            width: var(--size);
        }
        .flip-right {
            rotate: 180deg;
        }
        .flip-left {
            rotate: -180deg;
        }
    </style>
    @stack('styles')
</head>

<body>
    @include('layouts.sidebar')

    <div id="main" class='layout-navbar'>
        <header class='mb-3'>
            <nav class="navbar navbar-expand navbar-light ">
                <div class="container-fluid">
                    <a href="#" class="burger-btn d-block">
                        <i class="bi bi-justify fs-3"></i>
                    </a>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                            <li class="nav-item   me-1">
                                <a class="nav-link     text-gray-600" href="{{ route('QRIndex') }}">
                                    @svg('qr-code')
                                </a>

                            </li>
                            <li class="nav-item   me-3">
                                <a class="nav-link text-gray-600" href="#">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        fill="currentColor" viewBox="0 0 16 16">
                                        <path
                                            d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1h-3zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5zM.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5zM3 4.5a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7zm2 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7zm2 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7zm2 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-7zm3 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7z" />
                                    </svg>
                                </a>

                            </li>
                        </ul>

                        <div class="dropdown">
                            <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                <div class="user-menu d-flex">
                                    <div class="user-name text-end me-3">
                                        <p class="mb-0 text-sm text-gray-600">Administrator</p>
                                    </div>
                                    <div class="user-img d-flex align-items-center">
                                        <div class="avatar avatar-md">
                                            <img src="assets/images/faces/1.jpg">
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton"
                                style="min-width: 11rem;">

                                <li><a class="dropdown-item" href="#"><i class="icon-mid bi bi-person me-2"></i>
                                        My Profile</a></li>
                                <li><a class="dropdown-item" href="#"><i class="icon-mid bi bi-gear me-2"></i>
                                        Settings</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#"><i
                                            class="icon-mid bi bi-box-arrow-left me-2"></i> Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <main id="main-content">
            @yield('content')
        </main>
        <footer>
            <div class="footer clearfix mb-0 ms-5 text-muted">
                <div class="float-start">
                    <p>2021 © Mazer</p>
                </div>
            </div>
        </footer>
        @stack('scripts')
        <script src="{{ asset('assets/js/app.js') }}"></script>

</body>

</html>
