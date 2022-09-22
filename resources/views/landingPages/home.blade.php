@extends('layouts.main')
@section('content')
<section>
    {{__('welcome')}}
    <x-alert children="test">hello</x-alert>
</section>
@endsection
