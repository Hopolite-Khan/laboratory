@extends('layouts.main')
@section('content')
    <section class="hero">
        <figure class="align-full">
            <img src="{{ asset('/img/main-bg.jpg') }}" alt="main-hero" class="w-100" />
        </figure>

        <div class="position-absolute top-0 end-0 pt-5 w-100 pb-5 d-flex flex-column">
            <div class="pt-4 pb-4"></div>
            <h2 class="text-light-primary col-3">أهلا بك في بلازما
                منصة الفحوصات الأضخم</h2>
            <p class="col-4">تقدم لك منصة بلازما اسهل طريقة لحجز فحص كوفيد-19 الاقرب اليك
                و ايجاد افضل الاسعار المناسبة لك</p>
            <div><button class="btn btn-primary rounded-pill">عروض کوفید-19</button></div>
            <div class="pt-4 pb-4"></div>
        </div>
    </section>
    <section class="d-flex flex-column gap-2 pb-5 pt-3 border-bottom">
        <h4 class="text-primary">
            احجز الآن
        </h4>
        <ul class="d-flex gap-3">
            <li class="card d-block border-0 shadow p-3 rounded-3 w-100 h-100 position-relative bg-position-center "
                style="background-image: url({{ asset('/img/covid-box-3-rtl.jpg') }})">
                <button class="heart-btn">
                    @svg('icons/heart-fill', ['width' => '1.5rem', 'height' => '1.5rem'])
                </button>
                <h5 class="fw-bold mt-3">فحص كورونا PCR</h5>
                <p class="col-6 h7 mb-4">احجز الان فحص كورونا PCR الأقرب
                    اليك بأفضل سعر</p>
                <button class="btn btn-primary rounded-pill pulse-button">
                    احجز الآن
                    @svg('icons/chevron-left')
                </button>
            </li>
            <li class="card d-block border-0 shadow p-3 rounded-3 w-100 position-relative bg-position-center "
                style="background-image: url({{ asset('/img/packages-box-rtl.jpg') }})">
                <button class="heart-btn">
                    @svg('icons/heart-fill', ['width' => '1.5rem', 'height' => '1.5rem'])
                </button>
                <h5 class="fw-bold mt-3">الباقات و العروض</h5>
                <p class="col-6 h7 mb-4">اختر من العديد من الباقات الطبية
                    المخصصة لصحتك</p>
                <button class="btn btn-primary rounded-pill pulse-button">
                    احجز الآن
                    @svg('icons/chevron-left')
                </button>
            </li>
            <li class="card d-block border-0 shadow p-3 rounded-3 w-100 position-relative bg-position-center "
                style="background-image: url({{ asset('/img/tests-box-rtl.jpg') }})">
                <button class="heart-btn">
                    @svg('icons/heart-fill', ['width' => '1.5rem', 'height' => '1.5rem'])
                </button>
                <h5 class="fw-bold mt-3">التحاليل الفردية</h5>
                <p class="col-6 h7 mb-4">
                    احجز جميع تحاليلك عن طريق
                    بلازما بأسعار منافسة
                </p>
                <button class="btn btn-primary rounded-pill pulse-button">
                    احجز الآن
                    @svg('icons/chevron-left')
                </button>
            </li>
        </ul>
    </section>
    <section>
        test
    </section>
@endsection
