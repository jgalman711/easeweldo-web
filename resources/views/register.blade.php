@extends('layouts.default')

@section('content')
<body class="bg-cover bg-center bg-no-repeat bg-gray-100">
    <div class="min-h-screen flex items-center justify-center bg-gray-100">
        <div class="w-full max-w-md p-8 bg-white bg-opacity-90 rounded-lg shadow-md">
            <h1 class="text-3xl font-semibold mb-6">Create Account</h1>
            <form action="register" method="POST">
                @csrf
                @if($errors->any())
                    <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-4">
                    @foreach($errors->all() as $error)
                        <p class="text-sm">{{ $error }}</p>
                        @endforeach
                    </div>
                @endif
                <div class="mb-4">
                    <label for="company_name" class="block text-sm font-medium text-gray-700">Company Name</label>
                    <input type="text" id="company_name" name="company_name" value="{{ old('company_name') }}" class="mt-1 block w-full shadow-sm sm:text-sm rounded-md p-3 border border-sky-500">
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" id="email_address" name="email_address" value="{{ old('email_address') }}" class="mt-1 block w-full shadow-sm sm:text-sm rounded-md p-3 border border-sky-500">
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <div class="relative">
                        <input type="password" id="password" name="password" class="mt-1 block w-full shadow-sm sm:text-sm rounded-md pr-10 p-3 border border-sky-500">
                    </div>
                </div>
                <div class="mb-4">
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password</label>
                    <div class="relative">
                        <input type="password" id="password_confirmation" name="password_confirmation" class="mt-1 block w-full shadow-sm sm:text-sm rounded-md pr-10 p-3 border border-sky-500">
                    </div>
                </div>
                <button type="submit" class="w-full bg-indigo-600 text-white py-2 px-4 rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Register</button>
            </form>
            <div class="mt-4">
                <p class="text-sm text-gray-600">Already have an account? <a href="login" class="font-medium text-indigo-600 hover:underline">Log in</a></p>
            </div>
        </div>
    </div>
</body>
@endsection
