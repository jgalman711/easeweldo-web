@extends('layouts.cart')

@section('seo')
<title>Easeweldo: Select Subscription Plan</title>
<meta name="description" content="Select a subscription plan that fits your needs. Log in to your Easeweldo account and manage your payroll with ease and efficiency.">
<meta name="keywords" content="payroll, subscription plan, payroll software, payroll management, payroll system, employee login">
<meta name="author" content="Easeweldo Team">

<meta property="og:title" content="Easeweldo: Select Subscription Plan">
<meta property="og:description" content="Select a subscription plan that fits your needs. Log in to your Easeweldo account and manage your payroll with ease and efficiency.">
<meta property="og:image" content="assets/images/home.png">
<meta property="og:url" content="https://easeweldo.com/select-plan">
<meta property="og:type" content="website">
@endsection

@section('content')
<div class="container mx-auto mt-8 max-w-6xl px-4">
    <h1 class="text-4xl font-semibold mb-4">You're almost there! Complete your subscription</h1>
    <p class="text-gray-500 text-lg mb-6">Selected plan: <span class="font-semibold">{{ $subscription['title'] }}</span></p>
    <form action="subscriptions" method="POST">
        @csrf
        <div class="flex items-center mb-6">
            <label class="text-2xl font-semibold mb-1 mr-2">Number of Employees:</label>
            <input type="number" name="employee_count" id="employee-count" value="{{ $employee_count > 1 ? $employee_count : 1 }}" class="text-2xl w-20 px-3 py-1 rounded-md border border-gray-300 focus:ring-blue-500 focus:border-blue-500" min="1">
        </div>
        <h2 class="text-2xl font-semibold my-6">Choose Period:</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 text-center">
            @foreach ($subscription['subscription_prices'] as $details)
            <div class="relative">
                @if (number_format($details['savings'], 2) > 0)
                <div class="oval absolute -top-8 left-1/2 transform -translate-x-1/2 translate-y-1/2 w-auto h-9 bg-gray-200 rounded-full text-center font-semibold pt-2 px-3 text-sm @if($details['months'] == 36) selected-oval @endif">
                    SAVE P{{ number_format($details['savings'], 2) }}
                </div>
                @endif
                <label class="cursor-pointer">
                    <input type="radio" name="months" value="{{ $details['months'] }}" class="hidden" @if($details['months'] == 36) checked @endif/>
                    <div class="card bg-white rounded-lg p-6 border border-gray-300 hover:border-blue-500 transition duration-300 @if($details['months'] == 36) selected-card @endif" data-month="{{ $details['months'] }}" data-price="{{ $details['price_per_employee'] }}">
                        <p class="text-md font-semibold text-gray-500 mt-6 mb-8">{{ $details['months'] }} Month</p>
                        <h3 class="text-5xl font-semibold mb-2 text-blue-800">P{{ $details['price_per_employee'] }}</h3>
                        <p class="text-gray-500 font-semibold mb-4">user / month</p>
                        <p class="text-gray-500">Plan renews at {{ $details['months'] }} month after today.</p>
                    </div>
                </label>
            </div>
            @endforeach
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md my-14">
            <p class="text-xl font-semibold">Total Amount: <span id="total-amount" class="text-3xl text-blue-800">P{{ number_format($total_amount, 2) }}</span></p>
            <p class="text-gray-800 text-md font-semibold mb-6">You saved: <span id="total-saved" class="text-lg text-green-600">P{{ number_format($total_saved, 2) }}</span></p>
            <p class="text-gray-800 mb-4 text-lg">
                Please deposit the calculated amount to one of the provided bank accounts:
            </p>
            @include('partials.payment-options')
            <input type="text" name="subscription_id" id="subscription_id-count" value="{{ $subscription['id'] }}" class="hidden" min="1">
            <button type="submit" class="bg-blue-800 text-white text-xl font-semibold px-6 py-4 mt-6 rounded-full hover:bg-blue-600 transition duration-300">Subscribe</button>
        </div>
    </form>
</div>
@endsection

@section('js-bottom')
<script type="text/javascript">
    const totalAmountSpan = document.getElementById('total-amount');
    const totalSavedSpan = document.getElementById('total-saved');
    const employeeCountInput = document.getElementById('employee-count');

    const cards = document.querySelectorAll('.card');
    const ovals = document.querySelectorAll('.oval');

    let selectedCard = document.querySelector('.selected-card');

    function calculate(card) {
        if (!card) {
            return;
        }
        const dataMonth = card.getAttribute('data-month');
        const dataPrice = card.getAttribute('data-price');
        const months = parseInt(dataMonth, 10);
        const price = parseFloat(dataPrice, 10);
        const employeeCount = parseInt(employeeCountInput.value, 10);
        const totalAmount = months * employeeCount * price;
        const originalAmount = months * employeeCount * parseFloat('{{ $original_plan["price_per_employee"] }}');
        const totalSaved = originalAmount - totalAmount;
        const formattedTotalSaved = 'P' + totalSaved.toLocaleString('en-PH', { minimumFractionDigits: 2 });
        const formattedTotalAmount = 'P' + totalAmount.toLocaleString('en-PH', { minimumFractionDigits: 2 });
        totalAmountSpan.textContent = formattedTotalAmount;
        totalSavedSpan.textContent = formattedTotalSaved;
    }

    cards.forEach(card => {
        card.addEventListener('click', () => {
            cards.forEach(c => c.classList.remove('selected-card'));
            ovals.forEach(o => o.classList.remove('selected-oval'));
            card.classList.add('selected-card');
            selectedCard = card;
            const oval = card.closest('.relative').querySelector('.oval');
            if (oval) {
                cards.forEach(c => c.classList.remove('selected-card'));
                oval.classList.add('selected-oval');
                card.classList.add('selected-card');
            }
            calculate(card);
        });
    });

    employeeCountInput.addEventListener('input', () => {
        calculate(selectedCard);
    });
</script>
@endsection
