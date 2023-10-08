@extends('layouts.personal.default')

@section('title')
QR Code
@endsection

@section('back_url', url('personal/dashboard'))

@section('header')
<h1 class="text-2xl font-semibold text-center">QR Code</h1>
@endsection

@section('content')
<div class="px-2 my-4">
    <div class="flex justify-center px-2 my-4">
        <img src="data:image/jpeg;base64,{{ base64_encode($qr) }}" alt="Image">
    </div>
    <p class="py-4 text-center text-md">Use code to clock in / clock out.</p>
    <div class="px-2">
        <p class="text-center mb-4">OR</p>
        <p class="text-center">
            <a href="{{ route('scan-qr') }}" class="text-blue-500 hover:underline">Scan QR Code</a>
        </p>
    </div>
</div>
@endsection
