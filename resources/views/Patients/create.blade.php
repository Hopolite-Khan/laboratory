@extends('layouts.app')
@push('styles')
    <style>
        .dropdown-menu {
            min-height: 3rem;
            max-height: 10rem;
            overflow: auto;
            width: calc(100% - 6%);
        }
    </style>
@endpush
@section('content')
    <div class="card mb-3 shadow">
        <div class="card-body d-flex justify-content-between">
            <h5 class="my-2">
                Patinets {{ isset($patient) ? 'Update': 'Registeration'}} Form
            </h5>
            <div>
                <a href="{{ route('GetPatient') }}" class="btn btn-outline-primary  my-1" title=" ">
                    Back
                </a>
            </div>
        </div>
    </div>

    <div class="card mt-4 mb-5 shadow ">
        <div class="card-body">
            <form action="{{ route('StorePatient') }}" method="post">
                {{-- <input name="_method" type="hidden" value="PUT"> --}}
                @csrf
                @include('Patients.form')
            </form>

        </div><!-- END OF Card-body -->
    </div>
@endsection
