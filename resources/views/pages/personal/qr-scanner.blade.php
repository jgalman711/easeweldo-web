@extends('layouts.personal.default')

@section('title')
    Scan QR
@endsection

@section('back_url', url('personal/dashboard'))

@section('header')
<h1 class="text-2xl font-semibold text-center">Scan QR</h1>
@endsection

@section('content')
@include('partials.personal.modal')
<div class="px-2 my-4">
    <div class="w-full" id="reader"></div>
</div>
@endsection

@section('js-bottom')
<script src="{{ asset('js/html5-qrcode.min.js') }}"></script>
<script>
    let backdrop = document.getElementById("my-modal-backdrop");
    let modal = document.getElementById("my-modal");
    let button = document.getElementById("ok-btn");

    function onScanSuccess(decodedText, decodedResult) {
        const url = "{{ $es_api }}" + decodedText + "{{ $params }}";
        const token = "{{ $token }}";

        $.ajax({
            url: url,
            method: "POST",
            headers: {
                'Authorization': 'Bearer ' + token,
            },
            dataType: "json",
            success: function(response) {
                setTimeout(function(response) {
                    showModal(response);
                    html5QrcodeScanner.clear();
                requestInProgress = false;
                }, 1000);
            },
            error: function(xhr, status, error) {
                setTimeout(function() {
                    response = xhr.responseJSON;
                    showModal(response);
                    html5QrcodeScanner.clear();
                }, 1000);
                requestInProgress = false;
            }
        });
    }

    var html5QrcodeScanner = new Html5QrcodeScanner(
        "reader", { fps: 10, qrbox: 250 });
    html5QrcodeScanner.render(onScanSuccess);

    function showModal(response)
    {
        modal.style.display = "block";
        backdrop.style.display = "block";
        const sentences = response.message.split('. ');
        const firstSentence = sentences[0];
        const secondSentence = sentences.length > 1 ? sentences[1] : '';

        $('#modal-title').text(firstSentence);
        $('#modal-description').text(secondSentence);
    }

    button.onclick = function(event) {
        modal.style.display = "none";
        backdrop.style.display = "none";
    }
</script>
@endsection
