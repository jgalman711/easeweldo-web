<div class="mt-2 bg-white shadow px-2 py-4">
    <div class="flex items-center">
        <div class="mb-4 mr-2 md:mr-6 text-3xl md:text-4xl">
            <p class="">{{ $work_today['date'] ?? now()->format('d') }}</p>
        </div>
        <div class="mb-4 flex-auto">
            <p class="text-sm font-semibold">{{ $work_today['day'] ?? now()->format('l') }}</p>
            @if (isset($work_today['expected_clock_in']) && $work_today['expected_clock_in'] && isset($work_today['expected_clock_out']) && $work_today['expected_clock_out'])
            <p class="text-sm">{{ $work_today['expected_clock_in'] }} - {{ $work_today['expected_clock_out'] }}</p>
            @else
            <p class="text-sm">Rest Day</p>
            @endif
        </div>
        <div class="mb-4 flex-auto">
            <p class="text-sm text-gray-600">
                <span class="w-20 inline-block">Clock In:</span>
                <span id="clock-in-time" class="font-semibold text-right inline-block">{{ $work_today['clock_in'] ?? '-- : --' }}</span>
            </p>
            <p class="text-sm text-gray-600">
                <span class="w-20 inline-block">Clock Out:</span>
                <span id="clock-out-time" class="font-semibold text-right inline-block">{{ $work_today['clock_out'] ?? '-- : --' }}</span>
            </p>
        </div>
    </div>
    <div class="text-center">
        <button id="clock-in-out" class="w-full px-4 py-2 bg-green-400 text-white rounded hover:bg-green-500 focus:outline-none focus:ring focus:ring-green-300">
            {{ $work_today['next_action'] ?? 'Clock In' }}
        </button>
    </div>
</div>
