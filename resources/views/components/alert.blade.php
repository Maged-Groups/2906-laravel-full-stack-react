@props(['variant'])


{{-- Tailwind Alert --}}
@php
    $cssVariant = match ($variant) {
        'danger' => 'bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative',
        'success' => 'bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative',
        default => 'bg-blue-100 border border-blue-400 text-blue-700 px-4 py-3 rounded relative',
    };
@endphp

<div class="{{ $cssVariant }}">
    {{ $slot }}
</div>
