<div class="d-block shadow h-100 position-relative border-2 border-bottom bg-gradient-primary border-primary" >
    <div @class(['bg-primary h-1', ])></div>
    <div class="position-absolute top-0 en overflow-hidden multiply h-100 w-100 " >
        <img src="{{ $feature }}" class="h-100 w-100 " alt="" />
    </div>
    <div class="d-block position-relative p-3">
        <button class="heart-btn">
            @svg('icons/heart-fill', ['width' => '1.5rem', 'height' => '1.5rem'])
        </button>
        <h5 class="fw-bold mt-3 text-capitalize">{{ $title }}</h5>
        <p class="col-7 mb-4 h6 text-capitalize">{{ $description }}</p>
        <button class="btn btn-primary rounded-pill pulse-button py-1">
            {{ __('home.book now') }}
            @svg('icons/chevron-left', 'en')
        </button>
    </div>
</div>
