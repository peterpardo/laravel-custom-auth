@props(['color' => 'success'])

@php
    $alertColor = 'bg-green-50 dark:text-green-400 text-green-800';
    switch ($color) {
        case 'error':
            $alertColor = 'bg-red-50 dark:text-red-400 text-red-800';
            break;
        case 'info':
            $alertColor = 'bg-blue-50 dark:text-blue-400 text-blue-800';
            break;
        case 'warning':
            $alertColor = 'bg-yellow-50 dark:text-yellow-400 text-yellow-800';
            break;
        case 'light':
            $alertColor = 'bg-gray-50 dark:text-gray-400 text-gray-800';
            break;
    }
@endphp

<div
    role="alert"
    {{ $attributes->merge(['class' => 'mb-4 rounded-lg p-4 text-sm dark:bg-gray-800 ' . $alertColor]) }}
>
    {{ $slot }}
</div>
