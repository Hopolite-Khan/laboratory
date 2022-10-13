@extends('layouts.app')
@push('styles')
    <style>
        .link {
            border-bottom: 2px dotted black;
        }

        .h-1 {
            --size: 2rem;
            height: var(--size);
            width: var(--size);
        }

        caption {
            caption-side: top;
        }
    </style>
@endpush
@section('content')
    <!-- Success message -->
    @if (Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
    @endif

    <div class="card mb-3 shadow">
        <div class="card-body d-flex flex-wrap justify-content-between">
            <h5 class="my-2">
                @svg('paper')
                Reservation List - Pending Tests
            </h5>
            <div>
                <a href="{{ route('ReservationsRegistration') }}" class="btn btn-outline-primary my-2 btn-flex" tooltip=" ">
                    @svg('plus')
                    Create Reservation
                </a>
            </div>
        </div>
    </div>

    <div class="card mb-5 shadow " style="background-color:">
        <div class="card-body table-responsive">

            <table class="table bg-white" id="searchTab">
                <thead>
                    <tr style=" background-color:#4a3aae; color:white;   font-weight:bold;   ">
                        <th>ID</th>
                        <th>Patient</th>
                        <th>Mobile No</th>
                        <th>Hospital</th>
                        <th>Paid Amount</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                @foreach ($patients as $item)
                    @if ($item->reservations && count($item->reservations) > 0)

                        <tbody x-data="{ open: false }" style="border: none !important;">
                            <tr>
                                <td> {{ $item->id }}</td>
                                <td>
                                    <a class="link" href="{{ route('PatientProfile', ['id' => $item->id]) }}">
                                        {{ $item->full_name }}
                                    </a>
                                </td>
                                <td>{{ $item->mobile }} </td>
                                <td>{{ $item->hospital->name }} </td>
                                <td>{{ $item->reservations  }} </td>
                                <td>{{ $item->status }} </td>
                                <td>
                                    <ul class="d-flex gap-1 list-unstyled m-0">
                                        <li>
                                            <button @click='open = !open' class="btn btn-outline-danger rounded-circle p-2 h-1 d-flex align-items-center">
                                                @svg('plus')
                                            </button>
                                        </li>
                                        <li>
                                            <a class="btn btn-outline-primary rounded-circle p-2 h-1 d-flex align-items-center" href="{{ route('PatientProfile', ['id' => $item->id]) }}">
                                                @svg('eye')
                                            </a>
                                        </li>
                                        <li>
                                            <a class="btn btn-outline-success rounded-circle p-2 h-1 d-flex align-items-center" href="{{ route('PatientRegistration', ['id' => $item->id]) }}">
                                                @svg('edit')
                                            </a>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr x-show="open">
                                <td colspan="7" style="border: none">
                                    <table class="table">
                                        <caption>Reservations list of {{ $item->full_name }} </caption>
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Test</th>
                                                <th>Date</th>
                                                <th>Paid</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($item->reservations as $i)
                                                <tr>
                                                    <td>{{ $i->id }}</td>
                                                    <td>{{ $i->labTest->test_name }}</td>
                                                    <td>{{ $i->reservation_date }}</td>
                                                    <td>{{ $i->paid }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    @endif
                @endforeach
            </table>
        </div>
    </div>
@endsection
