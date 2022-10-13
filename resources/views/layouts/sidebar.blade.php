<div id="app" >
    <aside id="sidebar" x-ref="sidebar" class="active" x-show="$store.app.open" x-transition.scale x-transition.scale.origin.left x-transition.duration.300ms>
        <div class="sidebar-wrapper">
            <div class="sidebar-header position-relative">
                <div id="logo"></div>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="logo" >
                        @svg("logo")
                    </div>
                    <div class="theme-toggle d-flex gap-2  align-items-center mt-2">
                        <x-light />
                        <x-form-switch />
                        <x-dark />
                    </div>
                    <div class="sidebar-toggler x">
                        <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                    </div>
                </div>
            </div>

            <div class="sidebar-menu">
                <div class="menu">
                    <div class="menu-link px-3 py-2 mb-2">
                        <a href="{{ route('admin') }}">
                            @svg('graph', 'me-2')
                            Dashboard
                        </a>
                    </div>

                    <div class="menu-link px-3 py-2 mb-2">
                        <a href="{{ route('ReservationBooking') }}">
                            @svg('graph', 'me-2')
                            Reservation
                        </a>
                    </div>

                    <details class="menu-item has-sub mb-2">
                        <summary class="menu-link px-3 py-2">
                            @svg('bookmark', 'me-2')
                            New Booking
                        </summary>
                        <ul class="menu-submenu gap-1">
                            <li class="submenu-item"><a href="{{ route('ReservationsRegistration') }}">New patient</a>
                            </li>
                            <li class="submenu-item"><a href="{{ route('ReservationsRegistration') }}">Old Patient</a>
                            </li>
                            <li class="submenu-item"><a href="{{ route('ReservationsRegistration') }}">Company
                                    Associated</a></li>
                        </ul>
                    </details>

                    <details class="menu-item has-sub mb-2">
                        <summary class="menu-link px-3 py-2">
                            @svg('operations', 'me-2')
                            Sample Opreations
                        </summary>
                        <ul class="menu-submenu gap-1">
                            <li class="submenu-item">
                                <a href="{{ route('ReservationsRegistration') }}">Operation 1</a>
                            </li>
                        </ul>
                    </details>

                    <details class="menu-item has-sub mb-2">
                        <summary class="menu-link px-3 py-2">
                            @svg('plus', 'me-2')
                            Registeration
                        </summary>
                        <ul class="menu-submenu gap-1">
                            <li class="submenu-item"><a href="{{ route('PatientRegistration') }}">Register Patients</a>
                            </li>
                            <li class="submenu-item"><a href="{{ route('LabTest') }}">Register Lab Tests</a></li>
                            <li class="submenu-item"><a href="{{ route('GetHospital') }}">Register Hospitals</a></li>
                        </ul>
                    </details>
                    <details class="menu-item has-sub mb-2">
                        <summary class="menu-link px-3 py-2">
                            @svg('icons/pen-fill', 'me-2')
                            Reports
                        </summary>
                        <ul class="menu-submenu gap-1">
                            <li class="submenu-item"><a href="{{ route('PatientRegistration') }}">Register Patients</a>
                            </li>
                            <li class="submenu-item"><a href="#">Total Report </a></li>
                            <li class="submenu-item"><a href="#">Tax Report</a></li>
                            <li class="submenu-item"><a href="#">payment Report</a></li>
                            <li class="submenu-item"><a href="#">Payment Report Details</a></li>
                            <li class="submenu-item"><a href="#">Organization Totals</a></li>
                            <li class="submenu-item"><a href="#">Companies Report</a></li>
                            <li class="submenu-item"><a href="#">Outsource Report </a></li>
                            <li class="submenu-item"><a href="#">Invoice Report</a></li>
                            <li class="submenu-item"><a href="#">Outsource Monthly Report</a></li>
                        </ul>
                    </details>

                    <details class="menu-item has-sub mb-2">
                        <summary class="menu-link px-3 py-2">
                            @svg('qr-code', 'me-2 bi')
                            QR Scanner
                        </summary>
                        <ul class="menu-submenu gap-1">
                            <li class="submenu-item">
                                <a href="{{ route('ReservationsRegistration') }}">Operation 1</a>
                            </li>
                        </ul>
                    </details>
                    <div class="menu-link px-3 py-2">
                        <a href="{{ route('ReservationBooking') }}">
                            @svg('building', 'me-2 bi')
                            Organization
                        </a>
                    </div>
                    <div class="menu-link px-3 py-2">
                        <a href="{{ route('ReservationBooking') }}">
                            @svg('icons/cash', 'me-2 bi')
                            Finance
                        </a>
                    </div>
                    <div class="menu-link px-3 py-2">
                        <a href="{{ route('ReservationBooking') }}">
                            @svg('stock', 'me-2 bi')
                            Stocks Management
                        </a>
                    </div>
                    <div class="menu-link px-3 py-2">
                        <a href="{{ route('ReservationBooking') }}">
                            @svg('icons/truck', 'me-2 bi')
                            Shipment
                        </a>
                    </div>
                    <details class="menu-item has-sub mb-2">
                        <summary class="menu-link px-3 py-2">
                            @svg('icons/gear', 'me-2 bi')
                            Settings
                        </summary>
                        <ul class="menu-submenu gap-1">
                            <li class="submenu-item">
                                <a href="{{ route('ReservationsRegistration') }}">option 1</a>
                            </li>
                        </ul>
                    </details>

                </div>
            </div>
    </aside>
</div>
