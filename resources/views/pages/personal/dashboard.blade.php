@extends('layouts.personal.default')

@section('title')
    Dashboard
@endsection

@section('header')
<div class="flex items-center">
    <img src="{{ 'http://api-sahodna.test/' . $employee['profile_picture'] }}" alt="Profile Picture" class="w-24 h-24 rounded-full mr-6">
    <div class="text-lg">
        <h1 class="font-bold"></h1>
        <p class="text-gray-200 text-xl">{{ $employee['full_name'] }}</p>
        <p class="text-gray-200 text-sm">{{ $employee['job_title'] }}</p>
        <p class="text-gray-200 text-sm">{{ $employee['department'] }}</p>
        <p class="text-gray-200 text-md mt-2">{{ $company['name'] }}</p>
    </div>
</div>
@endsection

@section('content')
<div class="px-2 my-4">
    <h2 class="text-2xl mb-2">Today's Work</h2>
    <div class="mt-2 bg-white shadow p-4 border-l-4 border-yellow-500">
        <div class="flex items-center justify-between">
            <div class="mb-4">
                <p class="text-3xl">{{ $work_today['date'] }}</p>
            </div>
            <div class="mb-4">
                <p class="text-sm font-semibold">{{ $work_today['day'] }}</p>
                <p class="text-sm">{{ $work_today['expected_clock_in'] }} - {{ $work_today['expected_clock_out'] }}</p>
            </div>
            <div class="mb-4 pl-2 border-l-2 border-gray-200">
                <p class="text-sm text-gray-600">
                    <span class="w-20 inline-block">Clock In:</span>
                    <span class="font-semibold text-right inline-block">{{ $clock_in ?? '-- : --' }}</span>
                </p>
                <p class="text-sm text-gray-600">
                    <span class="w-20 inline-block">Clock Out:</span>
                    <span class="font-semibold text-right inline-block">{{ $clock_out ?? '-- : --' }}</span>
                </p>
            </div>
        </div>
        <div class="text-center">
            <button class="w-full px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-300">
                Clock In / Clock Out
            </button>
        </div>
    </div>
</div>
<div class="px-2 my-4">
    <h2 class="text-2xl mb-2">Shift This Week</h2>
    <div class="grid grid-cols-7 gap-1">
        @foreach($schedule as $day)
        <div class="bg-white shadow p-1 rounded text-center">
            <div class="{{ $day['is_today'] ? 'text-blue-400' : 'text-gray-500' }}">{{ $day['day'] }}</div>
            <div class="text-sm">{{ $day['clock_in'] ?? 'REST' }}</div>
            <div class="text-sm">{{ $day['clock_out'] ?? 'DAY' }}</div>
        </div>
        @endforeach
    </div>
</div>
<div class="px-2 my-4">
    <h2 class="text-2xl mb-2">Categories</h2>
    <div class="grid grid-cols-3 gap-4">
        <a href="payrolls">
            <div class="text-center p-4 bg-white rounded-lg shadow-md">
                <img src="../assets/images/personal/categories/1.png" alt="Payroll Icon" class="mx-auto w-auto h-14">
                <p class="mt-2 text-sm">Payrolls</p>
            </div>
        </a>
        <a href="timesheets">
            <div class="text-center p-4 bg-white rounded-lg shadow-md">
                <img src="../assets/images/personal/categories/2.png" alt="Timesheet Icon" class="mx-auto w-auto h-14">
                <p class="mt-2 text-sm">Timesheet</p>
            </div>
        </a>
        <div class="text-center p-4 bg-white rounded-lg shadow-md">
            <img src="../assets/images/personal/categories/3.png" alt="Leaves Icon" class="mx-auto w-auto h-14">
            <p class="mt-2 text-sm">Leaves</p>
        </div>
        <div class="text-center p-4 bg-white rounded-lg shadow-md">
            <img src="../assets/images/personal/categories/4.png" alt="Corrections Icon" class="mx-auto w-auto h-14">
            <p class="mt-2 text-sm">Corrections</p>
        </div>
        <div class="text-center p-4 bg-white rounded-lg shadow-md">
            <img src="../assets/images/personal/categories/5.png" alt="Overtimes Icon" class="mx-auto w-auto h-14">
            <p class="mt-2 text-sm">Overtimes</p>
        </div>
    </div>
</div>
@endsection
