@extends('layouts.auth')

@section('seo')
<title>Easeweldo: Log in to Your Account</title>
<meta name="description" content="Log in to your Easeweldo account. Manage your payroll with ease and efficiency.">
<meta name="keywords" content="payroll, payroll software, payroll management, payroll system, employee login">
<meta name="author" content="Easeweldo Team">

<meta property="og:title" content="Easeweldo: Log in to Your Account">
<meta property="og:description" content="Log in to your Easeweldo account. Manage your payroll with ease and efficiency.">
<meta property="og:image" content="assets/images/home.png">
<meta property="og:url" content="https://easeweldo.com/login">
<meta property="og:type" content="website">
@endsection

@section('content')
<div class="mb-8 text-left">
    <h1 class="font-bold text-5xl">
        <a href="/"><img src="{{ asset('assets/images/easeweldo-logo.png') }}" alt="Easeweldo Logo" class="h-8 w-auto"></a>
    </h1>
</div>
<div class="w-full max-w-md p-8 bg-white bg-opacity-90 rounded-lg shadow-md">
    <h1 class="text-3xl font-semibold mb-1">Login</h1>
    <p class="text-sm text-gray-700 mb-6">Enter your company email and password.</p>
    <form action="login" method="POST">
        @csrf
        @if($errors->any())
        <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-3 mb-4 text-sm">
                @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif
        @if (session('status'))
        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4 text-sm">
            {{ session('status') }}
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
            <a href="forgot-password" class="text-sm text-blue-600 hover:underline">Forgot your password?</a>
        </div>
        <button type="submit" class="w-full bg-blue-800 text-white p-2.5 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Login</button>
    </form>
    <div class="mt-4">
        <p class="text-sm text-gray-600">New Company? <a href="register" class="font-medium text-blue-600 hover:underline">Sign up</a></p>
    </div>
    @if(env('IS_PERSONAL_ENABLED'))
    <div class="mt-8 pt-8 border-t-2 border-gray-200 text-center">
        <a href="{{ route('personal.login') }}" type="button" class=" text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-md text-sm px-4 py-3 inline-flex items-center">
            Switch to Personal
            <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
            </svg>
        </a>
    </div>
    @endif
</div>
@endsection
