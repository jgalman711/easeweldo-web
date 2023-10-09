@extends('layouts.personal.default')

@section('title')
    Leave Application
@endsection

@section('back_url', url('personal/leaves'))

@section('header')
<h1 class="text-xl font-medium text-center">Leave Application</h1>
@endsection

@section('content')
<div class="bg-white p-6 rounded-lg shadow-md m-2">
    @if(session('success'))
    <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4 text-sm">
    {{ session('success') }}
    </div>
    @endif

    @if ($errors->has('error'))
    <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-3 mb-4 text-sm">
        @error('error')
            {{ $message }}
        @enderror
    </div>
    @endif

    <form method="POST" action="{{ route('leaves.store') }}">
        @csrf
        <div class="mb-4">
            <label for="type" class="block text-sm font-medium text-gray-700">Leave Type</label>
            <select name="type" id="type" value="{{ old('type') }}" class="border rounded-md w-full py-2 px-3 focus:outline-none">
                <option>Select Type</option>
                <option value="vacation">Vacation Leave</option>
                <option value="sick">Sick Leave</option>
                <option value="emergency">Emergency Leave</option>
            </select>
            @error('type')
            <p class="text-red-500 text-xs mt-1">Leave type is required</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="description" class="block text-sm font-medium text-gray-700">Title</label>
            <input type="text" id="description" value="{{ old('description') }}" name="description" class="mt-1 p-2 w-full border rounded-md">
            @error('description')
            <p class="text-red-500 text-xs mt-1">Title is required</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="from_date" class="block text-sm font-medium text-gray-700">Start Date and Time</label>
            <input type="datetime-local" id="from_date" name="from_date" value="{{ old('from_date') }}" class="mt-1 p-2 w-full border rounded-md">
            @error('from_date')
            <p class="text-red-500 text-xs mt-1">Start Date is required</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="to_date" class="block text-sm font-medium text-gray-700">End Date and Time</label>
            <input type="datetime-local" id="to_date" name="to_date" value="{{ old('to_date') }}" class="mt-1 p-2 w-full border rounded-md">
            @error('from_date')
            <p class="text-red-500 text-xs mt-1">End Date is required</p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="note" class="block text-sm font-medium text-gray-700">Note (Optional)</label>
            <textarea id="note" name="remarks" rows="3" class="mt-1 p-2 w-full border rounded-md" value="{{ old('remarks') }}"></textarea>
        </div>
        <div class="text-center">
            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-300 w-full">Submit</button>
        </div>
    </form>
</div>
@endsection
