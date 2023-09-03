@extends('layouts.default')

@section('content')
<div class="py-4 md:py-8 px-4 sm:px-6 lg:px-8">
    <div class="max-w-4xl mx-auto my-12">
        <h2 class="text-4xl font-bold text-center">{{ strtoupper($message) }}</h2>
    </div>
    <div class="max-w-2xl mx-auto mt-6">
        <img src="{{ asset('assets/images/under-construction.png') }}" alt="Subscription Image" class="w-full h-auto">
    </div>
</div>
@endsection
