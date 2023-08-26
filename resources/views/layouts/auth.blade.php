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
    <body class="bg-cover bg-center bg-no-repeat" style="background-image: url('assets/images/auth/background.png')">
        <div class="min-h-screen flex flex-col items-center justify-start bg-gray-100 bg-opacity-50 py-16">
            <div class="mb-8 text-left">
                <h1 class="font-bold text-5xl">
                    <a href="/"><img src="assets/images/easeweldo-logo.png" alt="Easeweldo Logo" class="h-8 w-auto"></a>
                </h1>
            </div>
            <div class="w-full max-w-md p-8 bg-white bg-opacity-90 rounded-lg shadow-md">
                @yield('content')
            </div>
        </div>
        @yield('js-bottom')
    </body>
</html>
