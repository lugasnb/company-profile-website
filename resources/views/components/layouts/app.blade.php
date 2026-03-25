<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'NexaStudio — Creative Digital Agency' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="bg-white text-gray-800 font-sans">

    {{-- NAVBAR --}}
    @include('layouts.navbar')

    {{-- KONTEN HALAMAN --}}
    <main>
        {{ $slot }}
    </main>

    {{-- FOOTER --}}
    @include('layouts.footer')

    @livewireScripts
</body>
</html>