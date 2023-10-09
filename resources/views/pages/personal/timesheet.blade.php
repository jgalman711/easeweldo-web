@extends('layouts.personal.default')

@section('title')
    Payrolls
@endsection

@section('back_url', url('personal/dashboard'))

@section('header')
<h1 class="text-xl font-medium text-center">Timesheet</h1>
@endsection

@section('content')
@include('partials.personal.modal')
<div class="px-2 my-2">
    @include('partials.personal.clock-in-out')
</div>

@if ($timesheet)
@foreach ($timesheet as $timeRecord)
    <div class="px-2 my-2">
        @include('partials.personal.timerecord')
    </div>
@endforeach
@endif

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
