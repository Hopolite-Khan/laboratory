<!DOCTYPE html>
<html lang="en">
<head>
    {{-- <script src="{{ asset('assets/js/alpine.min.js') }}" defer></script> --}}
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laboratory Application')</title>

    @vite(["resources/scripts/app.js", "resources/scss/app.scss"])
    @stack('styles')
</head>

<body x-data>
    @include('layouts.sidebar')

    <div id="main" :style="{ marginLeft: $store.app.open ? '300px' : '0'}" class='layout-navbar'>
        <header class='mb-3'>
            <nav class="navbar navbar-expand navbar-light " >
                <div class="container-fluid">
                    <button class="burger-btn d-block btn" @click="$store.app.toggleSidebar(); ">
                        &#9776;
                    </button>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                            <li class="nav-item me-1">
                                <a class="nav-link text-gray-600" href="{{ route('QRIndex') }}">
                                    @svg('qr-code', 's-1')
                                </a>
                            </li>
                            <li class="nav-item me-3">
                                <a class="nav-link text-gray-600" href="#">
                                    @svg('bar-code', 's-1')
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
                                            <img src="assets/images/faces.jpg">
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
        {{-- <script src="{{ asset('assets/js/app.js') }}"></script> --}}

</body>

</html>
