@extends('layouts.app')
@push('styles')
    <style>
        .h-1 {
            --size: 2rem;
            height: var(--size);
            width: var(--size);
        }

        .bg-brand {
            background-color: #4a3aae;
            color: white;
            font-weight: bold;
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
        <div class="card-body d-flex justify-content-between">
            <h5 class="my-2">
                Patinets List
            </h5>
            <div>
                <a href="{{ route('PatientRegistration') }}" class="btn btn-outline-primary my-1" title=" ">
                    @svg('user-plus')
                    Register Patient
                </a>
            </div>
        </div>
    </div>

    <div class="card mb-5 shadow " style="background-color:">
        <div class="card-body  table-responsive    ">

            <table class="table bg-white" id="searchTab">
                <thead class="bg-brand">
                    <tr>
                        <th>Name</th>
                        <th>Mobile</th>
                        <th>ID Type</th>
                        <th>ID </th>
                        <th class="text-truncate">Nationality</th>
                        <th>DOB</th>
                        <th>Gender</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($PATIENTS as $item)
                        <tr>
                            <td>{{ $item->full_name }} </td>
                            <td>{{ $item->mobile }} </td>
                            <td>{{ $item->id_type }} </td>
                            <td>{{ $item->passport_id }} </td>
                            <td>{{ $item->nationality }} </td>
                            <td>{{ $item->dob }}</td>
                            <td>{{ $item->gender }} </td>
                            <td class="d-flex gap-1">
                                <a href="{{ route('PatientRegistration', ['id' => $item->id]) }}"
                                    class="btn btn-outline-warning rounded-circle p-2 h-1 d-flex align-items-center">
                                    @svg('edit')
                                </a>
                                <a href="{{ route('PatientProfile', ['id' => $item->id]) }}"
                                    class="btn btn-outline-success rounded-circle p-2 h-1 d-flex align-items-center">
                                    @svg('eye')
                                </a>
                                <form action="{{ route('DeletePatient', ['id' => $item->id]) }}" method="post">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" onClick="return confirm('are you sure you want to delete this?')"
                                        class="btn btn-outline-danger rounded-circle p-2 h-1 d-flex align-items-center">
                                        @svg('trash')
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
