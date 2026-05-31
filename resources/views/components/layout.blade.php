<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <link rel="icon" type="image/svg" href="/clipboard.svg">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/fonts.css') }}">
</head>
<body class="bg-light">
<div class="d-flex justify-content-between align-items-center px-3 py-3 mb-4 bg-secondary-subtle">
    <a href="/tasks" class="text-decoration-none text-black">
        <h1 class="fw-semibold text-dark font-big-shoulders mb-0">{{ $title }}</h1>
    </a>

    {{ $headerActions ?? '' }}
</div>
<div class="container">
    {{ $slot }}
</div>
</body>
</html>