@extends('layouts.personal.default')

@section('title')
    Payrolls
@endsection

@section('back_url', url('personal/dashboard'))

@section('header')
<h1 class="text-2xl font-semibold text-center">Payrolls</h1>
@endsection

@section('content')
<div class="px-2 my-4">
    @if ($payrolls)
        @foreach($payrolls as $payroll)
        <a href="{{ url('personal/payrolls') . '/' . $payroll['id'] }}">
            <div class="mt-2 bg-white shadow px-4 py-3 border-l-4 border-{{ getStatusColor($payroll['status']) }}-400">
                @if (isset($payroll['period']) && $payroll['period'])
                <p class="text-xl font-semibold">Period {{ $payroll['period_id'] }} <span class="font-normal text-xs">({{ $payroll['period_duration'] }})</span></p>
                @else
                <p class="text-xl font-semibold">{{ ucwords($payroll['description']) }}
                    @if ($payroll['pay_date'])
                    <span class="font-normal text-xs">({{ $payroll['pay_date'] }})</span>
                    @endif
                </p>
                @endif
                <p class="text-lg mb-2">Net Income: <span class="font-semiold">P{{ number_format($payroll['net_income'], 2, '.', ',') }}</span></p>
                <div class="flex items-center mb-2 text-blue-400">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 6.375c0 2.278-3.694 4.125-8.25 4.125S3.75 8.653 3.75 6.375m16.5 0c0-2.278-3.694-4.125-8.25-4.125S3.75 4.097 3.75 6.375m16.5 0v11.25c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125V6.375m16.5 0v3.75m-16.5-3.75v3.75m16.5 0v3.75C20.25 16.153 16.556 18 12 18s-8.25-1.847-8.25-4.125v-3.75m16.5 0c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125" />
                    </svg>
                    <h2 class="ml-1 text-sm text-gray-800">{{ $payroll['type'] == "regular" ? "Salary Disbursement" : "Special Disbursement" }} - {{ ucwords(str_replace('-', ' ', $payroll['status'])) }}</h2>
                </div>
            </div>
        </a>
        @endforeach
    @else
    <h1 class="text-lg text-center">No Payrolls Found</h1>
    @endif
</div>
@endsection
