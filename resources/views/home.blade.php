@extends('layouts.app')
@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div x-data="{ open: false }">
                        <button @click="open = !open" class="btn">Expand</button>
                        <span x-show="open">
                          Content...
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
