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

                    <li class="sidebar-item   ">
                        <a href="#" class='sidebar-link'>

                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                                class="bi bi-qr-code" viewBox="0 0 16 16">
                                <path d="M2 2h2v2H2V2Z" />
                                <path d="M6 0v6H0V0h6ZM5 1H1v4h4V1ZM4 12H2v2h2v-2Z" />
                                <path d="M6 10v6H0v-6h6Zm-5 1v4h4v-4H1Zm11-9h2v2h-2V2Z" />
                                <path
                                    d="M10 0v6h6V0h-6Zm5 1v4h-4V1h4ZM8 1V0h1v2H8v2H7V1h1Zm0 5V4h1v2H8ZM6 8V7h1V6h1v2h1V7h5v1h-4v1H7V8H6Zm0 0v1H2V8H1v1H0V7h3v1h3Zm10 1h-1V7h1v2Zm-1 0h-1v2h2v-1h-1V9Zm-4 0h2v1h-1v1h-1V9Zm2 3v-1h-1v1h-1v1H9v1h3v-2h1Zm0 0h3v1h-2v1h-1v-2Zm-4-1v1h1v-2H7v1h2Z" />
                                <path d="M7 12h1v3h4v1H7v-4Zm9 2v2h-3v-1h2v-1h1Z" />
                            </svg>

                            <span>QR Scanner</span> </a>
                    </li>

                    <li class="sidebar-item text-white "> <a href="{{ route('Reservation') }}" class='sidebar-link   '>
                            <i class="bi bi-building"></i> <span> {{ __('Organization') }} </span> </a>
                    </li>

                    <li class="sidebar-item  ">
                        <a href="{{ route('Reservation') }}" class='sidebar-link   '>
                            <svg width="25px" height="25px" viewBox="0 0 491 276" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M137.9 137.6C137.9 184.2 175.7 222 222.3 222C268.9 222 306.7 184.2 306.7 137.6C306.7 91 268.9 53.2 222.3 53.2C175.7 53.2 137.9 91 137.9 137.6ZM229.7 87.1C229.7 92.2 229.7 92.2 234.8 93C238.7 93.6 242.4 94.8 246.1 96.4C248.1 97.3 248.8 98.7 248.2 100.8C247.3 103.9 246.4 107.1 245.4 110.2C244.5 113.1 243.5 113.6 240.7 112.2C235 109.5 229.1 108.3 222.8 108.7C221.2 108.8 219.6 109 218 109.7C212.6 112.1 211.7 118 216.3 121.7C218.6 123.6 221.3 124.9 224 126.1C228.8 128.1 233.6 130 238.1 132.5C252.6 140.5 256.5 158.7 246.3 171.1C242.6 175.6 237.8 178.6 232.2 180.1C229.8 180.8 228.7 182 228.8 184.6C228.9 187.1 228.8 189.6 228.8 192.1C228.8 194.3 227.7 195.5 225.5 195.6C222.8 195.7 220.1 195.7 217.5 195.6C215.1 195.6 214 194.2 214 191.9C214 190.1 214 188.3 214 186.4C214 182.4 213.8 182.2 210 181.6C205.1 180.8 200.2 179.7 195.7 177.5C192.1 175.8 191.8 174.9 192.8 171.2C193.6 168.4 194.3 165.7 195.2 162.9C196.2 159.7 197.1 159.3 200 160.8C205 163.4 210.3 164.9 215.9 165.6C219.5 166 223 165.7 226.3 164.2C232.5 161.5 233.5 154.3 228.2 150C226.4 148.5 224.4 147.4 222.3 146.5C216.9 144.1 211.2 142.3 206 139.2C197.7 134.2 192.4 127.4 193 117.2C193.7 105.7 200.2 98.6 210.7 94.8C215 93.2 215.1 93.3 215.1 88.8C215.1 87.3 215.1 85.7 215.1 84.2C215.2 80.8 215.8 80.2 219.2 80.1C220.3 80.1 221.3 80.1 222.4 80.1C229.6 79.8 229.6 79.8 229.7 87.1ZM368.4 137.6C368.4 150.5 357.9 161 345 161C332.1 161 321.6 150.5 321.6 137.6C321.6 124.7 332.1 114.2 345 114.2C357.9 114.2 368.4 124.7 368.4 137.6ZM99.5 114.2C112.4 114.2 122.9 124.7 122.9 137.6C122.9 150.5 112.4 161 99.5 161C86.6 161 76.1 150.5 76.1 137.6C76.1 124.7 86.6 114.2 99.5 114.2ZM0 236.7V38.5C0 17.3 17.3 0 38.5 0H406C427.2 0 444.5 17.3 444.5 38.5V160H411.6V80.1C408.5 80.9 405.3 81.3 402 81.3C380.5 81.3 363 63.8 363 42.3C363 39 363.4 35.8 364.2 32.8H78.1C78.5 35.1 78.8 37.5 78.8 40C78.8 61.5 61.3 79 39.8 79C37.5 79 35.2 78.8 33 78.4V196.8C35.2 196.4 37.5 196.2 39.8 196.2C61.3 196.2 78.8 213.7 78.8 235.2C78.8 237.7 78.6 240 78.1 242.4H306.6V275.3H38.6C17.3 275.2 0 257.9 0 236.7ZM439.6 247.6C442.3 247.6 444.5 249.8 444.5 252.5V270.3C444.5 273 442.3 275.2 439.6 275.2H321.6C318.9 275.2 316.7 273 316.7 270.3V252.5C316.7 249.8 318.9 247.6 321.6 247.6H439.6ZM462.5 236.5H344.5C341.8 236.5 339.6 234.3 339.6 231.6V213.8C339.6 211.1 341.8 208.9 344.5 208.9H462.5C465.2 208.9 467.4 211.1 467.4 213.8V231.6C467.4 234.3 465.2 236.5 462.5 236.5ZM490.2 175.1V192.9C490.2 195.6 488 197.8 485.3 197.8H367.3C364.6 197.8 362.4 195.6 362.4 192.9V175.1C362.4 172.4 364.6 170.2 367.3 170.2H485.3C488 170.2 490.2 172.4 490.2 175.1Z"
                                    fill="#7C8DB5" />
                            </svg>
                            <span> {{ __('Finance') }} </span>
                        </a>
                    </li>

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
