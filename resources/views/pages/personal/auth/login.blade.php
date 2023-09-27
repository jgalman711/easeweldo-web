@extends('layouts.personal.auth')

@section('content')
<div class="text-center">
    <img src="../assets/images/logo.png" alt="Easeweldo Logo" class="mx-auto mb-4 h-14 w-auto">
    <img src="../assets/images/easeweldo-logo.png" alt="Easeweldo Logo" class="h-6 mb-12 mx-auto">
    <h1 class="text-2xl font-semibold mt-2 text-gray-600">Welcome!</h1>
</div>
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
        <input type="email_addressdash" id="email_address" name="email_address" placeholder="Email" class="mt-1 px-6 py-4 w-full rounded-full border focus:ring focus:ring-blue-200" required>
    </div>
    <div class="mb-4">
        <input type="password" id="password" name="password" placeholder="Password" class="mt-1 px-5 py-4 w-full rounded-full border focus:ring focus:ring-blue-200" required>
    </div>
    <div class="mb-4">
        <button type="submit" class="bg-blue-600 text-white font-semibold py-2 mt-1 px-6 py-4 w-full rounded-full hover:bg-blue-600 transition duration-300 ease-in-out">Login</button>
    </div>
    <div class="mb-4 text-center">
        <a href="#" class="w-full text-gray-600 hover:underline">Forgot Password?</a>
    </div>
</form>
@endsection
