@extends('layouts.default')

@section('content')
<div class="flex items-center justify-center h-screen">
    <div class="w-full max-w-md">
        <form action="forgotpassword" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            <h1 class="text-3xl font-semibold mb-6">Forgot Your Password?</h1>
            @csrf
            @if($errors->any())
                <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-4">
                    @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
            @if (session('status'))
            <div class="mb-4 text-green-500">
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
    </div>
</div>
@endsection
