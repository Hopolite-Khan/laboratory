@extends('layouts.app')
@section('style')
    <style>
        svg.w-5.h-5 {
            width: var(--size);
            height: var(--size);
            --size: 1rem;
        }
    </style>
@endsection
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
                <img src="{{ asset('images/paper.svg') }}" alt="" />
                All Availabile Reservations
            </h5>
            <div>
                <a href="{{ route('ReservationsRegistration') }}" class="btn btn-outline-primary  my-2" title=" ">
                    <x-plus />
                    Reservation
                </a>
            </div>
        </div>
    </div>

    <div class="card mb-5 shadow " style="background-color:">
        <div class="card-body table-responsive">

            <table class="table bg-white" id="searchTab">
                <tr class="bg-brand text-white bg-primary">
                    <th>ID</th>
                    <th>Test</th>
                    <th>Name</th>
                    <th>Mobile</th>
                    <th>Date</th>
                    <th>Identity</th>
                    <th>Country</th>
                    <th>Gender</th>
                    <th>Action</th>
                </tr>
                @foreach ($reservations as $reserve)
                    <tr>
                        <td>{{ $reserve->id }} </td>
                        <td>{{ $reserve->labTest->test_name }} </td>
                        <td>{{ $reserve->patient->full_name }} </td>
                        <td>{{ $reserve->patient->mobile }} </td>
                        <td>{{ $reserve->reservation_date }} </td>
                        <td>{{ $reserve->patient->id_type }} </td>
                        <td>{{ $reserve->patient->nationality }} </td>
                        <td>{{ $reserve->patient->gender }} </td>
                        <td>
                            <a href="" class="btn btn-danger">
                                <x-remove />
                            </a>
                        </td>
                    </tr>
                @endforeach
            </table>
            {{ $reservations->links() }}
        </div>
    </div>
@endsection
