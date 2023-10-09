@extends('layouts.personal.default')

@section('title')
    Change Password
@endsection

@section('back_url', url('personal/profile'))

@section('header')
<h1 class="text-xl font-medium text-center">Change Password</h1>
@endsection

@section('content')
<div class="max-w-xl mx-auto py-4 px-2">
    <div class="w-full max-w-md mx-auto">
        <form class="bg-white shadow-md rounded p-4 mb-4" method="POST" action="{{ route('profile.update') }}">
            @csrf
            @if($errors->any())
            <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-2 mb-4 text-sm">
                @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif

            @if(session('success'))
            <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4 text-sm">
                {{ session('success') }}
            </div>
            @endif

            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-medium mb-1" for="old_password">
                    Old Password
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="old_password" type="password" name="old_password" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-medium mb-1" for="password">
                    New Password
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" name="password" required>
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 text-sm font-medium mb-1" for="password_confirmation">
                    Confirm New Password
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password_confirmation" type="password" name="password_confirmation" required>
            </div>
            <div class="flex items-center justify-between">
                <button class="w-full bg-blue-500 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                    Save
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
