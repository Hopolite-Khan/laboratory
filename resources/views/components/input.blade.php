@props([
    'id',
    'label',
    'type',
    'options',
    'value'
])
<div class="col-lg-4 col-md-4 col-sm-8 col-xs-12 mt-2">
    <label class="form-label text-capitalize" for={{ $id }}>{{ $label }}</label>
    @if ($type === 'select')
        <select {{ $attributes }} id="{{ $id }}" name="{{ $id }}">
            @foreach ($options as $option)
                <option value="{{ $option }}">{{ $option }}</option>
            @endforeach
        </select>
    @else
        <input type="{{ $type }}" value="{{ $value }}" id="{{ $id }}" name="{{ $id }}" {{ $attributes }} />
    @endif
    {{ $slot }}
</div>
