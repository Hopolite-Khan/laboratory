@extends('layouts.app')
@section('content')
    <!-- Success message -->
    @if (Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
    @endif

    <div class="card mb-3 shadow">
        <div class="card-body d-flex justify-content-between">
            <h5 class="my-2">
                <x-paper/>
                Reservation List - Pending Tests
            </h5>
            <div>
                <a href="{{ route('ReservationsRegistration') }}" class="btn btn-outline-primary my-2 btn-flex" title=" ">
                    <x-plus/>
                    Create Reservation
                </a>
            </div>
        </div>
    </div>




    <div class="card mb-5 shadow " style="background-color:">
        <div class="card-body  table-responsive    ">

            <table class="table bg-white" id="searchTab">
                <thead>
                    <tr style=" background-color:#4a3aae; color:white;   font-weight:bold;   ">
                        <th>ID</th>
                        <th>Patient</th>
                        <th>Mobile No</th>
                        <th>Hospital</th>
                        <th>Time </th>
                        <th>Paid Amount</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>


                    @foreach ($RESERVATIONS as $reserve)
                        <tr>
                            <td> {{ $reserve->id }} </td>
                            <td> <a style="border-bottom:2px dotted black;"
                                    href="{{ route('PatientProfile', ['id' => 9]) }}"> {{ $reserve->full_name }} </a>
                            </td>
                            <td>{{ $reserve->mobile }} </td>
                            <td> Zemens Medical Hospital </td>
                            <td>{{ $reserve->reservation_date }} </td>
                            <td>{{ $reserve->recieved_amount }} </td>
                            <td>{{ $reserve->status }} </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>



        </div>
    </div>










    </div>
@endsection
