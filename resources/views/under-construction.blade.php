@extends('layouts.business.default')

@section('content')
<div class="min-h-screen flex items-center justify-center">
    <div class="mx-auto text-center p-6 max-w-6xl">
        <h1 class="text-3xl lg:text-6xl font-thin tracking-widest">COMING SOON</h1>
        <p class="mt-4 text-lg">
            We are working hard to bring you an exciting new platform. Our Easeweldo portal is currently under development and will be available very soon. In the meantime, you can complete your company registration by clicking <a class="leading-6 text-blue-600 cursor-pointer underline" href="company">here</a>.
        </p>
        <div class="max-w-4xl mx-auto flex flex-col items-center">
            <img src="{{ asset('assets/images/subscribed.png') }}" alt="Subscription Image" class="w-full h-auto">
        </div>
    </div>
</div>
@endsection
