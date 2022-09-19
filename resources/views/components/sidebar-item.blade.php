<li @class([ 'sidebar-item', 'active' => Route::currentRouteName() === $route, 'has-sub' => $children ])>
    
    @if (!$children)
        <a href="{{ route($route) }}" class='sidebar-link'>
            @if ($icon)
                @svg($icon, 's-1')
            @else
                <i class="bi bi-grid-fill"></i>
            @endif
            <span>{{ __($title) }}</span>
        </a>
    @else
        @if ($active)
            true
        @endif
        {{ $slot }}
    @endif
</li>
