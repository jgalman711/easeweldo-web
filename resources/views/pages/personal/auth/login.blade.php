@extends('layouts.auth')

@section('content')
<div class="mb-8 text-left">
    <h1 class="font-bold text-5xl">
        <a href="/"><img src="{{ asset('assets/images/personal/easeweldo-logo.png') }}" alt="Easeweldo Logo" class="h-8 w-auto"></a>
    </h1>
</div>
<div class="w-full max-w-md p-8 bg-white bg-opacity-90 rounded-lg shadow-md">
    <h1 class="text-3xl font-semibold mb-1 text-gray-700">Login</h1>
    <p class="text-sm text-gray-700 mb-6">Enter your personal email and password.</p>
    <form class="mt-4" action="login" method="POST">
        @csrf
        @if($errors->any())
        <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-3 mb-4 text-sm">
                @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif
        <div class="mb-4">
            <label for="email" class="block text-md font-medium text-gray-700">Email</label>
            <input type="email" id="email" name="email_address" class="mt-1 block w-full shadow-sm sm:text-sm rounded-md p-3 border border-sky-500">
        </div>
        <div class="mb-4">
            <label for="password" class="block text-md font-medium text-gray-700">Password</label>
            <div class="relative">
                <input type="password" id="password" name="password" class="mt-1 block w-full shadow-sm sm:text-sm rounded-md pr-10 p-3 border border-sky-500">
            </div>
            </div>
            <div class="flex items-center justify-between mb-4">
            <div class="flex items-center">
                <input type="checkbox" id="remember" name="remember" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                <label for="remember" class="ml-2 block text-sm text-gray-900">Remember me</label>
            </div>
            <a href="{{ url('forgot-password?type=personal') }}" class="text-sm text-blue-600 hover:underline">
                Forgot your password?
            </a>
        </div>
        <button type="submit" class="w-full bg-green-500 text-white p-2.5 rounded-md hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-600">
            Login
        </button>
        <div class="mt-4 text-center">
            <p class="text-sm text-gray-600">Do you have a business account?
                <a href="{{ route('login.index') }}" class="font-medium text-blue-600 hover:underline">Switch</a>
            </p>
        </div>
    </form>
</div>
@endsection
