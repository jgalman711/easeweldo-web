@extends('layouts.business.default')

@section('seo')
<title>Registration Successful</title>
<meta name="description" content="Congratulations! Your registration to Easeweldo is successful. Manage your payroll with ease and efficiency.">
<meta name="keywords" content="Easeweldo, registration successful, payroll, payroll software, payroll management, payroll system, employee login">
<meta name="author" content="Easeweldo Team">
@endsection

@section('content')
<div class="min-h-screen flex items-center justify-center">
    <div class="mx-auto max-w-5xl text-center p-6">
        <h1 class="text-2xl md:text-5xl font-bold text-center mb-16">You have successfully registered!</h1>
        <p class="mt-4 text-md md:text-xl mb-20">
            We appreciate your registration and are excited to have you on board. Our Easeweldo portal is currently under development and will be available very soon. In the meantime, you can update your company profile by clicking <a class="leading-6 text-blue-600 cursor-pointer underline" href="{{ route('company.edit') }}">here</a>.
        </p>
        <div class="max-w-4xl mx-auto flex flex-col items-center">
            <img src="{{ asset('assets/images/coming-soon.png') }}" alt="Subscription Image" class="w-full h-auto">
        </div>
    </div>
</div>
@endsection
