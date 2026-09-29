<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Aplikasi Perpustakaan')</title>
</head>
<body>
    {{-- Partial Navbar --}}
    @include('partials.navbar')
    <div class="container mt-4">
        {{-- Partial Alert untuk Flash Message --}}
        @include('partials.alert')
        {{-- Konten Utama --}}
        @yield('content')
    </div>
</body>
</html>