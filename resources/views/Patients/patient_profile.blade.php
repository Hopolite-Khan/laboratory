@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-body fs-5 fw-bold d-flex justify-content-between">
            <span>{{ __('Patient Profile') }}</span>
            <span>
                <a href="{{ route('PrintPatientsBarcode', ['id' => $patient->id]) }}" class="btn btn-sm btn-primary">Print
                    Barcode</a>
            </span>
        </div>
    </div>

    <div class="row">
        <div class="col-6 col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body px-3 py-4-5">
                    <div class="row">
                        <div class="col-md-4 px-2">
                            <div class="stats-icon purple">
                                @svg('payment-card')
                            </div>
                        </div>
                        <div class="col-md-8 p-0">
                            <h6 class="text-muted font-semibold">Payment Method</h6>
                            <h6 class="font-extrabold mb-0">cash</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body px-3 py-4-5">
                    <div class="row">
                        <div class="col-md-4 px-2">
                            <div class="stats-icon blue">
                                @svg('dollar-sign')
                            </div>
                        </div>
                        <div class="col-md-8 p-0">
                            <h6 class="text-muted font-semibold">Paid Amount</h6>
                            <h6 class="font-extrabold mb-0">{{ number_format($patient->reservations->sum('paid'), 2) }}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6 col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body px-3 py-4-5">
                    <div class="row">
                        <div class="col-md-4 px-2">
                            <div class="stats-icon green">
                                @svg('bookmark')
                            </div>
                        </div>
                        <div class="col-md-8 p-0">
                            <h6 class="text-muted font-semibold">Reservation</h6>
                            <h6 class="font-extrabold mb-0">{{ $patient->reservations->count() }}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-6 col-lg-3 col-md-6">
            <div class="card">
                <div class="card-body px-3 py-4-5">
                    <div class="row">
                        <div class="col-md-4 px-2">
                            <div class="stats-icon red">
                                @svg('refund')
                            </div>
                        </div>
                        <div class="col-md-8 p-0">
                            <h6 class="text-muted font-semibold"> Refund </h6>
                            <h6 class="font-extrabold mb-0">0</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between ">
                    <h4 class="card-title fw-bold fs-5"> Patient Information</h4>
                    <div class="badge bg-dark badge-pill badge-round ">{{ $patient->status }}</div>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span> {{ $patient->full_name }} </span>
                            <span class="badge bg-dark badge-pill badge-round ml-1">Full Name</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span> {{ $patient->id }} </span>
                            <span class="badge bg-dark badge-pill badge-round ml-1">ID</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span> {{ $patient->mobile }} </span>
                            <span class="badge bg-dark badge-pill badge-round ml-1">Mobile</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span> {{ $patient->gender }} </span>
                            <span class="badge bg-dark badge-pill badge-round ml-1">Gender</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span> {{ $patient->country }} </span>
                            <span class="badge bg-dark badge-pill badge-round ml-1">Country</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span> {{ $patient->passport_id }} </span>
                            <span class="badge bg-dark badge-pill badge-round ml-1">Passport</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span> {{ $patient->id_type }} </span>
                            <span class="badge bg-dark badge-pill badge-round ml-1">ID Type</span>
                        </li>

                    </ul>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mb-0 ">
            <div class="card mb-3 ">
                <div class="card-body   ">
                    <ul class="list-group ">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span> {{ $patient->hospital->name }} </span>
                            <span class="badge bg-dark badge-pill badge-round ml-1">Hospital Name</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span> {{ $patient->hospital->address }} </span>
                            <span class="badge bg-dark badge-pill badge-round ml-1">Address</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span> {{ $patient->hospital->landmark }} </span>
                            <span class="badge bg-dark badge-pill badge-round ml-1">Landmark</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <span> {{ $patient->hospital->status }} </span>
                            <span class="badge bg-dark badge-pill badge-round ml-1">Status</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="card ">
                <div class="card-body fs-5 fw-bold  ">
                    <div class="text-center">
                        <div class="mb-1"><?php echo '<img src="data:image/png;base64,' . DNS1D::getBarcodePNG("{$patient->mobile}", 'C39+', 1, 40) . '" alt="barcode"   />'; ?> </div>
                        <div style="font-size:12px;"> {{ $patient->mobile }} / DOB: {{ $patient->dob }} </div>
                        <div class="fs-3">{{ $patient->full_name }} </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="card mb-5 shadow ">
            <div class="card-body  table-responsive    ">

                <table class="table bg-white" id="searchTab">
                    <tr style=" background-color:#4a3aae; color:white;   font-weight:bold;   ">
                        <th>Test ID</th>
                        <th>Test Type</th>
                        <th>Test Name</th>
                        <th>Test Price</th>
                        <th>Payment Method</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>

                    @foreach ($reservations as $item)
                        <tr>
                            <td>{{ $item->labTest->id }} </td>
                            <td>{{ $item->labTest->test_type }} </td>
                            <td>{{ $item->labTest->test_name }} </td>
                            <td>{{ $item->labTest->test_price }} </td>
                            <td>{{ $item->labTest->payment_method }} </td>
                            <td>{{ $item->status }}</td>
                            <td>
                                <a href="#" class="btn btn-dark btn-sm ">
                                    @svg('print')
                                    Print
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </table>

            </div>
        </div>
    @endsection
