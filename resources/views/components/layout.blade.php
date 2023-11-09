<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }} - Controle de Séries</title>
    @vite(['resources/sass/app.scss','resources/js/app.js'])
</head>
<body>
    <h1>{{ $title }}</h1>
    {{ $slot }}
</body>
</html>