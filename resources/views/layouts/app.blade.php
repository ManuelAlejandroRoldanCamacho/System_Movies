<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <meta name="description" content="@yield('meta-description', 'Default meta description')">
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>
<body>
    
    @include('partials.nav')

    @if (session('status'))
        
        <div class="status alert alert-success alert-dismissible">

            <span class="text-center">{{ session('status') }}</span>

            <button class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

        </div>
        
    @endif

    @yield('content') 

    @include('partials.footer')

</body>
</html>
