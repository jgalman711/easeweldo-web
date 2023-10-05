@extends('layouts.personal.default')

@section('title')
    Profile
@endsection

@section('back_url', url('personal/dashboard'))

@section('header')
<h1 class="text-2xl font-semibold text-center">Profile</h1>
@endsection

@section('content')
<div class="max-w-xl mx-auto py-4 px-2">
    <!-- Profile Picture -->
    <div class="flex items-center justify-center mb-4">
        <img src="{{ config('app.easeweldo_assets') . '/' . $user['profile_picture'] }}" alt="Profile Picture" class="w-24 h-24 rounded-full">
    </div>
    <div class="p-4 bg-white">
        <div class="mb-4 border-b-2">
            <p class="block text-sm font-medium text-blue-700">Name</p>
            <p class="my-1 w-full text-lg">{{ $user['full_name'] ?? '-' }}</p>
        </div>
        <div class="mb-4 border-b-2">
            <p class="block text-sm font-medium text-blue-700">Job Title</p>
            <p class="my-1 w-full text-lg">{{ $user['job_title'] ?? '-' }}</p>
        </div>
        <div class="mb-4 border-b-2">
            <p class="block text-sm font-medium text-blue-700">Department</p>
            <p class="my-1 w-full text-lg">{{ $user['department'] ?? '-' }}</p>
        </div>
        <div class="mb-4 border-b-2">
            <p class="block text-sm font-medium text-blue-700">Employment Status</p>
            <p class="my-1 w-full text-lg">{{ $user['employment_status'] ?? '-' }}</p>
        </div>
        <div class="mb-4 border-b-2">
            <p class="block text-sm font-medium text-blue-700">Employment Type</p>
            <p class="my-1 w-full text-lg">{{ $user['employment_type'] ?? '-' }}</p>
        </div>
        <div class="mb-4 border-b-2">
            <p class="block text-sm font-medium text-blue-700">Date of Hire</p>
            <p class="my-1 w-full text-lg">{{ $user['date_of_hire'] ?? '-' }}</p>
        </div>
        <div class="mb-4 border-b-2">
            <p class="block text-sm font-medium text-blue-700">Email Address</p>
            <p class="my-1 w-full text-lg">{{ $user['email'] ?? '-' }}</p>
        </div>
        <div class="mb-4 border-b-2">
            <p class="block text-sm font-medium text-blue-700">Mobile Number</p>
            <p class="my-1 w-full text-lg">{{ $user['mobile_number'] ?? '-' }}</p>
        </div>
        <div class="mb-2 border-b-2">
            <p class="block text-sm font-medium text-blue-700">Address</p>
            <p class="my-1 w-full text-lg">{{ $user['address_line'] ?? '-' }}</p>
        </div>
    </div>
</div>
@endsection
