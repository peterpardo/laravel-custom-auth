<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1"
    >

    <title>Laravel Custom Authentication</title>

    <link
        href="https://fonts.bunny.net"
        rel="preconnect"
    >
    <link
        href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap"
        rel="stylesheet"
    />
    <script
        defer
        src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"
    ></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="h-screen antialiased">
    {{ $slot }}
</body>

</html>
