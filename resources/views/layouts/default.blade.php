<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @yield('seo', View::make('partials.default-seo'))
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="icon" href="/favicon.ico" type="image/x-icon">
        @yield('js-top')
    </head>
    <body class="antialiased">
        <nav class="bg-gray-100 dark:bg-gray-900 fixed w-full z-20 top-0 left-0 border-b border-gray-200 dark:border-gray-600 shadow">
            <div class="max-w-screen-2xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="/" class="flex items-center">
                    <img src="{{ asset('assets/images/easeweldo-logo.png') }}" class="hidden md:block h-8 mr-3" alt="Easeweldo Logo">
                    <img src="{{ asset('assets/images/easeweldo-icon.png') }}" class="md:hidden h-9 mr-3" alt="Easeweldo Logo">
                    <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white"></span>
                </a>
                <div class="flex md:order-2">
                    @if(session('access_token'))
                    <a href="{{ route('logout') }}" class="hidden md:block text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-md text-md md:text-sm lg:text-lg px-4 py-2 text-center md:mr-3 w-28">
                        Logout
                    </a>
                    @else
                    <a href="{{ route('login.index') }}" class="hidden md:block text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-md text-md md:text-sm lg:text-lg px-4 py-2 text-center md:mr-3 w-28">
                        Login
                    </a>
                    @endif
                    <a href="{{ route('register.index') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-md text-md md:text-sm lg:text-lg p-2 text-center mr-3 md:mr-0 w-28">
                        Free Trial
                    </a>
                    <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="navbar-sticky" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                        </svg>
                    </button>
                </div>
                <div class="items-center justify-between hidden w-full md:flex md:w-auto" id="navbar-sticky">
                    <ul class="bg-gray-100 text-lg flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-4 lg:space-x-12 md:mt-0 md:border-0">
                        <li>
                            <a href="#" class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 text-sm md:text-sm lg:text-lg" aria-current="page">Home</a>
                        </li>
                        <li>
                            <a href="#solutions" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 text-sm md:text-sm lg:text-lg">Solutions</a>
                        </li>
                        <li>
                            <a href="#pricing" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 text-sm md:text-sm lg:text-lg">Pricing</a>
                        </li>
                        <li>
                            <a href="#contact" class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 text-sm md:text-sm lg:text-lg">Contact</a>
                        </li>
                        <li>
                            <a href="{{ session()->has('access_token') ? '/logout' : '/login'}}" class="md:hidden py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 text-sm md:text-sm lg:text-lg">
                                {{ session()->has('access_token') ? "Logout" : "Login"}}
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        @yield('content')
        @yield('js-bottom')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
        <script>
            function toggleMobileMenu() {
                var mobileMenu = document.getElementById("mobile-menu");
                mobileMenu.classList.toggle("hidden");
            }
        </script>
    </body>
    <footer class="bg-gray-800">
        <div class="w-full mx-auto max-w-screen-2xl p-4 md:flex md:items-center md:justify-between border-t-2 border-gray-700">
            <span class="text-sm text-gray-100 sm:text-center dark:text-gray-100">© 2023 <a href="{{ url('/') }}" class="hover:underline">Easeweldo™</a>. All Rights Reserved.
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
