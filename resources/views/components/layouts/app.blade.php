<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? env("APP_NAME") }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-white max-w-[1024px] container mx-auto flex flex-col gap-5">
    <livewire:header.Header/>
    {{ $slot }}
</body>
</html>
