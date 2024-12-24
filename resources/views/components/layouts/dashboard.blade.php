<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ??  __('Панель администратора') }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased bg-white max-w-[1024px] min-h-screen container mx-auto flex flex-col gap-5">
<livewire:header.Header/>

<div class="flex gap-5 flex-1 pb-5">
    <div class="w-64 flex flex-col gap-5">
        <livewire:dashboard.Navigation />
    </div>
    <div class="border border-gray-100 rounded-lg w-full flex py-4 px-5 bg-gray-100">{{ $slot }}</div>
</div>
</body>
</html>
