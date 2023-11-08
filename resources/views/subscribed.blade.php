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
<div class="min-h-screen flex items-center justify-center">
    <div class="mx-auto max-w-5xl text-center p-6">
        <h1 class="text-2xl md:text-4xl font-bold text-center mb-8">You have successfully subscribed!</h1>
        <p class="mt-4 text-lg mb-20">
            Thank you for joining Easeweldo. Please deposit the subscription amount <span class="text-blue-600">P{{ number_format($balance, 2) }}</span> to one of the provided bank accounts:
        </p>
        <div class="container mx-auto my-8 max-w-6xl px-4">
            @include('partials.payment-options')
        </div>
        <p class="my-10 text-lg">
            You will commence your 60-day complimentary free trial of Easeweldo once the portal's development is completed, which is expected to be very soon. In the meantime, you can complete your company registration by clicking <a class="leading-6 text-blue-600 cursor-pointer underline" href="company">here</a>.
        </p>
        <div class="max-w-4xl mx-auto flex flex-col items-center">
            <img src="{{ asset('assets/images/coming-soon.png') }}" alt="Subscription Image" class="w-full h-auto">
        </div>
    </div>
</div>
@endsection
