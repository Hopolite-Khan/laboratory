@extends('layouts.main')
@section('content')
    <section>
        {{ __('welcome') }}
        <x-alert children="test">hello</x-alert>
        <div x-data="{open: false}">
            <button @click="open = !open">open</button>
            <div x-show="open">content</div>
        </div>
    </section>
    <script>
        console.log(test);
        const data = axios.get("{{route('api.patients')}}").then(res => res.data)
        console.log(data);
    </script>
@endsection
