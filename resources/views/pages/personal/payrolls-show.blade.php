@extends('layouts.personal.default')

@section('title')
    Payrolls
@endsection

@section('header')
<h1 class="text-2xl font-semibold text-center">Period 11</h1>
@endsection

@section('content')
<div class="px-2 my-4">
    <div class="grid grid-cols-2 gap-4 mt-2 bg-white shadow px-4 py-3">
        <div>
            <!-- Canvas -->
        </div>
        <div>
            <div class="mb-4">
                <p class="text-green-400 text-sm">Net Income:</p>
                <p class="text-lg font-semibold">P10,000.00</p>
            </div>

            <div class="mb-4">
                <p class="text-yellow-400 text-sm">Contributions:</p>
                <p class="text-lg font-semibold">P1,000.90</p>
            </div>

            <div>
                <p class="text-blue-400 text-sm">Withheld Tax:</p>
                <p class="text-lg font-semibold">P1,405.12</p>
            </div>
        </div>
    </div>
</div>
<div class="px-2 my-2">
    <div class="bg-white shadow px-4 py-3">
        <h1 class="text-md text-green-400 border-b-2 mb-2 pb-1 font-semibold">Earnings</h1>
        <div class="flex justify-between">
            <div>
                <p class="mb-1 text-sm">Basic Salary:</p>
                <p class="mb-1 text-sm">Overtime Pay <span class="text-xs text-gray-400">(5 hours)</span>:</p>
                <p class="mb-1 text-sm">Regular Holiday:</p>
                <p class="mb-1 text-sm">Regular Holiday Worked <span class="text-xs text-gray-400">(8 Hours)</span>:</p>
                <p class="mb-1 text-sm">Vacation Leave <span class="text-xs text-gray-400">(16 Hours)</span>:</p>
                <p class="mb-1 text-sm">Travel Allowance:</p>
            </div>
            <div class="text-right">
                <p class="mb-1 text-sm">10,000.00</p>
                <p class="mb-1 text-sm">250.00</p>
                <p class="mb-1 text-sm">1,000.00</p>
                <p class="mb-1 text-sm">800.00</p>
                <p class="mb-1 text-sm">400.00</p>
                <p class="mb-1 text-sm">50.00</p>
            </div>
        </div>
        <div class="border-t border-gray-300 pt-2 mt-2">
            <div class="flex justify-between">
                <p class="text-sm font-semibold">Gross Income</p>
                <p class="text-sm font-semibold text-right">13,500.00</p>
            </div>
        </div>
    </div>
</div>
<div class="px-2 my-2">
    <div class="bg-white shadow px-4 py-3">
        <h1 class="text-md text-yellow-400 border-b-2 mb-2 pb-1 font-semibold">Contributions</h1>
        <div class="flex justify-between">
            <div>
                <p class="mb-1 text-sm">SSS</p>
                <p class="mb-1 text-sm">PhilHealth</p>
                <p class="mb-1 text-sm">PagIbig</p>
            </div>
            <div class="text-right">
                <p class="mb-1 text-sm">1,200.00</p>
                <p class="mb-1 text-sm">250.00</p>
                <p class="mb-1 text-sm">1,000.00</p>
            </div>
        </div>
        <div class="border-t border-gray-300 pt-2 mt-2">
            <div class="flex justify-between">
                <p class="text-sm font-semibold">Total Contributions</p>
                <p class="text-sm font-semibold text-right">2,450.00</p>
            </div>
        </div>
    </div>
</div>
<div class="px-2 my-2">
    <div class="bg-white shadow px-4 py-3">
        <h1 class="text-md text-blue-400 border-b-2 mb-2 pb-1 font-semibold">Net Pay</h1>
        <div class="flex justify-between">
            <div>
                <p class="mb-1 text-sm">Taxable Income</p>
                <p class="mb-1 text-sm">Income Tax</p>
                <p class="mb-1 text-sm">Rice Allowance <span class="text-xs text-gray-400">(non-taxable)</span></p>
            </div>
            <div class="text-right">
                <p class="mb-1 text-sm">1,200.00</p>
                <p class="mb-1 text-sm">250.00</p>
                <p class="mb-1 text-sm">1,000.00</p>
            </div>
        </div>
        <div class="border-t border-gray-300 pt-2 mt-2">
            <div class="flex justify-between">
                <p class="text-sm font-semibold">Net Income</p>
                <p class="text-sm font-semibold text-right">2,450.00</p>
            </div>
        </div>
    </div>
</div>
@endsection