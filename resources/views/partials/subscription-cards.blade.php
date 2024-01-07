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
        <div class="flex flex-col flex-grow">
            <ul role="list" class="space-y-5 my-7">
            @foreach(json_decode($subscription['subscription']['features'], true) as $feature => $value)
                @if ($value === "title")
                <p class="mb-4 mt-2 font-semibold text-xl">{{ $feature }}</p>
                @else
                    @if ($value === true)
                    <li class="flex space-x-3">
                        <svg class="flex-shrink-0 w-4 h-4 text-blue-600 dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                        </svg>
                        <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400">
                            {{ $feature }}
                        </span>
                    </li>
                    @else
                    <li class="flex space-x-3 line-through decoration-gray-500">
                        <svg class="flex-shrink-0 w-4 h-4 text-gray-400 dark:text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                        </svg>
                        <span class="text-base font-normal leading-tight text-gray-500">
                            {{ $feature }}
                        </span>
                    </li>
                    @endif
                @endif
            @endforeach
            </ul>
        </div>
        <div class="w-full px-4">
            <a href="{{ route('register.index') }}" class="w-full text-center inline-block bg-blue-800 text-white font-semibold my-6 py-4 px-6 rounded-md shadow-md hover:bg-blue-600 transition duration-300">
                Choose Plan
            </a>
        </div>
    </div>
    @endforeach
</div>
@endif
