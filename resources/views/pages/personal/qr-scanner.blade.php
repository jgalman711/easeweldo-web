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
    function onScanSuccess(decodedText, decodedResult) {
        html5QrcodeScanner.clear();
        const url = "{{ $es_api }}" + decodedText + "{{ $params }}";

        clockIn(url);
    }

    var html5QrcodeScanner = new Html5QrcodeScanner(
        "reader", { fps: 10, qrbox: 250 });
    html5QrcodeScanner.render(onScanSuccess);

    function clockIn(url) {
        alert ('clock in: ' + url);
        $(document).ready(function() {
            $.ajax({
                url: url,
                method: "POST",
                headers: {
                    'Authorization': 'Bearer ' + token,
                },
                dataType: "json",
                success: function(response) {
                    setTimeout(function() {
                        alert('success');
                        modal.style.display = "block";
                        backdrop.style.display = "block";

                        const nextAction = response.data.next_action;
                        const sentences = response.message.split('. ');
                        const firstSentence = sentences[0];
                        const secondSentence = sentences.length > 1 ? sentences[1] : '';

                        $('#modal-title').text(firstSentence);
                        $('#modal-description').text(secondSentence);

                    requestInProgress = false;
                    }, 1000);
                },
                error: function(xhr, status, error) {
                    setTimeout(function() {
                        alert('failed');
                        modal.style.display = "block";
                        backdrop.style.display = "block";

                        const sentences = xhr.responseJSON.message.split('. ');
                        const firstSentence = sentences[0];
                        const secondSentence = sentences.length > 1 ? sentences[1] : '';
                        $('#modal-title').text(firstSentence);
                        $('#modal-description').text(secondSentence);
                    }, 1000);
                    requestInProgress = false;
                }
            });
        alert('end');
        });
    }
    
</script>
@endsection
