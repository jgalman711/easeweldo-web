@extends('layouts.auth')

@section('content')
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
    @if (session('status'))
    <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4">
        {{ session('status') }}
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
        </div>
        </div>
        <div class="flex items-center justify-between mb-4">
        <div class="flex items-center">
            <input type="checkbox" id="remember" name="remember" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
            <label for="remember" class="ml-2 block text-sm text-gray-900">Remember me</label>
        </div>
        <a href="forgot-password" class="text-sm text-blue-600 hover:underline">Forgot your password?</a>
    </div>
    <button type="submit" class="w-full bg-blue-800 text-white py-2 px-4 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Login</button>
</form>
<div class="mt-4">
    <p class="text-sm text-gray-600">Don't have an account? <a href="register" class="font-medium text-blue-600 hover:underline">Sign up</a></p>
</div>
@endsection
