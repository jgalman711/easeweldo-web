@extends('layouts.cart')

@section('content')
<div class="py-4 md:py-8 px-4 sm:px-6 lg:px-8">
    <div class="max-w-4xl mx-auto">
        <div>
            <h2 class="text-2xl md:text-6xl font-bold text-center">You have successfully subscribed!</h2>
        </div>
        <p class="mt-10 text-gray-800 text-center font-semibold text-lg">
            Thank you for joining Easeweldo. Please deposit the subscription amount <span class="text-blue-600">P{{ number_format($balance, 2) }}</span> to one of the provided bank accounts:
        </p>
    </div>
    <div class="container mx-auto mt-8 max-w-6xl px-4">
        @include('partials.payment-options')
    </div>
    <div class="max-w-4xl mx-auto mt-6">
        <img src="{{ asset('assets/images/subscribed.png') }}" alt="Subscription Image" class="w-full h-auto">
    </div>
</div>
@endsection
