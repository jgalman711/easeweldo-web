@extends('layouts.personal.default')

@section('title')
    Scan QR
@endsection

@section('back_url', url('personal/dashboard'))

@section('header')
<h1 class="text-2xl font-semibold text-center">Scan QR</h1>
@endsection

@section('content')
<div class="px-2 my-4">
    <div class="w-full" id="reader"></div>
</div>
@endsection

@section('js-bottom')
<script src="{{ asset('js/html5-qrcode.min.js') }}"></script>
<script>
function onScanSuccess(decodedText, decodedResult) {
    // Handle on success condition with the decoded text or result.
    console.log(`Scan result: ${decodedText}`, decodedResult);
}

var html5QrcodeScanner = new Html5QrcodeScanner(
	"reader", { fps: 10, qrbox: 250 });
html5QrcodeScanner.render(onScanSuccess);
</script>
@endsection
