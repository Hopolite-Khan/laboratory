@extends('layouts.main')
@section('content')
    <section class="hero">
        <figure class="align-full en">
            <img src="{{ asset('/img/main-bg.jpg') }}" alt="main-hero" class="w-100" />
        </figure>

        <div class="position-absolute top-0 end-0 pt-5 w-100 pb-5 d-flex flex-column">
            <div class="pt-4 pb-4"></div>
            <h2 class="text-light-primary mb-4">{!! __('home.hero title') !!}</h2>
            <h5 class="text-secondary mb-3">{!! __('home.hero description') !!}</h5>
            <div><button class="btn btn-primary br-tl-br shadow text-capitalize">{{ __('home.covid-19 offers') }}</button></div>
            <div class="pt-4 pb-4"></div>
        </div>
    </section>
    <section class="d-flex flex-column gap-2 pb-5 pt-3">
        <div class="d-flex">
            <h4 class="funcy-title py-1 px-3">
                {{ __('home.book now') }}
            </h4>
        </div>
        <ul class="row">
            <li class="col-md-6 col-lg-4 mb-3">
                <x-book title="{{ __('home.covid-19 PCR') }}" description="{{ __('home.covid-19 PCR p') }}" feature="{{ asset('/img/covid-box-3-rtl.jpg') }}"/>
            </li>
            <li class="col-md-6 col-lg-4 mb-3">
                <x-book title="{{ __('home.packages checkups') }}" description="{{ __('home.packages checkups p') }}" feature="{{ asset('/img/packages-box-rtl.jpg') }}"/>
            </li>
            <li class="col-md-6 col-lg-4 mb-3">
                <x-book title="{{ __('home.individual tests') }}" description="{{ __('home.individual tests p') }}" feature="{{ asset('/img/tests-box-rtl.jpg') }}"/>
            </li>
        </ul>
    </section>
    <section class="row py-5 align-items-center border-bottom border-top">
        <div class="col-md-8">
            <div class="rounded-4 shadow overflow-hidden ">
                <img src="{{ asset('img/smart-report.png') }}" />
            </div>
        </div>
        <article class="col-md-4">
            <h3 class="text-light-primary">
                {{ __('home.your result') }}
            </h3>
            <h4>{!! __('home.book your tests') !!}</h4>
            <h6>
                {!! __('home.to get our') !!}
            </h6>
        </article>
    </section>
    <section class="d-block py-5 border-bottom">
        <div class="d-flex">
            <h4 class="funcy-title py-1 px-3">
                {{ __('home.check your health') }}
            </h4>
        </div>

        <div class="col-md-6 col-lg-4 mb-3">
            <div class="card d-block border-0 shadow rounded-3 h-100 position-relative">
                <div class="position-absolute top-0 en overflow-hidden h-100 w-100 rounded-3">
                    <img src="{{ asset('/img/checkout-bg.png') }}" class="img-fluid" alt="" />
                </div>
                <div class="d-block position-relative p-3">
                    <button class="heart-btn">
                        @svg('icons/heart-fill', ['width' => '1.5rem', 'height' => '1.5rem'])
                    </button>
                    <h5 class="mt-3"><b>{{ __('home.vitamins minerals package') }}</b></h5>
                    <h6 class="w-50 mb-2">{{ __('home.for our opening') }}</h6>
                    <div class="d-flex text-warning mb-3 mt-4">
                        <div class="d-block border-bottom border-warning">
                            <div class="text-secondary opacity-50 h8 text-tight" style="line-height: 3px">{{ __('home.min price') }}</div>
                            <div>
                                <span class="h4 fw-bold">550</span> <span class="h7">{{ __('home.sar') }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-row-reverse position-absolute w-100 bottom-0 start-0 p-2">
                        <button class="btn btn-primary rounded-pill pulse-button py-1">
                            {{ __('home.book now') }}
                            @svg('icons/chevron-left', 'en')
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="labs" class="py-5">
        <div class="d-flex justify-content-between text-capitilize">
            <div class="d-flex">
                <h4 class="funcy-title py-1 px-3">
                    {{ __('home.labs') }}
                </h4>
            </div>
            <a class="text-secondary link-secondary" href="/labs">{{ __('home.view all') }} @svg('icons/chevron-left', 'en')</a>
        </div>
        <ul>
            @foreach ($labs as $lab)

            <li>
                {{$lab['title']}}
            </li>
            @endforeach
        </ul>
    </section>
@endsection
