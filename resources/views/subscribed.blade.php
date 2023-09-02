@extends('layouts.cart')

@section('content')
<div class="py-4 md:py-8 px-4 sm:px-6 lg:px-8">
    <div class="max-w-4xl mx-auto">
        <div>
            <h2 class="text-2xl md:text-6xl font-bold text-center">You have successfully subscribed!</h2>
        </div>
        <p class="mt-10 text-gray-800 text-center font-semibold text-lg">This is your official confirmation. Thanks for joining Easeweldo. While you wait for our confirmation of your payment, please proceed to <a href="/dashboard }}" class="text-blue-600">Easeweldo Portal</a> and add your employees.</p>
        <div class="mt-6">
            <img src="{{ asset('assets/images/subscribed.png') }}" alt="Subscription Image" class="w-full h-auto">
        </div>
    </div>
</div>
@endsection
