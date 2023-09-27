<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login - Easeweldo</title>
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body class="bg-cover bg-center bg-no-repeat h-screen flex items-center justify-center" style="background-image: url('../assets/images/auth/background.png')">
        <div class="max-w-md w-full py-16 px-6 md:bg-white md:rounded-lg md:shadow-md">
            @yield('content')
        </div>
    </body>
</html>
