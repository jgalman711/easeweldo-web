@extends('layouts.personal.default')

@section('title')
    Leaves
@endsection

@section('back_url', url('personal/dashboard'))

@section('header')
<h1 class="text-2xl font-semibold text-center">Leaves</h1>
@endsection

@section('content')
<div class="leave-entry px-2 my-4 text-center">
    <h2 class="text-lg mb-2">Remaining Leave Credits</h2>
    <div class="flex justify-center items-center space-x-3 mb-4">
        <div class="w-1/3 bg-white border rounded-lg p-4 text-left">
            <div class="text-3xl text-gray-700 mb-2">{{ $salary_compuation['total_available_leaves'] / $salary_compuation['working_hours_per_day'] }}</div>
            <div class="text-lg text-blue-500 font-semibold">Total</div>
            <div class="text-sm text-gray-600">{{ $salary_compuation['total_leaves'] / $salary_compuation['working_hours_per_day'] }} Leaves</div>
        </div>
        <div class="w-1/3 bg-white border rounded-lg p-4 text-left">
            <div class="text-3xl text-gray-700 mb-2">{{ $salary_compuation['available_vacation_leave_hours'] / $salary_compuation['working_hours_per_day'] }}</div>
            <div class="text-lg text-blue-500 font-semibold">Vacation</div>
            <div class="text-sm text-gray-600">{{ $salary_compuation['total_vacation_leave_hours'] / $salary_compuation['working_hours_per_day'] }} Leaves</div>
        </div>
        <div class="w-1/3 bg-white border rounded-lg p-4 text-left">
            <div class="text-3xl text-gray-700 mb-2">{{ $salary_compuation['available_sick_leave_hours'] / $salary_compuation['working_hours_per_day'] }}</div>
            <div class="text-lg text-blue-500 font-semibold">Sick</div>
            <div class="text-sm text-gray-600">{{ $salary_compuation['total_sick_leave_hours'] / $salary_compuation['working_hours_per_day'] }} Leaves</div>
        </div>
    </div>
    <h2 class="text-left text-md mb-1">Leave Requests</h2>
    @foreach ($leaves as $leave)
        @include('partials.personal.leaves-card')
    @endforeach
</div>
@endsection

@section('js-bottom')
<script>
    $(document).ready(function() {
    // When a details link is clicked
        $(".details-link").click(function(event) {
            event.preventDefault();
            // Find the closest "leave-entry" div and toggle the "hidden" class on its details div
            $(this).closest(".leave-entry").find(".details").toggle();
        });
    });
</script>
@endsection