@if ($subscriptions)
<div class="grid grid-cols-1 lg:grid-cols-3 gap-12 max-w-6xl mx-auto">
    @foreach($subscriptions as $key => $subscription)
    <div class="bg-white border-gray-300 border rounded-3xl p-4 flex flex-col items-center relative mt-0 lg:mt-2 transform hover:-translate-y-2 transition duration-300 hover:shadow-lg">
        <div class="{{ $color_classes[$key] }} rounded-2xl relative py-4 mb-6 left-0 right-0 w-full">
            <h3 class="text-center text-2xl font-bold text-white">
                {{ strtoupper($subscription['subscription']['title']) }}
            </h3>
        </div>
        <div class="text-center mb-2">
            <p>
                <span class="line-through text-gray-500">P{{ number_format($subscription['subscription']['amount'], 2) }}</span>
                <span class="rounded-xl bg-yellow-300 py-1 px-2 font-bold">SAVE P{{ number_format($subscription['discount'], 2) }}</span>
            </p>
        </div>
        <h3 class="text-center text-5xl font-bold mb-2">
            P{{ $subscription['price_per_employee'] }}
        </h3>
        <p class="text-sm text-gray-500 mb-4">
            per employee / month
        </p>
        <div class="flex flex-col mt-6 flex-grow">
            @foreach(json_decode($subscription['subscription']['features'], true) as $feature => $value)
            <div class="flex items-center">
                @if ($value === "title")
                <p class="mb-4 mt-2 font-semibold text-xl">{{ $feature }}</p>
                @else
                @if ($value === true)
                <svg class="h-4 w-4 text-green-500 mr-2 mb-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M14.293 5.293a1 1 0 0 1 1.414 1.414l-8 8a1 1 0 0 1-1.414 0l-4-4a1 1 0 0 1 1.414-1.414L6 11.586l7.293-7.293a1 1 0 0 1 1.414 0z" clip-rule="evenodd" />
                </svg>
                @else
                <svg class="h-4 w-4 text-red-500 mr-2 mb-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M16.293 3.293a1 1 0 0 1 1.414 1.414L11.414 10l6.293 6.293a1 1 0 1 1-1.414 1.414L10 11.414l-6.293 6.293a1 1 0 1 1-1.414-1.414L8.586 10 2.293 3.707a1 1 0 0 1 1.414-1.414L10 8.586l6.293-6.293a1 1 0 0 1 1.414 0z" clip-rule="evenodd" />
                </svg>
                @endif
                <p class="mb-2">{{ $feature }}</p>
                @endif
            </div>
            @endforeach
        </div>
        <div class="w-full px-8">
            <a href="{{ route('subscriptions.index', ['subscription_id' => $subscription['subscription_id']]) }}" class="w-full text-center inline-block bg-blue-800 text-white font-semibold my-6 py-4 px-6 rounded-md shadow-md hover:bg-blue-600 transition duration-300">
                Get Started
            </a>
        </div>
    </div>
    @endforeach
</div>
@endif
