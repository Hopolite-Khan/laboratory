<!DOCTYPE html>
<html lang="en">

<head>
    <script src="{{ asset('assets/js/alpine.min.js') }}" defer></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','Laboratory Application')</title>

    <link rel="stylesheet" href=" {{ asset('assets/css/main/app.css') }} ">
    <link rel="stylesheet" href=" {{ asset('assets/css/main/app-dark.css') }} ">

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
        .lh-0 {
            line-height: 0;
        }
        .flip-right {
            rotate: 180deg;
        }
        .flip-left {
            rotate: -180deg;
        }
        .pointer {
            cursor: pointer;
        }
        .arrow {
            opacity: 0.1;
            cursor: pointer;
            line-height: 0;
            --size: 10px;
            width: var(--size);
            height: var(--size);
            display: grid;
            place-items: center;
            color: white;
            transition: all 0.3s ease-in-out;
        }
        .arrow:hover {
            opacity: .9;
            transition: all 0.3s ease-in-out;
        }
        .active-arrow {
            opacity: 1;
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

                            <li class="nav-item me-1">
                                <a class="nav-link text-gray-600" href="{{ route('QRIndex') }}">
                                    @svg('qr-code','s-1')
                                </a>
                            </li>
                            <li class="nav-item me-3">
                                <a class="nav-link text-gray-600" href="#">
                                    @svg('bar-code','s-1')
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
