@extends('layouts.personal.default')

@section('title')
    Profile
@endsection

@section('back_url', url('personal/dashboard'))

@section('header')
<h1 class="text-xl font-medium text-center">Profile</h1>
@endsection

@section('right_icon')
<a href="logout" class="absolute text-white hover:underline right-0 mr-2">
    <!-- Logout -->
    <img src="{{ asset('assets/images/personal/menu/logout.png') }}" alt="Add Icon" class="h-6">
</a>
@endsection

@section('content')
<div class="max-w-xl mx-auto py-4 px-2">
    <div class="flex items-center px-2 py-4 bg-white mb-2 shadow-md mb-4">
        @if(isset($user['profile_picture']) && $user['profile_picture'])
        <img src="{{ config('app.easeweldo_assets') . '/' . $user['profile_picture'] }}" alt="Profile Picture" class="w-24 h-24 rounded-full mr-4">
        @else
        <img src="{{ url('assets/images/personal/default-dp.png') }}" alt="Profile Picture" class="w-24 h-24 rounded-full mr-4">
        @endif
        <div class="text-left">
            <p class="text-md font-semibold mb-1">{{ $user['full_name'] }}</p>
            <p class="text-gray-600 text-sm">{{ $user['company'] }}</p>
            <a href="{{ route('profile.edit') }}">
                <button class="mt-2 px-4 py-2 bg-blue-500 text-white text-sm rounded hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-300">
                    Change Password
                </button>
            </a>
            {{-- <p class="text-gray-600 text-sm">{{ $user['job_title'] }}</p> --}}
        </div>
    </div>
    <h1 class="text-lg py-2 font-medium">Employee Details</h1>
    <div class="px-4 py-2 bg-white shadow-md mb-4">
        <div class="mb-2 border-b-2">
            <p class="block text-sm font-medium text-blue-700">Job Title</p>
            <p class=" w-full text-md">{{ $user['job_title'] ?? '-' }}</p>
        </div>
        <div class="mb-2 border-b-2">
            <p class="block text-sm font-medium text-blue-700">Department</p>
            <p class=" w-full text-md">{{ $user['department'] ?? '-' }}</p>
        </div>
        <div class="mb-2 border-b-2">
            <p class="block text-sm font-medium text-blue-700">Employment Status</p>
            <p class=" w-full text-md">{{ $user['employment_status'] ?? '-' }}</p>
        </div>
        <div class="mb-2 border-b-2">
            <p class="block text-sm font-medium text-blue-700">Employment Type</p>
            <p class=" w-full text-md">{{ $user['employment_type'] ?? '-' }}</p>
        </div>
        <div class="mb-2 border-b-2">
            <p class="block text-sm font-medium text-blue-700">Date of Hire</p>
            <p class=" w-full text-md">{{ $user['date_of_hire'] ?? '-' }}</p>
        </div>
    </div>
    <h1 class="text-lg py-2 font-medium">Personal Information</h1>
    <div class="px-4 py-2 bg-white shadow-md mb-4">
        <div class="mb-2 border-b-2">
            <p class="block text-sm font-medium text-blue-700">Email Address</p>
            <p class=" w-full text-md">{{ $user['email'] ?? '-' }}</p>
        </div>
        <div class="mb-2 border-b-2">
            <p class="block text-sm font-medium text-blue-700">Mobile Number</p>
            <p class=" w-full text-md">{{ $user['mobile_number'] ?? '-' }}</p>
        </div>
        <div class="mb-2 border-b-2">
            <p class="block text-sm font-medium text-blue-700">Address</p>
            <p class=" w-full text-md">{{ $user['address_line'] ?? '-' }}</p>
        </div>
    </div>
</div>
@endsection
