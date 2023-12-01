<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplicacion - @yield('title')</title>
    <meta name="description" content="@yield('meta-description', 'Default meta description')">
</head>
<body>

    <!-- this layout is for login users -->

    @include('partials.nav')

    @if (session('status'))
        
        <div class="status">{{ session('status') }}</div>

    @endif

    <!-- Aqui se deberia empezar la plantilla -->
    @yield('content') 

    @include('partials.footer')

</body>
</html>
