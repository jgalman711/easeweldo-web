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
<div class="px-2 my-4">
    <p class="text-center my-2">OR</p>
    <p class="text-center">
        <a href="{{ route('create-qr') }}" class="text-blue-500 hover:underline">Generate Unique QR Code</a>
    </p>
</div>
@endsection

@section('js-bottom')
<script src="{{ asset('js/html5-qrcode.min.js') }}"></script>
<script>
    let backdrop = document.getElementById("my-modal-backdrop");
    let modal = document.getElementById("my-modal");
    let button = document.getElementById("ok-btn");

    function onScanSuccess(decodedText, decodedResult) {
        const url = "{{ $clock_in_url }}" + decodedText;
        const token = "{{ $token }}";
        html5QrcodeScanner.clear();

        $.ajax({
            url: url,
            method: "POST",
            headers: {
                'Authorization': 'Bearer ' + token,
            },
            dataType: "json",
            success: function(response) {
                showModal(response);
            },
            error: function(xhr, status, error) {
                response = xhr.responseJSON;
                showModal(response);
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
        html5QrcodeScanner.render(onScanSuccess);
    }
</script>
@endsection
