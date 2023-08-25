@extends('layouts.auth')

@section('seo')
<title>Easeweldo: Reset Password</title>
<meta name="description" content="Reset your Easeweldo account password. Follow the steps to create a new password and regain access to your account.">
<meta name="keywords" content="payroll, payroll software, reset password, password reset">
<meta name="author" content="Easeweldo Team">

<meta property="og:title" content="Easeweldo: Reset Password">
<meta property="og:description" content="Reset your Easeweldo account password. Follow the steps to create a new password and regain access to your account.">
<meta property="og:image" content="assets/images/reset-password.png">
<meta property="og:url" content="https://easeweldo.com/reset-password">
<meta property="og:type" content="website">
@endsection

@section('content')
<form action="reset-password" method="POST">
    <h1 class="text-3xl font-semibold mb-6">Reset Your Password</h1>
    @csrf
    <input type="hidden" name="token" value="{{ $token }}">
    @if($errors->any())
        <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-4">
            @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif
    <div class="mb-4">
        <label for="email_address" class="block text-sm font-medium text-gray-700">Email</label>
        <input type="email" id="email_address" name="email_address" value="{{ $email_address }}" class="mt-1 block w-full shadow-sm sm:text-sm rounded-md p-3 border border-sky-500" readonly>
    </div>
    <div class="mb-4">
        <label for="password" class="block text-sm font-medium text-gray-700">New Password</label>
        <input type="password" id="password" name="password" class="mt-1 block w-full shadow-sm sm:text-sm rounded-md p-3 border border-sky-500">
    </div>
    <div class="mb-4">
        <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm New Password</label>
        <input type="password" id="password_confirmation" name="password_confirmation" class="mt-1 block w-full shadow-sm sm:text-sm rounded-md p-3 border border-sky-500">
    </div>
    <div class="flex items-center justify-between">
        <button type="submit" class="w-full bg-blue-800 text-white py-2 px-4 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Reset Password</button>
    </div>
</form>
<div class="text-center mt-4">
    <a href="login" class="font-medium text-blue-600 hover:underline">Back to Login</a>
</div>
@endsection
