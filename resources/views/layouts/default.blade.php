<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @yield('seo', View::make('partials.default-seo'))
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="icon" href="/favicon.ico" type="image/x-icon">
        @yield('js-top')
    </head>
    <body class="antialiased">
        <header class="bg-white shadow">
            <div class="mx-auto flex items-center justify-between p-10 es-navbar">
                <div class="flex items-center">
                    <img src="assets/images/easeweldo-logo.png" alt="Easeweldo Logo" class="h-8 w-auto">
                </div>
                <nav>
                    <ul class="flex space-x-12">
                        <li class="py-2"><a href="#pricing" class="text-xl font-medium">Pricing</a></li>
                        <li class="py-2"><a href="#solutions" class="text-xl font-medium">Solutions</a></li>
                        <li class="py-2"><a href="#contact" class="text-xl font-medium">Contact</a></li>
                        @if (session()->has('access_token'))
                        <li><a href="logout" class="text-xl font-medium inline-block px-8 py-2 bg-blue-800 text-white rounded-full">Logout</a></li>
                        @else
                        <li><a href="login" class="text-xl font-medium inline-block px-8 py-2 bg-blue-800 text-white rounded-full">Login</a></li>
                        @endif
                    </ul>
                </nav>
            </div>
        </header>
        @yield('content')
    </body>
</html>
