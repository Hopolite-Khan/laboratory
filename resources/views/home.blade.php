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
                    <button onclick="test">hello try </button>
                    <div  x-data='{ open: false}'>
                        <button class="btn btn-primary" @click="open = !open">open</button>
                        <div x-show="open">
                            content and article try
                        </div>
                        @svg('rings')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
