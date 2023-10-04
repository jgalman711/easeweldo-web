@extends('layouts.personal.default')

@section('title')
    Dashboard
@endsection

@section('header')
<div class="flex items-center mx-4">
    @if(isset($employee['profile_picture']) && $employee['profile_picture'])
    <img src="{{ config('app.easeweldo_assets') . $employee['profile_picture'] }}" alt="Profile Picture" class="w-24 h-24 rounded-full mr-6">
    @else
    <img src="{{ url('assets/images/personal/default-dp.png') }}" alt="Profile Picture" class="w-24 h-24 rounded-full mr-8">
    @endif
    <div class="text-lg text-left">
        <h1 class="font-bold"></h1>
        <p class="text-gray-200 text-xl">{{ $employee['full_name'] }}</p>
        <p class="text-gray-200 text-sm">{{ $employee['job_title'] }}</p>
        <p class="text-gray-200 text-sm">{{ $employee['department'] }}</p>
        <p class="text-gray-200 text-md mt-2">{{ $company['name'] }}</p>
    </div>
</div>
@endsection

@section('content')
@include('partials.personal.modal')
<div class="px-2 my-4">
    <h2 class="text-2xl mb-2">Today's Work</h2>
    @include('partials.personal.clock-in-out')
</div>
@if (isset($schedule) && $schedule)
<div class="px-2 my-4">
    <h2 class="text-2xl mb-2">Shift This Week</h2>
    <div class="grid grid-cols-7 gap-1">
        @foreach($schedule as $day)
        <div class="bg-white shadow p-1 rounded text-center">
            <div class="{{ $day['is_today'] ? 'text-blue-400' : 'text-gray-500' }}">{{ $day['day'] }}</div>
            <div class="text-sm">{{ $day['clock_in'] ?? 'REST' }}</div>
            <div class="text-sm">{{ $day['clock_out'] ?? 'DAY' }}</div>
        </div>
        @endforeach
    </div>
</div>
@endif
<div class="px-2 my-4">
    <h2 class="text-2xl mb-2">Categories</h2>
    <div class="grid grid-cols-3 gap-4">
        <a href="payrolls">
            <div class="text-center p-4 bg-white rounded-lg shadow-md">
                <img src="../assets/images/personal/categories/1.png" alt="Payroll Icon" class="mx-auto w-auto h-14">
                <p class="mt-2 text-sm">Payrolls</p>
            </div>
        </a>
        <a href="timesheet">
            <div class="text-center p-4 bg-white rounded-lg shadow-md">
                <img src="../assets/images/personal/categories/2.png" alt="Timesheet Icon" class="mx-auto w-auto h-14">
                <p class="mt-2 text-sm">Timesheet</p>
            </div>
        </a>
        <a href="leaves">
            <div class="text-center p-4 bg-white rounded-lg shadow-md">
                <img src="../assets/images/personal/categories/3.png" alt="Leaves Icon" class="mx-auto w-auto h-14">
                <p class="mt-2 text-sm">Leaves</p>
            </div>
        </a>
        {{--
        <div class="text-center p-4 bg-white rounded-lg shadow-md">
            <img src="../assets/images/personal/categories/4.png" alt="Corrections Icon" class="mx-auto w-auto h-14">
            <p class="mt-2 text-sm">Corrections</p>
        </div>
        <div class="text-center p-4 bg-white rounded-lg shadow-md">
            <img src="../assets/images/personal/categories/5.png" alt="Overtimes Icon" class="mx-auto w-auto h-14">
            <p class="mt-2 text-sm">Overtimes</p>
        </div>
        --}}
    </div>
</div>
@endsection

@section('js-bottom')
<script>
$(document).ready(function() {
    let requestInProgress = false;

    let backdrop = document.getElementById("my-modal-backdrop");
    let modal = document.getElementById("my-modal");
    let button = document.getElementById("ok-btn");

    $("#clock-in-out").click(function() {
        if (requestInProgress) {
            return;
        }
        requestInProgress = true;
        let prev = $("#clock-in-out").html();
        $("#clock-in-out").html('Please wait.');
        const token = "{{ $token }}";
        $.ajax({
            url: "{{ $clock_in_url }}",
            method: "POST",
            headers: {
                'Authorization': 'Bearer ' + token,
            },
            dataType: "json",
            success: function(response) {
                setTimeout(function() {
                    modal.style.display = "block";
                    backdrop.style.display = "block";

                    const nextAction = response.data.next_action;
                    const sentences = response.message.split('. ');
                    const firstSentence = sentences[0];
                    const secondSentence = sentences.length > 1 ? sentences[1] : '';

                    $('#modal-title').text(firstSentence);
                    $('#modal-description').text(secondSentence);
                    $("#clock-in-out").html(response.data.next_action);

                    if (nextAction == "Clock Out") {
                        element = $("#clock-in-time");
                        dateToParse = response.data.clock_in;
                    } else {
                        element = $("#clock-out-time");
                        dateToParse = response.data.clock_out;
                    }

                    const date = new Date(dateToParse);
                    const hours = date.getHours();
                    const minutes = date.getMinutes();

                    const ampm = hours >= 12 ? "PM" : "AM";
                    const formattedHours = (hours % 12 || 12).toString().padStart(2, "0");
                    const formattedMinutes = minutes.toString().padStart(2, "0");
                    const formattedTime = `${formattedHours}:${formattedMinutes} ${ampm}`;

                    element.text(formattedTime);
                requestInProgress = false;
                }, 1000);
            },
            error: function(xhr, status, error) {
                setTimeout(function() {
                    modal.style.display = "block";
                    backdrop.style.display = "block";

                    const sentences = xhr.responseJSON.message.split('. ');
                    const firstSentence = sentences[0];
                    const secondSentence = sentences.length > 1 ? sentences[1] : '';
                    $('#modal-title').text(firstSentence);
                    $('#modal-description').text(secondSentence);
                    $("#clock-in-out").html(prev);
                }, 1000);
                requestInProgress = false;
            }
        });
    });

    button.onclick = function(event) {
        modal.style.display = "none";
        backdrop.style.display = "none";
    }
});
</script>
@endsection
