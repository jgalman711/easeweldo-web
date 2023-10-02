@extends('layouts.personal.default')

@section('title')
    Dashboard
@endsection

@section('header')
<div class="flex items-center">
    <img src="{{ 'http://api-sahodna.test/' . $employee['profile_picture'] }}" alt="Profile Picture" class="w-24 h-24 rounded-full mr-6">
    <div class="text-lg">
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
    <div class="mt-2 bg-white shadow px-2 py-4 border-l-4 border-yellow-500">
        <div class="flex items-center justify-between">
            <div class="mb-4">
                <p class="text-3xl">{{ $work_today['date'] ?? null }}</p>
            </div>
            <div class="mb-4 ">
                <p class="text-sm font-semibold">{{ $work_today['day'] ?? null }}</p>
                @if (isset($work_today['expected_clock_in']) && $work_today['expected_clock_in'] && isset($work_today['expected_clock_out']) && $work_today['expected_clock_out'])
                <p class="text-sm">{{ $work_today['expected_clock_in'] }} - {{ $work_today['expected_clock_out'] }}</p>
                @else
                <p class="text-sm">Rest Day</p>
                @endif
            </div>
            <div class="mb-4">
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
            <button id="clock-in-out" class="w-full px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-300">
                {{ $work_today['next_action'] }}
            </button>
        </div>
    </div>
</div>
<div class="px-2 my-4">
    <h2 class="text-2xl mb-2">Shift This Week</h2>
    <div class="grid grid-cols-7 gap-1">
        @if (isset($schedule) && $schedule)
            @foreach($schedule as $day)
            <div class="bg-white shadow p-1 rounded text-center">
                <div class="{{ $day['is_today'] ? 'text-blue-400' : 'text-gray-500' }}">{{ $day['day'] }}</div>
                <div class="text-sm">{{ $day['clock_in'] ?? 'REST' }}</div>
                <div class="text-sm">{{ $day['clock_out'] ?? 'DAY' }}</div>
            </div>
            @endforeach
        @endif
    </div>
</div>
<div class="px-2 my-4">
    <h2 class="text-2xl mb-2">Categories</h2>
    <div class="grid grid-cols-3 gap-4">
        <a href="payrolls">
            <div class="text-center p-4 bg-white rounded-lg shadow-md">
                <img src="../assets/images/personal/categories/1.png" alt="Payroll Icon" class="mx-auto w-auto h-14">
                <p class="mt-2 text-sm">Payrolls</p>
            </div>
        </a>
        <a href="timesheets">
            <div class="text-center p-4 bg-white rounded-lg shadow-md">
                <img src="../assets/images/personal/categories/2.png" alt="Timesheet Icon" class="mx-auto w-auto h-14">
                <p class="mt-2 text-sm">Timesheet</p>
            </div>
        </a>
        <div class="text-center p-4 bg-white rounded-lg shadow-md">
            <img src="../assets/images/personal/categories/3.png" alt="Leaves Icon" class="mx-auto w-auto h-14">
            <p class="mt-2 text-sm">Leaves</p>
        </div>
        <div class="text-center p-4 bg-white rounded-lg shadow-md">
            <img src="../assets/images/personal/categories/4.png" alt="Corrections Icon" class="mx-auto w-auto h-14">
            <p class="mt-2 text-sm">Corrections</p>
        </div>
        <div class="text-center p-4 bg-white rounded-lg shadow-md">
            <img src="../assets/images/personal/categories/5.png" alt="Overtimes Icon" class="mx-auto w-auto h-14">
            <p class="mt-2 text-sm">Overtimes</p>
        </div>
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

                    console.log(dateToParse);

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
