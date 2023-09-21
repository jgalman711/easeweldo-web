@extends('layouts.default')

@section('content')
<main>
    <section class="bg-gray-100 pt-16">
        <div class="container mx-auto md:flex items-center justify-between pl-6">
            <div class="md:w-1/2">
                <h1 class="text-7xl font-bold mb-4">Effortless Payroll,</h1>
                <h1 class="text-7xl font-bold mb-4">Simplified</h1>
                <p class="text-lg lg:text-3xl font-semibold mb-8">Elevate your payroll experience with ease.</p>
                <div class="text-center sm:text-left py-8 lg:pt-32">
                    <a href="{{ route('subscriptions.index', ['subscription_id' => 2]) }}" class="inline-block bg-blue-800 text-white font-semibold py-4 px-6 lg:py-6 lg:px-12 rounded-full shadow-md hover:bg-blue-600 transition duration-300 mx-auto lg:text-xl">
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
        <div class="bg-gray-100 py-16" id="solutions">
            <div class="container mx-auto px-4">
                <div class="mb-12 mx-auto max-w-6xl">
                    <h2 class="text-4xl text-center font-bold mb-4 text-blue-800">
                        Our Core Solutions
                    </h2>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                    <div class="bg-white shadow-md p-6 lg:py-6 lg:px-10 row-span-3">
                        <div class="flex flex-col relative">
                            <img src="assets/images/feature-icons/icon2.png" alt="Feature Icon" class="w-16 h-16 mb-6">
                            <h3 class="text-lg font-bold mb-4">Automated Payroll Calculation</h3>
                        </div>
                        <p class="text-gray-700 mb-4 text-justify">
                            Our cutting-edge solution revolutionizes the payroll process, providing you
                            with accurate and error-free calculations. With our automated system, you can
                            bid farewell to manual computations that often lead to mistakes.
                        </p>
                        <p class="text-gray-700 mb-4 text-justify">
                            Our robust platform handles various aspects of payroll, including calculating
                            salaries, deductions, contributions, and withheld taxes. You can trust our
                            system to accurately calculate employee compensation, taking into account
                            all necessary components.
                        </p>
                    </div>
                    <div class="bg-white shadow-md p-6 lg:p-6">
                        <div class="flex flex-col relative">
                            <img src="assets/images/feature-icons/icon5.png" alt="Feature Icon" class="w-16 h-16 mb-4">
                            <h3 class="text-lg font-bold mb-4">Flexible Shift Management</h3>
                        </div>
                        <p class="text-gray-700 mb-2 text-justify">
                            Create and manage multiple schedules to be assigned to their employees
                        </p>
                        <p class="text-gray-700 mb-2 text-justify">
                            With this system in place, businesses have the ability to adapt to accommodate
                            various work arrangements.
                        </p>
                    </div>
                    <div class="bg-white shadow-md p-6 lg:p-6">
                        <div class="flex flex-col relative">
                            <img src="assets/images/feature-icons/icon9.png" alt="Feature Icon" class="w-16 h-16 mb-4">
                            <h3 class="text-lg font-bold mb-4">Integration of Existing Biometrics</h3>
                        </div>
                        <p class="text-gray-700 mb-2 text-justify">
                            Incorporate an organization's existing biometric systems into a unified and
                            centralized framework.
                        </p>
                        <p class="text-gray-700 mb-2 text-justify">
                            Allow seamless authentication using biometric data such as fingerprints or
                            facial recognition.
                        </p>
                    </div>
                    <div class="bg-white shadow-md p-6 lg:p-6 row-span-2">
                        <div class="flex flex-col relative">
                            <img src="assets/images/feature-icons/icon6.png" alt="Feature Icon" class="w-16 h-16 mb-4">
                            <h3 class="text-lg font-bold mb-4">Customizable Deductions and Benefits</h3>
                        </div>
                        <p class="text-gray-700 mb-2 text-justify">
                            Provide flexibility in defining employee deductions, such as taxes, contributions,
                            and other withholdings.
                        </p>
                        <p class="text-gray-700 mb-2 text-justify">
                            Additionally, enable customization of employee benefits, including health
                            insurance, bonuses, and more.
                        </p>
                    </div>
                    <div class="bg-white shadow-md p-6 lg:p-6 row-span-2">
                        <div class="flex flex-col relative">
                            <img src="assets/images/feature-icons/icon7.png" alt="Feature Icon" class="w-16 h-16 mb-4">
                            <h3 class="text-lg font-bold mb-4">Comprehensive Reporting</h3>
                        </div>
                        <p class="text-gray-700 mb-2 text-justify">
                            Track employer contributions and withheld taxes, and access vital reports for
                            financial analysis and compliance purposes.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mx-auto px-4 py-16">
            <div class="mb-12 mx-auto max-w-5xl">
                <h2 class="text-4xl text-center font-bold mb-4 text-blue-800">
                    What Are The Advantages?
                </h2>
                <p class="text-lg lg:text-xl text-center">
                    Easeweldo simplifies administrative tasks, automates processes, ensures accurate
                    calculations, and facilitates compliance with legal requirements. It also saves
                    time and resources, and provides transparent reporting.
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12 pt-14">
                <div class="bg-gray-100 rounded-lg p-12 flex flex-col items-center relative mt-0 lg:mt-2">
                    <img src="assets/images/streamline-icon.png" class="h-32 w-32 absolute top-0 left-1/8 transform -translate-y-1/2" alt="Icon" />
                    <h3 class="text-center text-2xl lg:text-4xl font-semibold mb-8 mt-12">
                        Streamlined Payroll Management
                    </h3>
                    <p class="text-gray-700 text-center text-xl">Simplify payroll management with Easeweldo.
                        Automate calculations, tax deductions, and benefits to save time and reduce errors.
                        Say goodbye to manual tasks and spreadsheets.
                    </p>
                </div>
                <div class="bg-gray-100 rounded-lg p-12 flex flex-col items-center relative mt-14 lg:mt-2">
                    <img src="assets/images/accuracy-icon.png" class="h-32 w-32 absolute top-0 left-1/8 transform -translate-y-1/2" alt="Icon" />
                    <h3 class="text-center text-2xl lg:text-4xl font-semibold mb-8 mt-12">
                        Enhanced Efficiency and Accuracy
                    </h3>
                    <p class="text-gray-700 text-center text-xl">
                        Ensure accurate and efficient payroll processing with Easeweldo. Eliminate manual
                        entry and minimize errors, freeing up time for strategic business initiatives.
                    </p>
                </div>
                <div class="bg-gray-100 rounded-lg p-12 flex flex-col items-center relative mt-14 lg:mt-2">
                    <img src="assets/images/compliant-icon.png" class="h-32 w-32 absolute top-0 left-1/8 transform -translate-y-1/2" alt="Icon" />
                    <h3 class="text-center text-2xl lg:text-4xl font-semibold mb-8 mt-12">
                        Compliance with Regulations
                    </h3>
                    <p class="text-gray-700 text-center text-xl">Stay compliant effortlessly. Easeweldo
                        keeps you up-to-date with labor laws and tax regulations. Our system automates
                        calculations, ensuring payroll compliance and minimizing penalties.
                    </p>
                </div>
            </div>
        </div>
        <div class="container mx-auto py-16">
            <h2 class="text-4xl text-center font-bold mb-14 text-blue-800">Why Us?</h2>
            <div class="flex flex-wrap -mx-4">
                <div class="w-full sm:w-1/2 md:w-1/3 px-4 mb-8 my-10">
                    <div class="rounded-lg flex flex-col items-center relative mt-0 lg:mt-2">
                        <img src="assets/images/reliability.png" alt="Reliability" class="w-56 h-56">
                        <h3 class="text-3xl font-bold my-7">Reliability</h3>
                        <p class="text-xl font-semibold text-center w-64">
                            Count on us to deliver consistent and accurate results.
                        </p>
                    </div>
                </div>
                <div class="w-full sm:w-1/2 md:w-1/3 px-4 mb-8 my-10">
                    <div class="rounded-lg flex flex-col items-center relative mt-0 lg:mt-2">
                        <img src="assets/images/simplicity.png" alt="Simplicity" class="w-56 h-56">
                        <h3 class="text-3xl font-bold my-7">Simplicity</h3>
                        <p class="text-xl font-semibold text-center w-64">
                            Driven to create an intuitive and user-friendly payroll system.
                        </p>
                    </div>
                </div>
                <div class="w-full sm:w-1/2 md:w-1/3 px-4 mb-8 my-10">
                    <div class="rounded-lg flex flex-col items-center relative mt-0 lg:mt-2">
                        <img src="assets/images/partnership.png" alt="Partnership" class="w-56 h-56">
                        <h3 class="text-3xl font-bold my-7">Partnership</h3>
                        <p class="text-xl font-semibold text-center w-64">
                            We see ourselves as more than just a service provider; we are your trusted partner.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-primary py-16" id="about">
            <div class="container mx-auto px-4">
                <div class="flex flex-wrap justify-between">
                    <div class="w-full md:w-2/5 pb-4">
                        <h2 class="text-4xl lg:text-6xl font-bold mb-8 lg:hidden block text-white">
                            Get to Know Us Better
                        </h2>
                        <div class="image-container">
                        <img src="assets/images/overview.png" alt="Image description" class="w-full">
                        </div>
                    </div>
                    <div class="w-full md:w-3/5">
                        <div class="text-white pl-0 md:pl-12 pt-10">
                            <h2 class="text-4xl font-bold mb-8 hidden lg:block">
                                Get to Know Us Better
                            </h2>
                            <hr class="mb-8 border-white-300 border-t-4 w-20 hidden lg:block">
                            <p class="mb-8 text-lg text-lg lg:text-xl text-justify">
                                At Easeweldo, we understand the challenges and complexities of managing payroll
                                for your business. We are more than just a payroll system; we are your trusted
                                partner in simplifying the payroll process and ensuring the smooth operation of
                                your company.
                            </p>
                            <p class="mb-8 text-lg text-lg lg:text-2xl text-justify">
                                We are dedicated to providing you with a seamless payroll management experience,
                                saving you valuable time and effort. With Easeweldo, you can rely on our
                                state-of-the-art technology to automate calculations, tax deductions, and
                                benefit contributions, eliminating the need for manual tasks and reducing the
                                risk of errors. We are committed to staying up-to-date with the latest labor
                                laws and tax regulations, ensuring your payroll remains compliant.
                            </p>
                            <p class="mb-8 text-lg text-lg lg:text-2xl text-justify">
                                Our goal is to empower you to focus on what matters most – growing your business
                                and nurturing your employees, while we take care of your payroll needs. Trust
                                Easeweldo to simplify your payroll management to help your business thrive.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="roadmap">
            <div class="container mx-auto px-4 py-16 max-w-6xl">
                <h2 class="text-4xl text-center font-bold mb-8 text-blue-800">
                    Unveiling Our Inspiring Roadmap
                </h2>
                <p class="text-lg lg:text-xl text-center">
                    We're excited to present our roadmap, filled with groundbreaking advancements, innovative
                    solutions,and transformative experiences. Each milestone brings us closer to empowering you
                    and revolutionizing the way you work, thrive, and succeed. Get ready to embrace the
                    extraordinary as we celebrate the journey ahead, unlocking a world of endless possibilities.
                </p>
            </div>
        </div>
        <div class="flex justify-center px-4 py-16">
            <img src="assets/images/timeline.png" alt="Roadmap" class="max-w-full h-auto">
        </div>
        <div class="bg-primary py-16" id="contact">
            <div class="container mx-auto text-white px-4">
                <h2 class="text-4xl font-bold mb-8">Let Us Help You</h2>
                <p class="text-lg lg:text-xl mb-4 max-w-4xl">
                    Contact us today to unlock the power of Easeweldo for effortless payroll management. We are
                    ready to assist you and answer any questions.
                </p>
                <p class="text-lg lg:text-2xl mb-12 max-w-4xl">
                    Click <a href="{{ route('subscriptions.index', ['subscription_id' => 2]) }}" target="_blank" class="text-blue-900 font-semibold hover:text-blue-600">here</a>
                    to take advantage of our free 90-days trial and experience streamlined payroll
                    processes firsthand.
                </p>
                <div class="flex items-center mb-4">
                    <img src="assets/images/phone-icon.png" alt="Phone" class="w-10 h-10 mr-4">
                    <p class="text-lg lg:text-xl font-semibold">
                        <a href="tel:{{ env('EASEWELDO_CONTACT_NUMBER') }}">
                            {{ env('EASEWELDO_CONTACT_NUMBER') }}
                        </a>
                    </p>
                </div>
                <div class="flex items-center">
                    <img src="assets/images/email-icon.png" alt="Email" class="w-10 h-10 mr-4">
                    <p class="text-lg lg:text-xl font-semibold">
                        <a href="mailto:{{ env('EASEWELDO_EMAIL') }}">{{ env('EASEWELDO_EMAIL') }}</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
