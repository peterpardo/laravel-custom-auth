@props(['type' => 'button', 'color' => 'primary'])

@php
    $buttonColor = 'bg-indigo-600 hover:bg-indigo-500';
    if ($color === 'secondary') {
        $buttonColor = 'bg-slate-600 hover:bg-slate-500';
    }
@endphp

@if (!$attributes->has('href'))
    <button
        {{ $attributes->merge(['class' => 'flex justify-center rounded-md px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm ' . $buttonColor]) }}
    >
        {{ $slot }}
    </button>
@else
    <a
        {{ $attributes->merge(['class' => 'flex justify-center rounded-md px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm ' . $buttonColor]) }}>
        {{ $slot }}
    </a>
@endif
