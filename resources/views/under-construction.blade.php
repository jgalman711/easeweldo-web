@extends('layouts.default')

@section('content')
<body>
    <div class="overlay text-center flex flex-col items-center justify-center h-screen">
        <div class="flex flex-col items-center justify-center h-full">
            <h1 class="text-4xl mb-12 font-semibold">{{ strtoupper($message) }}</h1>
            <img src="{{ asset('assets/images/under-construction.png') }}" alt="Under Construction Image" class="maintenance-image">
        </div>
    </div>
</body>
@endsection
