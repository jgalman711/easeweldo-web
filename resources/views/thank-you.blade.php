@extends('layouts.business.default')

@section('content')
<div class="min-h-screen flex items-center justify-center">
    <div class="mx-auto max-w-5xl text-center p-6">
        <h1 class="text-2xl md:text-4xl font-bold text-center mb-8">You have successfully registered!</h1>
        <p class="mt-4 text-lg mb-20">
            We appreciate your registration and are excited to have you on board. Our Easeweldo portal is currently under development and will be available very soon. Stay tuned for updates!
        </p>
        <div class="max-w-4xl mx-auto flex flex-col items-center">
            <img src="{{ asset('assets/images/coming-soon.png') }}" alt="Subscription Image" class="w-full h-auto">
        </div>
    </div>
</div>
@endsection
