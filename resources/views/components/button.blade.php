{{-- Defaults for the component variables --}}
@props(['text', 'size' => 'md', 'variant' => 'primary'])

@php
    $cssSize = match ($size) {
        'sm' => 'px-2 py-.5 rounded shadow ',
        'lg' => 'px-6 py-2 rounded-3xl shadow-secondary shadow-3xl ',
        'xl' => 'px-8 py-3 rounded-4xl shadow-secondary shadow-4xl',
        default => 'px-4 py-1 rounded-2xl shadow-secondary shadow-2xl', // default = md
    };

    $cssVariant = match ($variant) {
        'secondary' => 'bg-gray-400 text-white',
        'success' => 'bg-green-400 text-white',
        'danger' => 'bg-red-400 text-white',
        'outline-success' => 'bg-transparent text-green-400 border border-green-400 hover:bg-green-100',
        'outline-secondary' => 'bg-transparent text-gray-400 border border-gray-400 hover:bg-gray-100',
        'outline-primary' => 'bg-transparent text-blue-400 border border-blue-400 hover:bg-blue-100',
        'outline-danger' => 'bg-transparent text-red-400 border border-red-400 hover:bg-red-100',
        default => 'bg-blue-400 text-white', // default = primary
    };
@endphp

<button class=" {{ $cssSize }} {{ $cssVariant }}">
    {{ $text }}
</button>
