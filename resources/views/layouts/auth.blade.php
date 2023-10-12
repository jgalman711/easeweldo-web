<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @yield('seo', View::make('partials.default-seo'))
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="icon" href="/favicon.ico" type="image/x-icon">
        @yield('js-top')
    </head>
    <body class="bg-white">
        <div class="min-h-screen flex flex-col items-center justify-start bg-gray-100 bg-opacity-50 py-16">
            @yield('content')
        </div>
        @yield('js-bottom')
    </body>
    <footer class="absolute bottom-0 w-full">
        <div class="w-full mx-auto max-w-screen-2xl p-4 text-center">
            <span class="text-sm text-gray-800 sm:text-center">© 2023 <a href="{{ url('/') }}" class="hover:underline">Easeweldo™</a>. All Rights Reserved.
            </span>
            {{-- Ready lang
            <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-100 dark:text-gray-100 sm:mt-0">
                <li>
                    <a href="#" class="mr-4 hover:underline md:mr-6 ">About</a>
                </li>
                <li>
                    <a href="#" class="mr-4 hover:underline md:mr-6">Privacy Policy</a>
                </li>
                <li>
                    <a href="#" class="mr-4 hover:underline md:mr-6">Licensing</a>
                </li>
                <li>
                    <a href="#" class="hover:underline">Contact</a>
                </li>
            </ul>
            --}}
        </div>
    </footer>
</html>
