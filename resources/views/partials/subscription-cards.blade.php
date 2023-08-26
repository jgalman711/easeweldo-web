@if ($subscriptions)
<div class="grid grid-cols-1 lg:grid-cols-3 gap-12 max-w-6xl mx-auto">
    <div class="bg-white border-gray-300 border rounded-3xl p-4 flex flex-col items-center relative mt-0 lg:mt-2 transform hover:-translate-y-2 transition duration-300 hover:shadow-lg">
        <div class="bg-primary rounded-2xl relative py-4 mb-6 left-0 right-0 w-full">
            <h3 class="text-center text-2xl font-bold text-white">
                {{ strtoupper($subscriptions[0]['title']) }}
            </h3>
        </div>
        <div class="text-center mb-2">
            <p>
                <span class="line-through text-gray-500">P{{ $subscriptions[0]['amount'] }}</span>
                <span class="rounded-xl bg-yellow-300 py-1 px-2 font-bold">SAVE P{{ $subscriptions[0]['discount'] }}</span>
            </p>
        </div>
        <h3 class="text-center text-5xl font-bold mb-2">
            P{{ $subscriptions[0]['discounted_amount'] }}
        </h3>
        <p class="text-sm text-gray-500 mb-4">
            per employee / month
        </p>
        <div class="flex flex-col mt-6 flex-grow">
            @foreach(json_decode($subscriptions[0]['features'], true) as $feature)
            <div class="flex items-center">
                <svg class="h-4 w-4 text-green-500 mr-2 mb-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M14.293 5.293a1 1 0 0 1 1.414 1.414l-8 8a1 1 0 0 1-1.414 0l-4-4a1 1 0 0 1 1.414-1.414L6 11.586l7.293-7.293a1 1 0 0 1 1.414 0z" clip-rule="evenodd" />
                </svg>
                <p class="mb-2">{{ $feature }}</p>
            </div>
            @endforeach
        </div>
        <a href="{{ route('subscriptions.index', ['subscription_id' => 1]) }}" class="inline-block bg-blue-800 text-white font-semibold my-6 py-4 px-6 rounded-full shadow-md hover:bg-blue-600 transition duration-300 mx-auto">
            Get Started
        </a>
    </div>
    <div class="bg-white border-gray-300 border rounded-3xl p-4 flex flex-col items-center relative mt-0 lg:mt-2 transform hover:-translate-y-2 transition duration-300 hover:shadow-lg">
        <div class="bg-green-400 rounded-2xl relative py-4 mb-6 left-0 right-0 w-full">
            <h3 class="text-center text-2xl font-bold text-white">
                {{ strtoupper($subscriptions[1]['title']) }}
            </h3>
        </div>
        <div class="text-center mb-2">
            <p>
                <span class="text-gray-500"></span>
                <span class="rounded-xl bg-yellow-300 py-1 px-2 font-bold">COMING SOON</span>
            </p>
        </div>
        <h3 class="text-center text-5xl font-bold mb-2">
            P{{ $subscriptions[1]['amount'] }}
        </h3>
        <p class="text-sm text-gray-500 mb-4">
            per employee / month
        </p>
        <div class="flex flex-col mt-6 flex-grow">
            @foreach(json_decode($subscriptions[1]['features'], true) as $feature)
            <div class="flex items-center">
                <svg class="h-4 w-4 text-green-500 mr-2 mb-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M14.293 5.293a1 1 0 0 1 1.414 1.414l-8 8a1 1 0 0 1-1.414 0l-4-4a1 1 0 0 1 1.414-1.414L6 11.586l7.293-7.293a1 1 0 0 1 1.414 0z" clip-rule="evenodd" />
                </svg>
                <p class="mb-2">{{ $feature }}</p>
            </div>
            @endforeach
        </div>
        <form id="subscriptionForm" action="subscriptions" method="POST">
            @csrf
            <input type="hidden" name="subscriptions[]" value="{{ $subscriptions[1]['id'] }}">
            <button type="submit" class="inline-block bg-blue-800 text-white font-semibold my-6 py-4 px-6 rounded-full shadow-md hover:bg-blue-600 transition duration-300 mx-auto">Get Started</button>
        </form>
    </div>
    <div class="bg-white border-gray-300 border rounded-3xl p-4 flex flex-col items-center relative mt-0 lg:mt-2 transform hover:-translate-y-2 transition duration-300 hover:shadow-lg">
        <div class="bg-purple-400 rounded-2xl relative py-4 mb-6 left-0 right-0 w-full">
            <h3 class="text-center text-2xl font-bold text-white">
                {{ strtoupper($subscriptions[2]['title']) }}
            </h3>
        </div>
        <div class="text-center mb-2">
            <p>
                <span class="line-through text-gray-500"></span>
                <span class="rounded-xl bg-yellow-300 py-1 px-2 font-bold">COMING SOON</span>
            </p>
        </div>
        <h3 class="text-center text-5xl font-bold mb-2">
            P{{ $subscriptions[2]['amount'] }}
        </h3>
        <p class="text-sm text-gray-500 mb-4">
            per employee / month
        </p>
        <div class="flex flex-col mt-6 flex-grow">
            @foreach(json_decode($subscriptions[2]['features'], true) as $feature)
            <div class="flex items-center">
                <svg class="h-4 w-4 text-green-500 mr-2 mb-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M14.293 5.293a1 1 0 0 1 1.414 1.414l-8 8a1 1 0 0 1-1.414 0l-4-4a1 1 0 0 1 1.414-1.414L6 11.586l7.293-7.293a1 1 0 0 1 1.414 0z" clip-rule="evenodd" />
                </svg>
                <p class="mb-2">{{ $feature }}</p>
            </div>
            @endforeach
        </div>
        <form id="subscriptionForm" action="subscriptions" method="POST">
            @csrf
            <input type="hidden" name="subscriptions[]" value="{{ $subscriptions[2]['id'] }}">
            <button type="submit" class="inline-block bg-blue-800 text-white font-semibold my-6 py-4 px-6 rounded-full shadow-md hover:bg-blue-600 transition duration-300 mx-auto">Get Started</button>
        </form>
    </div>
</div>
@endif
