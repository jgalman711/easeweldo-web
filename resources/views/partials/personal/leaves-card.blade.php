<div class="leave-entry border-l-4 border-{{ getStatusColor($leave['status']) }}-400 mt-2">
    <div class="flex items-center justify-between px-4 py-2 bg-white shadow-md">
        <div class="text-center pr-4">
            <div class="text-gray-500 uppercase text-sm">{{ $leave['month'] }}</div>
            <div class="text-2xl font-semibold">{{ $leave['day'] }}</div>
            <div class="text-gray-500 uppercase text-sm">{{ $leave['year'] }}</div>
        </div>
        <div class="flex-1 text-left pl-2">
            <div class="text-xl font-semibold">{{ ucwords($leave['description']) }}</div>
            <div class="text-sm text-gray-600">{{ ucwords(str_replace("_", " ", $leave['type'])) }}</div>
            <div class="text-sm text-{{ getStatusColor($leave['status']) }}-500 mt-1">{{ ucwords($leave['status']) }}</div>
        </div>
        <div>
            <a class="text-blue-500 hover:underline details-link cursor-pointer">Details</a>
        </div>
    </div>
    <div class="details hidden bg-white px-4 py-2 text-left">
        <div class="border-t-2 border-gray-200 pt-2 flex justify-between">
            <div>
                <p class="mb-1 text-sm">Date Submitted</p>
                <p class="mb-1 text-sm">Date Approved</p>
                <p class="mb-1 text-sm">Approved By</p>
                <p class="mb-1 text-sm">Remarks</p>
            </div>
            <div class="text-right">
                <p class="mb-1 text-sm">{{ $leave['formatted_date'] }}</p>
                <p class="mb-1 text-sm">{{ $leave['approved_date'] ?? '-' }}</p>
                <p class="mb-1 text-sm">{{ $leave['approved_by'] ?? '-' }}</p>
                <p class="mb-1 text-sm">{{ $leave['remarks'] ?? '-' }}</p>
            </div>
        </div>
    </div>
</div>
