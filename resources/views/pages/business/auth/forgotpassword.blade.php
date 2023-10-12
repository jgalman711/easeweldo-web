@extends('layouts.auth')

@section('seo')
<title>Easeweldo: Forgot Password</title>
<meta name="description" content="Forgot your Easeweldo account password? Recover it by following the steps to reset your password.">
<meta name="keywords" content="payroll, payroll software, forgot password, password recovery">
<meta name="author" content="Easeweldo Team">

<meta property="og:title" content="Easeweldo: Forgot Password">
<meta property="og:description" content="Forgot your Easeweldo account password? Recover it by following the steps to reset your password.">
<meta property="og:image" content="assets/images/forgot-password.png">
<meta property="og:url" content="https://easeweldo.com/forgot-password">
<meta property="og:type" content="website">
@endsection

@section('content')
<div class="mb-8 text-left">
    <h1 class="font-bold text-5xl">
        <a href="/">
            @if ($type == 'business')
            <img src="{{ asset('assets/images/easeweldo-logo.png') }}" alt="Easeweldo Logo" class="h-8 w-auto">
            @else
            <img src="{{ asset('assets/images/personal/easeweldo-logo.png') }}" alt="Easeweldo Logo" class="h-8 w-auto">
            @endif
        </a>
    </h1>
</div>
<div class="w-full max-w-md p-8 bg-white bg-opacity-90 rounded-lg shadow-md">
    <h1 class="text-3xl font-semibold mb-6">Forgot Your Password?</h1>
    <form action="forgot-password" method="POST">
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
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <input type="email" id="email_address" name="email_address" value="{{ old('email_address') }}" class="mt-1 block w-full shadow-sm sm:text-sm rounded-md p-3 border border-sky-500">
        </div>
        <div class="flex items-center justify-between">
            @if ($type == 'business')
            <button type="submit" class="w-full bg-blue-800 text-white py-2 px-4 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                Send Password Reset Link
            </button>
            @else
            <button type="submit" class="w-full bg-green-500 text-white py-2 px-4 rounded-md hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-600">
                Send Password Reset Link
            </button>
            @endif
        </div>
    </form>
    <div class="text-center mt-4">
        @if ($type == 'business')
        <a href="{{ url('login') }}" class="font-medium text-blue-600 hover:underline">Back to Login</a>
        @else
        <a href="{{ url('personal/login') }}" class="font-medium text-green-500 hover:underline">Back to Login</a>
        @endif
    </div>
</div>
@endsection
