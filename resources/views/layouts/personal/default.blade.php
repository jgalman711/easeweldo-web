<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title', 'Easeweldo')</title>
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </head>
    <body class="bg-cover bg-center bg-no-repeat h-screen flex justify-center bg-gray-100">
        <div class="max-w-md w-full">
            <header class="bg-blue-400 text-white p-4">
                <div class="flex items-center">
                    @if(View::hasSection('back_url'))
                    <a href="@yield('back_url')" class="pt-1 absolute text-white hover:underline">
                        < back
                    </a>
                    @endif
                    <div class="text-center flex-grow">
                        @yield('header')
                    </div>
                </div>
            </header>
            <div class="content">
                @yield('content')
            </div>
            <div class="py-8"></div>
                <div class="fixed bottom-0 left-0 right-0 bg-blue-400 flex justify-around p-1.5">
                    <a href="dashboard">
                        <div class="text-white text-center p-1">
                            <img src="{{ url('assets/images/personal/menu/1.png') }}" alt="Home Icon" class="w-auto h-6 mb-2 mx-auto">
                            <p class="text-xs">Home</p>
                        </div>
                    </a>
                    <a href="dashboard">
                        <div class="text-white text-center p-1">
                            <img src="{{ url('assets/images/personal/menu/2.png') }}" alt="QR Scan Icon" class="w-auto h-6 mb-2 mx-auto">
                            <p class="text-xs">QR Scan</p>
                        </div>
                    </a>
                    <a href="dashboard">
                        <div class="text-white text-center p-1">
                            <img src="{{ url('assets/images/personal/menu/3.png') }}" alt="Profile Icon" class="w-auto h-6 mb-2 mx-auto">
                            <p class="text-xs">Profile</p>
                        </div>
                    </a>
                </div>
            </a>
        </div>
        @yield('js-bottom')
    </body>
</html>
