@extends('layouts.cart')

@section('seo')
<title>Subscription Successful</title>
<meta name="description" content="Congratulations! Your subscription to Easeweldo is successful. Manage your payroll with ease and efficiency.">
<meta name="keywords" content="Easeweldo, subscription successful, payroll, payroll software, payroll management, payroll system, employee login">
<meta name="author" content="Easeweldo Team">

<meta property="og:title" content="Easeweldo: Subscription Successful">
<meta property="og:description" content="Congratulations! Your subscription to Easeweldo is successful. Manage your payroll with ease and efficiency.">
<meta property="og:image" content="assets/images/subscription_success.png">
<meta property="og:url" content="https://easeweldo.com/successful-subscription">
<meta property="og:type" content="website">
@endsection

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
    <div class="max-w-4xl mx-auto flex flex-col items-center">
        <img src="{{ asset('assets/images/subscribed.png') }}" alt="Subscription Image" class="w-full h-auto">
        <a href="{{ env('EASEWELDO_PORTAL_URL') }}" class="text-white bg-blue-800 hover:bg-blue-600 py-2 px-4 rounded-full text-lg font-semibold mt-8 inline-block transition duration-300">Go to Portal</a>
    </div>
</div>
@endsection
