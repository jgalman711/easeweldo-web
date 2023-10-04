<div class="mt-2 bg-white shadow px-2 py-4 border-l-4 border-{{ getStatusColor($timeRecord['attendance_status']) }}-500">
    <div class="flex items-center">
        <div class="mr-2">
            <p class="text-3xl">{{ $timeRecord['date'] ?? now()->format('d') }}</p>
        </div>
        <div class="flex-auto">
            <p class="text-sm font-semibold">{{ $timeRecord['day'] ?? now()->format('l') }}</p>
            @if (isset($timeRecord['expected_clock_in']) && $timeRecord['expected_clock_in'] && isset($timeRecord['expected_clock_out']) && $timeRecord['expected_clock_out'])
            <p class="text-sm">{{ $timeRecord['expected_clock_in'] }} - {{ $timeRecord['expected_clock_out'] }}</p>
            @else
            <p class="text-sm">Rest Day</p>
            @endif
        </div>
        <div class="flex-auto">
            <p class="text-sm text-gray-600">
                <span class="w-20 inline-block">Clock In:</span>
                <span id="clock-in-time" class="font-semibold text-right inline-block">{{ $timeRecord['clock_in'] ?? '-- : --' }}</span>
            </p>
            <p class="text-sm text-gray-600">
                <span class="w-20 inline-block">Clock Out:</span>
                <span id="clock-out-time" class="font-semibold text-right inline-block">{{ $timeRecord['clock_out'] ?? '-- : --' }}</span>
            </p>
        </div>
    </div>
</div>
