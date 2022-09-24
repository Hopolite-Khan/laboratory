<nav class="container navbar navbar-expand-lg navbar-primary bg-primary d-flex flex-column p-0">
    <ul class="topbar d-flex justify-content-between w-100 py-3">
        <li><img src="{{ asset('img/logo-white.png')}}" class="h-w" style="--h: 2rem;--w:auto"/></li>
        <li>
            <ul class="d-flex gap-3">
                <li class="form-group position-relative has-icon-right text-primary">
                    <input type="search" placeholder="{{ __('home.search')}}" class="form-control rounded-pill shadow p h-w border-0" style="--pr: 2rem; --pl: 1rem; --h: 2rem;" />
                    <div class="form-control-icon">
                        @svg('icons/search')
                    </div>
                </li>
                <li>
                    <a href="/cart">@svg('icons/cart4', ['width' => '2rem', 'height' => '2rem', 'fill' => '#fff'])</a>
                </li>
                <li>
                    <a href="/notification">@svg('icons/bell-fill', ['width' => '2rem', 'height' => '2rem', 'fill' => '#fff'])</a>
                </li>
                <li>
                    <button>@svg('icons/list', ['width' => '2rem', 'height' => '2rem', 'fill' => '#fff'])</button>
                </li>
            </ul>
        </li>
    </ul>
    <ul class="bottombar position-relative d-flex justify-content-center h-w full-bleed py-2 bg-dark-primary text-white" style="--w: 100%;">
        <li class="position-absolute end-0">
            @svg('icons/house-fill', ['width' => '2rem', 'height' => '2rem', 'fill' => '#fff'])
        </li>
        <li>
            <a href="/pcr-test" class="reset d-grid flow items" style="--f: row;">
                <span>@svg('pcr_test', ['width' => '2rem', 'height' => '2rem'])</span>
                <span class="fs" style="--fs: .8rem;">{{__('home.pcr')}}</span>
            </a>
        </li>
        <li>
            <a href="/offers" class="reset d-grid flow items" style="--f: row;">
                <span>@svg('icons/fire', ['width' => '2rem', 'height' => '2rem'])</span>
                <span class="fs" style="--fs: .8rem;">{{__('home.offers')}}</span>
            </a>
        </li>
        <li>
            <a href="/hospitals" class="reset d-grid flow items" style="--f: row;">
                <span>@svg('hospital', ['width' => '2rem', 'height' => '2rem'])</span>
                <span class="fs" style="--fs: .8rem;">{{__('home.providers')}}</span>
            </a>
        </li>
        <li>
            <a href="/homevisit" class="reset d-grid flow items" style="--f: row;">
                <span>@svg('hospital', ['width' => '2rem', 'height' => '2rem'])</span>
                <span class="fs" style="--fs: .8rem;">{{__('home.home visit')}}</span>
            </a>
        </li>
    </ul>
</nav>
