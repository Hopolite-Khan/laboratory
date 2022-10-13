<li @class([
    'sidebar-item',
    'active' => Route::currentRouteName() === $route,
    'has-sub' => !empty($children),
])>
    @if (empty($children))
        <a href="{{ route($route) }}" class='sidebar-link'>
            @isset($icon)
                @svg($icon)
            @endisset
            <span>{{ __($title) }}</span>
        </a>
    @else
        {{ $slot }}
    @endif
</li>
