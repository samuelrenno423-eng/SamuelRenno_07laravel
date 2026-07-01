<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca Gestionale</title>
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>
<body>

    @include('partials.navbar')

    <main class="container mt-5">
        @yield('content')
    </main>

</body>
</html>