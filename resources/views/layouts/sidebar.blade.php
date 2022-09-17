<div id="app">
    <aside id="sidebar" class="active">
        <div class="sidebar-wrapper active ps ps--active-y ">

            <div class="sidebar-header position-relative">

                <div class="d-flex justify-content-between align-items-center">
                    <div class="logo">
                        <x-logo />
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
                <ul class="menu">
                    <li class="sidebar-title">Menu</li>

                    <x-sidebar-item route="home" title="Dashboard" />
                    <x-sidebar-item route="ReservationBooking" title='Reservation' />

                    <x-sidebar-item children route="New Booking">

                        <a href="#" class='sidebar-link  '>
                            <i class="bi bi-bookmark-fill"></i> <span> {{ __('New Booking') }} </span>
                        </a>

                        <ul class="submenu ">
                            <x-submenu route="ReservationsRegistration" title="New patient" />
                            <x-submenu route="ReservationsRegistration" title="Old patient" />
                            <x-submenu route="ReservationsRegistration" title="Company associated" />
                        </ul>
                    </x-sidebar-item>
                    <x-sidebar-item route="GetPatient" title="Patients" icon="user"/>
                    <x-sidebar-item children route="SimpleOperations">
                        <a href="#" class='sidebar-link'>
                            <x-operation />
                            <span>Sample Opreations</span>
                        </a>
                        <ul class="submenu ">
                            <li class="submenu-item ">
                                <a href="">option1</a>
                            </li>
                        </ul>
                    </x-sidebar-item>

                    <x-sidebar-item children route="Registeration">
                        <a href="#" class='sidebar-link '>
                            <svg width="24" height="24" class="bi" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M6.455 19L2 22.5V4C2 3.73478 2.10536 3.48043 2.29289 3.29289C2.48043 3.10536 2.73478 3 3 3H21C21.2652 3 21.5196 3.10536 21.7071 3.29289C21.8946 3.48043 22 3.73478 22 4V18C22 18.2652 21.8946 18.5196 21.7071 18.7071C21.5196 18.8946 21.2652 19 21 19H6.455ZM11 10H8V12H11V15H13V12H16V10H13V7H11V10Z"
                                    fill="#7C8DB5" />
                            </svg>
                            <span>Registeration</span>
                        </a>
                        <ul class="submenu ">
                            <x-submenu route="PatientRegistration" title="Register Patients" />
                            <x-submenu route="LabTest" title="Register Lab Tests" />
                            <x-submenu route="GetHospital" title="Register Hospitals" />
                        </ul>
                    </x-sidebar-item>

                    <x-sidebar-item children route="Report">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-pen-fill"></i>
                            <span>Reports</span>
                        </a>
                        <ul class="submenu ">
                            <li class="submenu-item ">
                                <a href="">Total Report </a>
                            </li>
                            <li class="submenu-item ">
                                <a href="">Tax Report</a>
                            </li>
                            <li class="submenu-item ">
                                <a href=""> payment Report </a>
                            </li>
                            <li class="submenu-item ">
                                <a href="">Payment Report Details </a>
                            </li>

                            <li class="submenu-item ">
                                <a href=""> Organization Totals </a>
                            </li>
                            <li class="submenu-item ">
                                <a href=""> Companies Report </a>
                            </li>
                            <li class="submenu-item ">
                                <a href=""> Outsource Report </a>
                            </li>
                            <li class="submenu-item ">
                                <a href=""> Invoice Report </a>
                            </li>
                            <li class="submenu-item ">
                                <a href=""> Outsource Monthly Report </a>
                            </li>
                        </ul>
                    </x-sidebar-item>

                    <x-sidebar-item route="home" icon="qr-code" title="QR scanner"/>
                    <x-sidebar-item route="Reservation" icon="building" title="Organization"/>
                    <x-sidebar-item route="Reservation" icon="finance" title="Finance"/>


                    <li class="sidebar-item   ">
                        <a href="{{ route('Reservation') }}" class='sidebar-link  '>
                            <svg width="501" height="512" viewBox="0 0 501 512" class="bi" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M133.562 0V233.739H378.432V0H133.562ZM322.78 100.174H189.215V66.783H322.78V100.174V100.174Z"
                                    fill="#7C8DB5" />
                                <path
                                    d="M0 267.13V512H233.739V267.13H0ZM178.087 367.304H55.652V333.913H178.087V367.304Z"
                                    fill="#7C8DB5" />
                                <path
                                    d="M267.129 267.13V512H500.868V267.13H267.129ZM445.216 367.304H322.781V333.913H445.216V367.304Z"
                                    fill="#7C8DB5" />
                            </svg>
                            <span> {{ __('Stocks Management') }} </span>
                        </a>
                    </li>

                    <li class="sidebar-item text-white ">
                        <a href="{{ route('Reservation') }}" class='sidebar-link   '>
                            <i class="bi bi-truck"></i>
                            <span> {{ __('Shipment') }} </span>
                        </a>
                    </li>

                    <li class="sidebar-item  has-sub ">
                        <a href="#" class='sidebar-link  '>
                            <i class="bi bi-gear"></i>
                            <span>Setting</span>
                        </a>
                        <ul class="submenu ">
                            <li class="submenu-item "><a href="">Option</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
    </aside>
</div>
