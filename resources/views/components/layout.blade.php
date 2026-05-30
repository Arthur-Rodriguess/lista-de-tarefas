<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <link rel="icon" type="image/svg" href="/clipboard.svg">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-light">
<div class="container">
    <div class="d-flex justify-content-between align-items-center mt-3 mb-3">
        <a href="/tasks" class="text-decoration-none text-black">
            <h1 class="fw-semibold">{{ $title }}</h1>
        </a>

        {{ $headerActions ?? '' }}
    </div>
    {{ $slot }}
</div>
</body>
</html>