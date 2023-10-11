@extends('layouts.default')

@section('content')
<main>
    <section class="pt-24">
        <div class="container mx-auto md:flex items-center justify-between pl-6">
            <div class="md:w-1/2">
                <h1 class="text-2xl lg:text-6xl font-bold mb-1 md:mb-4">Experience the future of</h1>
                <h1 class="text-2xl lg:text-6xl font-bold mb-1 md:mb-4">Payroll Management</h1>
                <p class="text-md lg:text-xl my-4 md:my-8">
                    Streamline processes, ensure accuracy, and embrace ease in every aspect of payroll
                    administration with our <span class="text-blue-800 font-semibold"> AI-Powered Solution</span>.
                </p>
                <div class="text-center sm:text-left py-8 lg:pt-32">
                    <a href="{{ route('subscriptions.index', ['subscription_id' => 2]) }}" class="inline-block bg-blue-800 text-white font-semibold py-4 px-6 lg:py-6 lg:px-12 rounded-xl shadow-md hover:bg-blue-600 transition duration-300 mx-auto lg:text-xl">
                        Start 90-Days Trial Now
                    </a>
                </div>
            </div>
            <div class="md:w-1/2">
                <img src="assets/images/hero-right-3.png" alt="Your Image" class="w-full h-auto max-h-full">
            </div>
        </div>
    </section>
    <section class="bg-white">
        <div class="bg-blue-100">
            <div class="md:flex item-center container mx-auto px-4 py-8 md:py-16">
                <div class="lg:w-1/2 p-8 flex flex-wrap items-center">
                    <img src="{{ asset('assets/images/what-is.png') }}" alt="Image or Video" class="w-full h-auto">
                </div>
                <div class="lg:w-1/2 text-gray-800 md:p-8">
                    <h2 class="text-4xl font-bold mb-4 text-blue-800">
                        What is Easeweldo?
                    </h2>
                    <p class="mb-4 text-md md:text-lg">
                        Easeweldo is your trusted partner in modern workforce management. We provide a suite
                        of cutting-edge solutions to simplify payroll, optimize HR processes, and enhance employee
                        management. With a commitment to efficiency and compliance, Easeweldo empowers businesses
                        to save time, reduce errors, and achieve more.
                    </p>
                    <p class="mb-4 text-md md:text-lg">
                        Discover how we can transform your HR operations and propel your business forward.
                    </p>
                    <a href="{{ route('subscriptions.index', ['subscription_id' => 2]) }}"
                        class="text-lg inline-flex items-center py-4 px-6 font-medium text-center text-white bg-blue-700 rounded-md hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Start Free Trial Now
                        <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="container mx-auto px-4 py-16" id="benefits">
            <div class="mb-16 mx-auto max-w-6xl">
                <h2 class="text-4xl text-center font-bold mb-4 text-blue-800">
                    Discover the Benefits
                </h2>
                <p class="text-lg lg:text-xl text-center">
                    At Easeweldo, we're revolutionizing the way businesses manage their payroll processes.
                    Our cutting-edge AI technology simplifies timekeeping and payroll management,
                    making it effortless and error-free.
                </p>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <div class="bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a class="p-5">
                        <img
                            class="rounded-t-lg px-4"
                            src="{{ asset('assets/images/benefits/error-free.png') }}"
                            alt=""
                        />
                    </a>
                    <div class="p-5">
                        <a>
                            <h5 class="mb-4 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                Double-Checked Accuracy
                            </h5>
                        </a>
                        <p class="mb-4 font-normal text-gray-700 dark:text-gray-400">
                            Our advanced AI algorithms ensure that your tasks are executed with
                            unparalleled precision. By reducing the reliance on manual inputs, we eliminate the
                            risk of human error, making your work smoother and more reliable.
                        </p>
                        {{-- HIDE THIS BUTTON FOR AWHILE
                        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Read more
                            <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                        </a>
                        --}}
                    </div>
                </div>
                <div class="bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a class="p-5">
                        <img class="rounded-t-lg px-4" src="{{ asset('assets/images/benefits/time-saving.png') }}" alt="" />
                    </a>
                    <div class="p-5">
                        <a>
                            <h5 class="mb-4 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                Maximizing Productivity
                            </h5>
                        </a>
                        <p class="mb-4 font-normal text-gray-700 dark:text-gray-400">
                            Our streamlined processes are designed to automate time-consuming tasks and allows you
                            to allocate your resources where they matter most – growing your business and focusing
                            on strategic initiatives.
                        </p>
                        {{-- HIDE THIS BUTTON FOR AWHILE
                        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Read more
                            <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                        </a>
                        --}}
                    </div>
                </div>
                <div class="bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a class="p-5">
                        <img class="rounded-t-lg px-4" src="{{ asset('assets/images/benefits/compliant.png') }}" alt="" />
                    </a>
                    <div class="p-5">
                        <a>
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                Effortless Tax Management
                            </h5>
                        </a>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                            We leverage advanced software and AI to streamline tax calculations, deductions,
                            and reporting, making sure your business meets its tax obligations without the headaches
                            and ensures that your taxes are filed accurately and promptly
                        </p>
                        {{-- HIDE BUTTON
                        <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Read more
                            <svg class="w-3.5 h-3.5 ml-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                        </a>
                        --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-gray-100 py-16" id="solutions">
            <div class="container mx-auto px-4">
                <div class="mb-16 mx-auto max-w-6xl">
                    <h2 class="text-4xl text-center font-bold mb-4 text-blue-800">
                        Our Core Solutions
                    </h2>
                    <p class="text-lg lg:text-xl text-center">
                        Explore our range of comprehensive solutions designed to streamline your operations,
                        enhance efficiency, and boost productivity. Learn how our tailored solutions can address
                        your unique challenges and empower you to achieve more.
                    </p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-5">
                    <div class="bg-white shadow-md p-8 row-span-2">
                        <div class="flex items-center mt-4 mb-8">
                            <img src="assets/images/feature-icons/employee-management.png" alt="Feature Icon" class="w-auto h-16 mr-4">
                            <h3 class="text-xl font-bold text-gray-700">Streamline HR Operations</h3>
                        </div>
                        <p class="text-gray-700">
                            Effortlessly manage your workforce, from onboarding to retirement, ensuring smooth HR operations.
                        </p>
                        <div class="my-4 pt-4 border-t-2 border-gray-200">
                            <h3 class="text-gray-700 font-semibold">Popular Features:</h3>
                            <ul role="list" class="space-y-5 my-7">
                                <li class="flex space-x-3 items-center">
                                    <svg class="flex-shrink-0 w-4 h-4 text-blue-600 dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                                    </svg>
                                    <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400">
                                        Employee Management
                                    </span>
                                </li>
                                <li class="flex space-x-3">
                                    <svg class="flex-shrink-0 w-4 h-4 text-blue-600 dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                                    </svg>
                                    <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400">
                                        Company Settings
                                    </span>
                                </li>
                                <li class="flex space-x-3">
                                    <svg class="flex-shrink-0 w-4 h-4 text-blue-600 dark:text-blue-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                                    </svg>
                                    <span class="text-base font-normal leading-tight text-gray-500 dark:text-gray-400">Integration help</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="bg-white shadow-md p-8">
                        <div class="flex items-center mt-4 mb-8">
                            <img src="assets/images/feature-icons/customize.png" alt="Feature Icon" class="w-auto h-16 mr-4">
                            <h3 class="text-xl font-bold text-gray-700">Tailored Compensation</h3>
                        </div>
                        <p class="text-gray-700">
                            Customize employee pay structures with precision, offering flexibility in allowances and deductions.
                        </p>
                    </div>
                    <div class="bg-white shadow-md p-8">
                        <div class="flex items-center mt-4 mb-8">
                            <img src="assets/images/feature-icons/bonus.png" alt="Feature Icon" class="w-auto h-16 mr-4">
                            <h3 class="text-xl font-bold text-gray-700 mb-">Fulfilling Extra Compensation</h3>
                        </div>
                        <p class="text-gray-700">
                            Easily handle 13th-month payments and special payrolls to keep your workforce happy.
                        </p>
                    </div>
                    <div class="bg-white shadow-md p-8">
                        <div class="flex items-center mt-4 mb-8">
                            <img src="assets/images/feature-icons/schedule.png" alt="Feature Icon" class="w-auto h-16 mr-4">
                            <h3 class="text-xl font-bold text-gray-700">Flexible Work Arrangements</h3>
                        </div>
                        <p class="text-gray-700">
                            Adapt work schedules to fit your business needs and employee preferences seamlessly.
                        </p>
                    </div>
                    <div class="bg-white shadow-md p-8">
                        <div class="flex items-center mt-4 mb-8">
                            <img src="assets/images/feature-icons/qr.png" alt="Feature Icon" class="w-auto h-16 mr-4">
                            <h3 class="text-xl font-bold text-gray-700">Efficient Time Tracking</h3>
                        </div>
                        <p class="text-gray-700">
                            Enable quick and accurate time tracking with QR code-based clock-in and clock-out.
                        </p>
                    </div>
                    <div class="bg-white shadow-md p-8">
                        <div class="flex items-center mt-4 mb-8">
                            <img src="assets/images/feature-icons/payslip.png" alt="Feature Icon" class="w-auto h-16 mr-4">
                            <h3 class="text-xl font-bold text-gray-700">Simplified Payroll Records</h3>
                        </div>
                        <p class="text-gray-700">
                            Provide employees with clear, digital payslips for easy access and reference.
                        </p>
                    </div>
                    <div class="bg-white shadow-md p-8">
                        <div class="flex items-center mt-4 mb-8">
                            <img src="assets/images/feature-icons/reports.png" alt="Feature Icon" class="w-auto h-16 mr-4">
                            <h3 class="text-xl font-bold text-gray-700">Insightful Analytics</h3>
                        </div>
                        <p class="text-gray-700">
                            Generate comprehensive reports for data-driven decision-making and payroll transparency.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-16" id="pricing">
            <div class="container mx-auto px-4">
                <div class="mb-12 mx-auto max-w-5xl">
                    <h2 class="text-4xl text-center font-bold mb-2 text-blue-800">
                        Our Subscription Plans
                    </h2>
                    <p class="text-lg lg:text-xl text-center">
                        Choose the perfect plan that fits your needs and budget.
                    </p>
                </div>
                @include('partials.subscription-cards-2', ['subscriptions' => $subscriptions])
            </div>
        </div>
        <div class="bg-blue-100">
            <div class="md:flex item-center container mx-auto px-4 py-8 md:py-16">
                <div class="lg:w-1/2 p-8 flex flex-wrap items-center">
                    <img src="{{ asset('assets/images/digital-banking.png') }}" alt="Image or Video" class="w-full h-auto">
                </div>
                <div class="lg:w-1/2 text-gray-800 md:p-8 flex flex-wrap items-center">
                    <div>
                        <h2 class="text-4xl font-bold mb-8 text-blue-800">
                            What's Next at Easeweldo?
                        </h2>
                        <p class="mb-8 text-md md:text-lg">
                        Exciting developments are on the horizon at Easeweldo! By Q1 of 2024, our dedicated team will
                        be hard at work, gearing up to implement the highly anticipated feature of auto disbursement.
                        </p>
                        <p class="mb-8 text-md md:text-lg">
                            With this enhancement, employee salaries will be sent directly to their bank accounts
                            following payroll generation, providing you with even more convenience and efficiency.
                        </p>
                        <p class="mb-8 text-md md:text-lg">
                            Stay tuned for these upcoming innovations that will take Easeweldo to the next level
                            in workforce management.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-gray-800 py-10 px-4" id="contact">
            <div class="mx-auto text-white w-full mx-auto max-w-screen-2xl">
                <h2 class="text-4xl font-bold mb-8">Let Us Help You</h2>
                <p class="text-lg mb-4 max-w-4xl">
                    Contact us today to unlock the power of Easeweldo for effortless payroll management. We are
                    ready to assist you and answer any questions.
                </p>
                <p class="text-lg mb-12 max-w-4xl">
                    Click <a href="{{ route('subscriptions.index', ['subscription_id' => 2]) }}" target="_blank" class="text-blue-500 font-semibold hover:text-blue-400">here</a>
                    to take advantage of our free 90-days trial and experience streamlined payroll
                    processes firsthand.
                </p>
                <div class="flex items-center mb-4">
                    <img src="assets/images/phone-icon.png" alt="Phone" class="w-10 h-10 mr-4">
                    <p class="text-lg">
                        <a href="tel:{{ env('EASEWELDO_CONTACT_NUMBER') }}">
                            {{ env('EASEWELDO_CONTACT_NUMBER') }}
                        </a>
                    </p>
                </div>
                <div class="flex items-center">
                    <img src="assets/images/email-icon.png" alt="Email" class="w-10 h-10 mr-4">
                    <p class="text-lg">
                        <a href="mailto:{{ env('EASEWELDO_EMAIL') }}">{{ env('EASEWELDO_EMAIL') }}</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
                                                                                                                         