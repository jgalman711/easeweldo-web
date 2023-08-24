@extends('layouts.auth')

@section('content')
<h1 class="text-3xl font-semibold mb-6">Forgot Your Password?</h1>
<form action="forgot-password" method="POST">
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
        <input type="email" id="email_address" name="email_address" value="{{ old('email_address') }}" class="mt-1 block w-full shadow-sm sm:text-sm rounded-md p-3 border border-sky-500">
    </div>
    <div class="flex items-center justify-between">
        <button type="submit" class="w-full bg-blue-800 text-white py-2 px-4 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Send Password Reset Link</button>
    </div>
</form>
<div class="text-center mt-4">
    <a href="/login" class="font-medium text-blue-600 hover:underline">Back to Login</a>
</div>
@endsection
