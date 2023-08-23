@extends('layouts.default')

@section('content')
<body class="bg-cover bg-center bg-no-repeat bg-gray-100">
    <div class="min-h-screen flex items-center justify-center bg-gray-100">
        <div class="w-full max-w-md p-8 bg-white bg-opacity-90 rounded-lg shadow-md">
            <h1 class="text-3xl font-semibold mb-6">Sign In</h1>
            <form action="login" method="POST">
                @csrf
                @if($errors->any())
                    <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-4">
                        @foreach($errors->all() as $error)
                        <p>{{ $error }}</p>
                        @endforeach
                    </div>
                @endif
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" id="email" name="email_address" class="mt-1 block w-full shadow-sm sm:text-sm rounded-md p-3 border border-sky-500">
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <div class="relative">
                        <input type="password" id="password" name="password" class="mt-1 block w-full shadow-sm sm:text-sm rounded-md pr-10 p-3 border border-sky-500">
                        <!-- <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                                <path fill-rule="evenodd" d="M10 0a10 10 0 100 20 10 10 0 000-20zm0 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 011-1h4a1 1 0 110 2H8a1 1 0 01-1-1z" clip-rule="evenodd"/>
                            </svg>
                        </div> -->
                    </div>
                </div>
                <div class="flex items-center justify-between mb-4">
                    <div class="flex items-center">
                        <input type="checkbox" id="remember" name="remember" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                        <label for="remember" class="ml-2 block text-sm text-gray-900">Remember me</label>
                    </div>
                    <a href="forgotpassword" class="text-sm text-blue-600 hover:underline">Forgot your password?</a>
                </div>
                <button type="submit" class="w-full bg-blue-800 text-white py-2 px-4 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Login</button>
            </form>
            <div class="mt-4">
                <p class="text-sm text-gray-600">Don't have an account? <a href="register" class="font-medium text-blue-600 hover:underline">Sign up</a></p>
            </div>
        </div>
    </div>
</body>
@endsection
