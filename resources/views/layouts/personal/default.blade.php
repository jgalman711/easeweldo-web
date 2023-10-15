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
    <body class="bg-cover bg-center bg-no-repeat h-screen flex justify-center bg-gray-100 mx-auto">
        <div class="w-full">
            {{-- DESKTOP --}}
            <nav class="hidden lg:block bg-green-400 border-gray-200 dark:bg-gray-900">
                <div class="container flex flex-wrap items-center justify-between mx-auto p-4">
                    <a href="{{ url('personal/dashboard') }}" class="flex items-center">
                        <img src="{{ asset('assets/images/easeweldo-negative.png') }}" class="h-6 mr-3" alt="Easeweldo Logo" />
                    </a>
                    <div class="flex items-center md:order-2">
                        <button type="button" class="flex mr-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
                            <span class="sr-only">Open user menu</span>
                            @if(isset($employee['profile_picture']) && $employee['profile_picture'])
                            <img class="w-12 h-12 rounded-full" src="{{ config('app.easeweldo_assets') . '/' . $employee['profile_picture'] }}" alt="user photo">
                            @else
                            <img src="{{ url('assets/images/personal/default-dp.png') }}" alt="Profile Picture" class="w-12 h-12 rounded-full">
                            @endif
                        </button>
                        <!-- Dropdown menu -->
                        <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600" id="user-dropdown">
                            <div class="px-4 py-3">
                                <span class="block text-sm text-gray-900">{{ $employee['full_name'] ?? null }}</span>
                                <span class="block text-sm text-gray-500 truncate">{{ $employee['email'] ?? $employee['user']['email'] ?? null }}</span>
                            </div>
                            <ul class="py-2" aria-labelledby="user-menu-button">
                                <li>
                                    <a href="{{ url('personal/profile') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profile</a>
                                </li>
                                <li>
                                    <a href="{{ url('personal/logout') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign out</a>
                                </li>
                            </ul>
                        </div>
                        <button data-collapse-toggle="navbar-user" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-user" aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                            </svg>
                        </button>
                    </div>
                    <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-user">
                        <ul class="flex font-medium p-0 rounded-lg flex-row space-x-12 text-color-white">
                            <li>
                                <a href="{{ url('personal/payrolls') }}" class="block text-white rounded p-0" aria-current="page">Payrolls</a>
                            </li>
                            <li>
                                <a href="{{ url('personal/timesheet') }}" class="block text-white rounded p-0" aria-current="page">Timesheet</a>
                            </li>
                            <li>
                                <a href="{{ url('personal/leaves') }}" class="block text-white rounded p-0" aria-current="page">Leaves</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            {{-- END DESKTOP --}}

            <header class="lg:hidden bg-green-400 text-white px-2 py-4">
                <div class="flex items-center relative">
                    @if(View::hasSection('back_url'))
                    <a href="@yield('back_url')" class="pl-2 absolute text-white hover:underline">
                        <img src="{{ asset('assets/images/personal/menu/back.png') }}" alt="Back Icon" class="h-6">
                    </a>
                    @endif
                    <div class="text-center flex-grow">
                        @yield('header')
                    </div>
                    @if(View::hasSection('add_url'))
                    <a href="@yield('add_url')" class="pt-1 absolute text-white hover:underline right-0">
                        <img src="{{ asset('assets/images/personal/menu/add.png') }}" alt="Add Icon" class="h-6">
                    </a>
                    @endif
                    @yield('right_icon')
                </div>
            </header>
            <div class="content max-w-8xl mx-auto sm:px-4">
                @yield('content')
            </div>
            <div class="py-8"></div>
                <div class="fixed bottom-0 left-0 right-0 bg-green-400 flex lg:hidden justify-around p-1.5">
                    <a href="{{ url('personal/dashboard') }}">
                        <div class="text-white text-center p-1">
                            <img src="{{ url('assets/images/personal/menu/1.png') }}" alt="Home Icon" class="w-auto h-6 mb-2 mx-auto">
                            <p class="text-xs">Home</p>
                        </div>
                    </a>
                    <a href="{{ url('personal/scan-qr') }}">
                        <div class="text-white text-center p-1">
                            <img src="{{ url('assets/images/personal/menu/2.png') }}" alt="QR Scan Icon" class="w-auto h-6 mb-2 mx-auto">
                            <p class="text-xs">QR Scan</p>
                        </div>
                    </a>
                    <a href="{{ url('personal/profile') }}">
                        <div class="text-white text-center p-1">
                            <img src="{{ url('assets/images/personal/menu/3.png') }}" alt="Profile Icon" class="w-auto h-6 mb-2 mx-auto">
                            <p class="text-xs">Profile</p>
                        </div>
                    </a>
                </div>
            </a>
        </div>
        @yield('js-bottom')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
    </body>
</html>
