@props(['highlight' => false])

{{-- <div class="card"> --}}
<div @class(['highlight' => $highlight, 'card'])>
    @if($highlight)
        <p>highlight is {{ $highlight }}</p>
    @endif
    {{ $slot }}
    {{-- <a href="{{ $attributes->get('href') }}" class="btn">View Details</a> --}}
    {{-- or --}}
    <a {{ $attributes }}" class="btn">View Details</a>
</div>