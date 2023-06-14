<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Easeweldo: Elevate Your Payroll Experience with Ease!</title>

        <!-- Meta Tags -->
        <meta name="description" content="Easeweldo offers an exceptional payroll experience with ease and efficiency. Streamline your payroll process with our reliable solutions.">
        <meta name="keywords" content="payroll, payroll software, payroll management, payroll system, payroll solutions">
        <meta name="author" content="Easeweldo Team">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

        <link rel="icon" href="/favicon.ico" type="image/x-icon">

        <meta property="og:title" content="Easeweldo: Elevate Your Payroll Experience with Ease!">
        <meta property="og:description" content="Easeweldo offers an exceptional payroll experience with ease and efficiency. Streamline your payroll process with our reliable solutions.">
        <meta property="og:image" content="assets/images/home.png">
        <meta property="og:url" content="https://easeweldo.tech">
        <meta property="og:type" content="website">
    </head>
    <body class="antialiased">
        <style>
            body {
                font-family: 'Quicksand', sans-serif;
            }
            .text-primary {
                color: #5ba5f3;
            }
            .bg-primary {
                background: #5ba5f3
            }
        </style>
        <main>
            <section class="hero bg-cover bg-center pt-16" style="background-image: url('assets/images/hero-2.png')">
                <div class="container lg:mx-auto mx-1 flex items-center justify-between">
                    <div class="flex items-center">
                        <img src="assets/images/logo.png" alt="Easeweldo Logo" class="h-12 w-auto"><h1 class="text-4xl lg:text-4xl font-bold ml-4">Easeweldo</h1>
                    </div>
                    <nav>
                        <ul class="flex space-x-4 hidden">
                            <li><a href="#" class="text-lg font-medium">Home</a></li>
                            <li><a href="#" class="text-lg font-medium">About</a></li>
                            <li><a href="#" class="text-lg font-medium">Services</a></li>
                            <li><a href="#" class="text-lg font-medium">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="container mx-auto pt-32 lg:py-64">
                    <h1 class="text-6xl lg:text-8xl font-bold mb-4">Effortless Payroll,</h1>
                    <h1 class="text-6xl lg:text-8xl font-bold mb-4">Simplified</h1>
                    <p class="text-2xl lg:text-4xl font-semibold mb-8">Streamline your business operations with ease.</p>
                    <div class="text-center sm:text-left py-8 lg:pt-32">
                        <!-- <a href="#" class="inline-block bg-blue-500 text-white font-semibold py-3 px-6 rounded-lg shadow-md hover:bg-blue-600 transition duration-300 mx-auto">
                            Start 90-Day Trial Now
                        </a> -->
                        <a href="#" class="inline-block">
                            <img src="assets/images/trial-button-primary.png" alt="Button" class="h-16">
                        </a>
                    </div>
                </div>
            </section>
            <section class="bg-white">
                <div class="container mx-auto px-4 py-16">
                    <div class="mb-12 mx-auto max-w-6xl">
                        <h2 class="text-4xl lg:text-6xl text-center font-bold mb-4 text-primary">What We Can Do For You</h2>
                        <p class="text-lg lg:text-2xl text-center">With Easeweldo as your trusted payroll system, you can simplify your payroll processes, improve accuracy, ensure compliance, and gain valuable insights into your financials. Our aim is to empower your business by taking the burden of payroll management off your shoulders, allowing you to focus on what matters most – growing and nurturing your business.</p>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 pt-14">
                        <div class="bg-gray-200 rounded-lg p-8 flex flex-col items-center relative mt-0 lg:mt-2">
                            <img src="assets/images/streamline-icon.png" class="h-32 w-32 absolute top-0 left-1/8 transform -translate-y-1/2" alt="Icon" />
                            <h3 class="text-center text-2xl lg:text-4xl font-bold mb-8 mt-12">Streamlined Payroll Management</h3>
                            <p class="text-gray-700 text-center text-xl">Simplify payroll management with Easeweldo. Automate calculations, tax deductions, and benefits to save time and reduce errors. Say goodbye to manual tasks and spreadsheets.</p>
                        </div>
                        <div class="bg-gray-200 rounded-lg p-8 flex flex-col items-center relative mt-14 lg:mt-2">
                            <img src="assets/images/accuracy-icon.png" class="h-32 w-32 absolute top-0 left-1/8 transform -translate-y-1/2" alt="Icon" />
                            <h3 class="text-center text-2xl lg:text-4xl font-bold mb-8 mt-12">Enhanced Efficiency and Accuracy</h3>
                            <p class="text-gray-700 text-center text-xl">Ensure accurate and efficient payroll processing with Easeweldo. Eliminate manual entry and minimize errors, freeing up time for strategic business initiatives.</p>
                        </div>
                        <div class="bg-gray-200 rounded-lg p-8 flex flex-col items-center relative mt-14 lg:mt-2">
                            <img src="assets/images/compliant-icon.png" class="h-32 w-32 absolute top-0 left-1/8 transform -translate-y-1/2" alt="Icon" />
                            <h3 class="text-center text-2xl lg:text-4xl font-bold mb-8 mt-12">Compliance with Regulations</h3>
                            <p class="text-gray-700 text-center text-xl">Stay compliant effortlessly. Easeweldo keeps you up-to-date with labor laws and tax regulations. Our system automates calculations, ensuring payroll compliance and minimizing penalties.</p>
                        </div>
                    </div>
                </div>
                <div class="bg-primary py-16">
                    <div class="container mx-auto px-4">
                        <div class="mb-12 mx-auto max-w-6xl">
                            <h2 class="text-4xl lg:text-6xl text-center font-bold mb-4 text-white">Discover Our Solutions</h2>
                        </div>
                        <div class="grid grid-cols-4 gap-4">
                            <div class="bg-white shadow-md px-10 py-12">
                                <div class="flex flex-col relative">
                                    <img src="assets/images/feature-icons/icon1.png" alt="Feature Icon" class="w-16 h-16 mb-6">
                                    <h3 class="text-lg font-bold">Time and Attendance Tracking</h3>
                                </div>
                                <p class="text-gray-700">Track employee working hours, attendance, and time off.</p>
                            </div>
                            <div class="bg-white shadow-md px-10 py-12">
                                <div class="flex flex-col relative">
                                    <img src="assets/images/feature-icons/icon2.png" alt="Feature Icon" class="w-16 h-16 mb-6">
                                    <h3 class="text-lg font-bold">Automated Payroll Calculation</h3>
                                </div>
                                <p class="text-gray-700">Automatically calculate salaries, deductions, and taxes based on employee data.</p>
                            </div>
                            <div class="bg-white shadow-md px-10 py-12">
                                <div class="flex flex-col relative">
                                    <img src="assets/images/feature-icons/icon3.png" alt="Feature Icon" class="w-16 h-16 mb-6">
                                    <h3 class="text-lg font-bold">Efficient Employee Management</h3>
                                </div>
                                <p class="text-gray-700">Simplify and optimize employee management processes for seamless administration, from onboarding to payroll, using efficient tools and workflows.</p>
                            </div>
                            <div class="bg-white shadow-md px-10 py-12">
                                <div class="flex flex-col relative">
                                    <img src="assets/images/feature-icons/icon4.png" alt="Feature Icon" class="w-16 h-16 mb-6">
                                    <h3 class="text-lg font-bold">QR Code Time Tracking</h3>
                                </div>
                                <p class="text-gray-700">Streamline clock-in and clock-out processes using QR codes as a cost-effective alternative to biometrics for employee attendance tracking.</p>
                            </div>
                        </div>
                        <div class="grid grid-cols-4 gap-4 mt-4">
                            <div class="bg-white shadow-md px-10 py-12">
                                <div class="flex flex-col relative">
                                    <img src="assets/images/feature-icons/icon5.png" alt="Feature Icon" class="w-16 h-16 mb-6">
                                    <h3 class="text-lg font-bold">Flexible Employee Schedules</h3>
                                </div>
                                <p class="text-gray-700">Empower business owners to set and manage individualized time schedules for employees, allowing for flexibility in work hours and effective workforce management.</p>
                            </div>
                            <div class="bg-white shadow-md px-10 py-12">
                                <div class="flex flex-col relative">
                                    <img src="assets/images/feature-icons/icon6.png" alt="Feature Icon" class="w-16 h-16 mb-6">
                                    <h3 class="text-lg font-bold">Customizable Deductions and Benefits</h3>
                                </div>
                                <p class="text-gray-700">Track employee working hours, attendance, and time off.</p>
                            </div>
                            <div class="bg-white shadow-md px-10 py-12">
                                <div class="flex flex-col relative">
                                    <img src="assets/images/feature-icons/icon7.png" alt="Feature Icon" class="w-16 h-16 mb-6">
                                    <h3 class="text-lg font-bold">Comprehensive Reporting</h3>
                                </div>
                                <p class="text-gray-700">Generate detailed reports on various aspects of employee data, payroll, attendance, and more, providing valuable insights for informed decision-making.</p>
                            </div>
                            <div class="bg-white shadow-md px-10 py-12">
                                <div class="flex flex-col relative">
                                    <img src="assets/images/feature-icons/icon8.png" alt="Feature Icon" class="w-16 h-16 mb-6">
                                    <h3 class="text-lg font-bold">Employee Self-Service</h3>
                                </div>
                                <p class="text-gray-700">Track employee working hours, attendance, and time off.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container mx-auto px-4 py-16">
                    <h2 class="text-4xl lg:text-6xl text-center font-bold mb-4 text-primary">Unveiling Our Inspiring Roadmap</h2>
                    <p class="text-lg lg:text-2xl text-center">We're thrilled to share our vision for the future, filled with groundbreaking advancements, innovative solutions, and transformative experiences. With each milestone along the way, we're dedicated to empowering you and revolutionizing the way you work, thrive, and succeed. Get ready to embrace the extraordinary as we celebrate the journey ahead and unlock a world of endless possibilities. Together, let's shape a brighter future and embark on this remarkable adventure.</p>
                </div>
                <div class="flex justify-center py-16">
                    <img src="assets/images/roadmap.png" alt="Roadmap" class="max-w-full h-auto">
                </div>
                <div class="bg-primary py-16">
                    <div class="container mx-auto px-4">
                        <div class="flex flex-wrap justify-between">
                            <div class="w-full md:w-2/5 pb-4">
                                <h2 class="text-4xl lg:text-6xl font-bold mb-8 lg:hidden block text-white">Get to Know Us Better</h2>
                                <div class="image-container">
                                <img src="assets/images/overview.png" alt="Image description" class="w-full">
                                </div>
                            </div>
                            <div class="w-full md:w-3/5">
                                <div class="text-white pl-0 md:pl-12 pt-10">
                                    <h2 class="text-4xl lg:text-6xl font-bold mb-8 hidden lg:block">Get to Know Us Better</h2>
                                    <hr class="mb-8 border-white-300 border-t-4 w-20 hidden lg:block">
                                    <p class="mb-8 text-lg text-lg lg:text-2xl text-justify">At Easeweldo, we understand the challenges and complexities of managing payroll for your business. We are more than just a payroll system; we are your trusted partner in simplifying the payroll process and ensuring the smooth operation of your company.</p>
                                    <p class="mb-8 text-lg text-lg lg:text-2xl text-justify">We are dedicated to providing you with a seamless payroll management experience, saving you valuable time and effort. With Easeweldo, you can rely on our state-of-the-art technology to automate calculations, tax deductions, and benefit contributions, eliminating the need for manual tasks and reducing the risk of errors. We are committed to staying up-to-date with the latest labor laws and tax regulations, ensuring your payroll remains compliant.</p>
                                    <p class="mb-8 text-lg text-lg lg:text-2xl text-justify">Our goal is to empower you to focus on what matters most – growing your business and nurturing your employees, while we take care of your payroll needs. Trust Easeweldo to simplify your payroll management to help your business thrive.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container mx-auto py-16">
                    <h2 class="text-4xl lg:text-6xl text-center font-bold mb-14 text-primary">Why Us?</h2>
                    <div class="flex flex-wrap -mx-4">
                        <div class="w-full sm:w-1/2 md:w-1/3 px-4 mb-8 my-10">
                            <div class="rounded-lg flex flex-col items-center relative mt-0 lg:mt-2">
                                <img src="assets/images/reliability.png" alt="Reliability" class="w-56 h-56">
                                <h3 class="text-3xl font-bold my-7">Reliability</h3>
                                <p class="text-xl font-semibold text-center w-64">Count on us to deliver consistent and accurate results.</p>
                            </div>
                        </div>
                        <div class="w-full sm:w-1/2 md:w-1/3 px-4 mb-8 my-10">
                            <div class="rounded-lg flex flex-col items-center relative mt-0 lg:mt-2">
                                <img src="assets/images/simplicity.png" alt="Simplicity" class="w-56 h-56">
                                <h3 class="text-3xl font-bold my-7">Simplicity</h3>
                                <p class="text-xl font-semibold text-center w-64">Driven to create an intuitive and user-friendly payroll system.</p>
                            </div>
                        </div>
                        <div class="w-full sm:w-1/2 md:w-1/3 px-4 mb-8 my-10">
                            <div class="rounded-lg flex flex-col items-center relative mt-0 lg:mt-2">
                                <img src="assets/images/partnership.png" alt="Partnership" class="w-56 h-56">
                                <h3 class="text-3xl font-bold my-7">Partnership</h3>
                                <p class="text-xl font-semibold text-center w-64">We see ourselves as more than just a service provider; we are your trusted partner.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-primary py-16">
                    <div class="container mx-auto text-white px-4">
                        <h2 class="text-4xl lg:text-6xl font-bold mb-3">Let Us Help You</h2>
                        <p class="text-lg lg:text-2xl mb-14">Reach out for an exploratory conversation.</p>
                        <div class="flex items-center mb-4">
                            <img src="assets/images/phone-icon.png" alt="Phone" class="w-10 h-10 mr-4">
                            <p class="text-2xl font-semibold"><a href="tel:+123456789">123-456-789</a></p>
                        </div>
                        <div class="flex items-center">
                            <img src="assets/images/email-icon.png" alt="Email" class="w-10 h-10 mr-4">
                            <p class="text-2xl font-semibold"><a href="mailto:info@example.com">info@example.com</a></p>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </body>
</html>
