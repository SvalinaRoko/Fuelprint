<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,200..800&display=swap" rel="stylesheet">
    <title>@yield('title', 'Fuelprint')</title>
    @stack('styles')
</head>

<body>
    @if (!($hideNav ?? false))
    @include('partials.header')
    @endif

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

    @stack('scripts')
</body>

</html>