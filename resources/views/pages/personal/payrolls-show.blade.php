@extends('layouts.personal.default')

@section('back_url', url()->previous('/personal/payrolls'))

@section('title')
    {{ $payroll['period_id'] ? 'Period ' . $payroll['period_id'] : 'Special Payroll' }}
@endsection

@section('header')
<h1 class="text-xl font-medium text-center">{{ $payroll['period_id'] ? 'Period ' . $payroll['period_id'] : 'Special Payroll' }}</h1>
@endsection

@section('content')
<div class="px-2 my-4">
    <div class="grid grid-cols-2 gap-4 mt-2 bg-white shadow px-4 py-3">
        <div>
            <div class="px-4">
                <canvas id="myChart"></canvas>
            </div>
            <p class="mt-2 text-xs text-center">Gross Income: P{{ number_format($payroll['gross_income'], 2, '.', ',') }}</p>
        </div>
        <div>
            <div class="mb-2">
                <p class="text-green-400 text-sm">Net Income:</p>
                <p class="text-md font-semibold">P{{ number_format($payroll['net_income'], 2, '.', ',') }}</p>
            </div>
            <div class="mb-2">
                <p class="text-yellow-400 text-sm">Contributions:</p>
                <p class="text-md font-semibold">P{{ number_format($payroll['total_contributions'], 2, '.', ',') }}</p>
            </div>
            <div>
                <p class="text-blue-400 text-sm">Withheld Tax:</p>
                <p class="text-md font-semibold">P{{ number_format($payroll['withheld_tax'], 2, '.', ',') }}</p>
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
                @if (isset($payroll['regular_holiday_hours']) && $payroll['regular_holiday_hours'])
                <p class="mb-1 text-sm">Regular Holiday:</p>
                @endif
                @if (isset($payroll['regular_holiday_hours_worked']) && $payroll['regular_holiday_hours_worked'])
                <p class="mb-1 text-sm">Regular Holiday Worked<span class="text-xs text-gray-400">
                    ( {{ $payroll['regular_holiday_hours_worked'] / 60 }} Hours )
                </span>:</p>
                @endif
                @if (isset($payroll['special_holiday_hours']) && $payroll['special_holiday_hours'])
                <p class="mb-1 text-sm">Special Holiday:</p>
                @endif
                @if (isset($payroll['special_holiday_hours_worked']) && $payroll['special_holiday_hours_worked'])
                <p class="mb-1 text-sm">Special Holiday Worked <span class="text-xs text-gray-400">
                    ( {{ $payroll['special_holiday_hours_worked'] / 60 }} Hours )
                </span>:</p>
                @endif
                @if (isset($payroll['leaves']) && $payroll['leaves'])
                <p class="mb-1 text-sm">Vacation Leave <span class="text-xs text-gray-400">(16 Hours)</span>:</p>
                @endif
                @if (isset($payroll['taxable_earnings']) && $payroll['taxable_earnings'])
                    @foreach($payroll['taxable_earnings'] as $taxableEarning)
                    <p class="mb-1 text-sm">{{ ucwords($taxableEarning['name']) }}</p>
                    @endforeach
                @endif
                @if (isset($payroll['overtime_minutes']) && $payroll['overtime_minutes'])
                <p class="mb-1 text-sm">Overtime Pay <span class="text-xs text-gray-400">( {{ $payroll['overtime_minutes'] / 60 }} Hours)</span>:</p>
                @endif
                @if (isset($payroll['absent_minutes']) && $payroll['absent_minutes'])
                <p class="mb-1 text-sm">Absent Deduction <span class="text-xs text-gray-400">( {{ $payroll['absent_minutes'] / 60 }} Hours)</span>:</p>
                @endif
            </div>
            <div class="text-right">
                <p class="mb-1 text-sm">P{{ number_format($payroll['basic_salary'], 2, '.', ',') }}</p>
                @if (isset($payroll['regular_holiday_hours_pay']) && $payroll['regular_holiday_hours_pay'])
                <p class="mb-1 text-sm">{{ number_format($payroll['regular_holiday_hours_pay'], 2, '.', ',') }}</p>
                @endif
                @if (isset($payroll['regular_holiday_hours_worked_pay']) && $payroll['regular_holiday_hours_worked_pay'])
                <p class="mb-1 text-sm">{{ number_format($payroll['regular_holiday_hours_worked_pay'], 2, '.', ',') }}</p>
                @endif
                @if (isset($payroll['special_holiday_hours_pay']) && $payroll['special_holiday_hours_pay'])
                <p class="mb-1 text-sm">{{ number_format($payroll['special_holiday_hours_pay'], 2, '.', ',') }}</p>
                @endif
                @if (isset($payroll['special_holiday_hours_worked_pay']) && $payroll['special_holiday_hours_worked_pay'])
                <p class="mb-1 text-sm">{{ number_format($payroll['special_holiday_hours_worked_pay'], 2, '.', ',') }}</p>
                @endif
                @if (isset($payroll['leaves_pay']) && $payroll['leaves_pay'] != 0)
                <p class="mb-1 text-sm">{{ number_format($payroll['leaves_pay'], 2, '.', ',') }}</p>
                @endif
                @if (isset($payroll['taxable_earnings']) && $payroll['taxable_earnings'])
                    @foreach($payroll['taxable_earnings'] as $taxableEarning)
                    <p class="mb-1 text-sm">{{ number_format($taxableEarning['pay'], 2, '.', ',') }}:</p>
                    @endforeach
                @endif
                @if (isset($payroll['overtime_pay']) && $payroll['overtime_pay'])
                <p class="mb-1 text-sm">{{ number_format($payroll['overtime_pay'], 2, '.', ',') }}</p>
                @endif
                @if (isset($payroll['absent_deductions']) && $payroll['absent_deductions'])
                <p class="mb-1 text-sm">-{{ number_format($payroll['absent_deductions'], 2, '.', ',') }}</p>
                @endif
            </div>
        </div>
        <div class="border-t border-gray-300 pt-2 mt-2">
            <div class="flex justify-between">
                <p class="text-sm font-semibold">Gross Income</p>
                <p class="text-sm font-semibold text-right">P{{ number_format($payroll['gross_income'], 2, '.', ',') }}</p>
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
                <p class="mb-1 text-sm">{{ number_format($payroll['sss_contributions'], 2, '.', ',') }}</p>
                <p class="mb-1 text-sm">{{ number_format($payroll['philhealth_contributions'], 2, '.', ',') }}</p>
                <p class="mb-1 text-sm">{{ number_format($payroll['pagibig_contributions'], 2, '.', ',') }}</p>
            </div>
        </div>
        <div class="border-t border-gray-300 pt-2 mt-2">
            <div class="flex justify-between">
                <p class="text-sm font-semibold">Total Contributions</p>
                <p class="text-sm font-semibold text-right">{{ number_format($payroll['total_contributions'], 2, '.', ',') }}</p>
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
                @if (isset($payroll['non_taxable_earnings']) && $payroll['non_taxable_earnings'])
                    @foreach($payroll['non_taxable_earnings'] as $nonTaxableEarning)
                    <p class="mb-1 text-sm">{{ ucwords($nonTaxableEarning['name']) }} <span class="text-xs text-gray-400">(non-taxable)</span></p>
                    @endforeach
                @endif
            </div>
            <div class="text-right">
                <p class="mb-1 text-sm">{{ number_format($payroll['taxable_income'], 2, '.', ',') }}</p>
                <p class="mb-1 text-sm">{{ number_format($payroll['taxable_income'], 2, '.', ',') }}</p>
                @if (isset($payroll['non_taxable_earnings']) && $payroll['non_taxable_earnings'])
                    @foreach($payroll['non_taxable_earnings'] as $nonTaxableEarning)
                    <p class="mb-1 text-sm">{{ number_format($nonTaxableEarning['pay'], 2, '.', ',') }}</p>
                    @endforeach
                @endif
            </div>
        </div>
        <div class="border-t border-gray-300 pt-2 mt-2">
            <div class="flex justify-between">
                <p class="text-sm font-semibold">Net Income</p>
                <p class="text-sm font-semibold text-right">{{ number_format($payroll['net_income'], 2, '.', ',') }}</p>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js-bottom')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('myChart');
    const net = "{{ $payroll['net_income'] }}"
    const contributions = "{{ $payroll['total_contributions'] }}"
    const withheld_tax = "{{ $payroll['withheld_tax'] }}"

    data = {
        datasets: [{
            label: 'Payroll',
            data: [net, contributions, withheld_tax],
            backgroundColor: [
                'rgb(52, 211, 153)',
                'rgb(251, 191, 36)',
                'rgb(96, 165, 250)'
            ],
            hoverOffset: 4
        }]
    };
    new Chart(ctx, {
        type: 'doughnut',
        data: data,
    });
</script>
@endsection
