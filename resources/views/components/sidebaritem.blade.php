<li @class([
    'sidebar-item',
    'active' => Route::currentRouteName() === $route,
    'has-sub' => isset($children) === true,
])>
    @if (!isset($children))
        <a href="{{ route($route) }}" class='sidebar-link'>
            <i class="bi bi-grid-fill"></i>
            <span>{{ __($title) }}</span>
        </a>
    @else
        {{ $slot }}
    @endif
</li>
