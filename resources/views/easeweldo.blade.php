<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Easeweldo: Elevate Your Payroll Experience with Ease! - edited</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

        <link rel="icon" href="/favicon.ico" type="image/x-icon">
    </head>
    <body class="antialiased">
        <style>
            body {
                font-family: 'Quicksand', sans-serif;
            }
            .text-primary {
                color: #5ba5f3;
            }
        </style>
        <main>
            <section class="hero bg-cover bg-center pt-16" style="background-image: url('assets/images/hero-2.png')">
                <div class="container lg:mx-auto mx-1 flex items-center justify-between">
                    <div class="flex items-center">
                        <img src="assets/images/logo.png" alt="Easeweldo Logo" class="h-12 w-auto"><h1 class="text-4xl lg:text-4xl font-bold ml-4">EASEweldo</h1>
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
                <div class="container mx-auto px-4 py-12">
                    <div class="mb-12 mx-auto max-w-6xl">
                        <h2 class="text-4xl lg:text-6xl text-center font-bold mb-4 text-primary">What We Can Do For You</h2>
                        <p class="text-lg lg:text-2xl text-center text-gray-700">With Easeweldo as your trusted payroll system, you can simplify your payroll processes, improve accuracy, ensure compliance, and gain valuable insights into your financials. Our aim is to empower your business by taking the burden of payroll management off your shoulders, allowing you to focus on what matters most – growing and nurturing your business.</p>
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
                <div class="bg-blue-500 py-12">
                    <div class="container mx-auto px-4">
                        <div class="flex flex-wrap justify-between">
                            <div class="w-1/2 md:w-1/2">
                                <div class="image-container">
                                <img src="assets/images/overview.png" alt="Image description" class="w-full">
                                </div>
                            </div>
                            <div class="w-full md:w-1/2">
                                <div class="text-white">
                                    <h2 class="text-4xl lg:text-6xl font-bold mb-6">Get to Know Us Better</h2>
                                    <hr class="mb-6 border-white-300 border-t-4 w-20">
                                    <p class="mb-6 text-lg lg:text-xl text-justify">At Easeweldo, we understand the challenges and complexities of managing payroll for your business. We are more than just a payroll system; we are your trusted partner in simplifying the payroll process and ensuring the smooth operation of your company.</p>
                                    <p class="mb-6 text-lg lg:text-xl text-justify">We are dedicated to providing you with a seamless payroll management experience, saving you valuable time and effort. With Easeweldo, you can rely on our state-of-the-art technology to automate calculations, tax deductions, and benefit contributions, eliminating the need for manual tasks and reducing the risk of errors. We are committed to staying up-to-date with the latest labor laws and tax regulations, ensuring your payroll remains compliant.</p>
                                    <p class="mb-6 text-lg lg:text-xl text-justify">Our goal is to empower you to focus on what matters most – growing your business and nurturing your employees, while we take care of your payroll needs. Trust Easeweldo to simplify your payroll management to help your business thrive.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container mx-auto py-12">
                    <h2 class="text-4xl lg:text-6xl text-center font-bold mb-4 text-primary">Why Us?</h2>
                    <div class="flex flex-wrap -mx-4">
                        <div class="w-full sm:w-1/2 md:w-1/3 px-4 mb-8">
                            <div class="flex items-center mb-4">
                                <img src="image-url-1" alt="Reliability" class="w-8 h-8 mr-4">
                                <h3 class="text-lg font-bold">Reliability</h3>
                            </div>
                            <p>Count on us to deliver consistent and accurate results.</p>
                            </div>
                            <div class="w-full sm:w-1/2 md:w-1/3 px-4 mb-8">
                            <div class="flex items-center mb-4">
                                <img src="image-url-2" alt="Simplicity" class="w-8 h-8 mr-4">
                                <h3 class="text-lg font-bold">Simplicity</h3>
                            </div>
                            <p>Driven to create an intuitive and user-friendly payroll system.</p>
                            </div>
                            <div class="w-full sm:w-1/2 md:w-1/3 px-4 mb-8">
                            <div class="flex items-center mb-4">
                                <img src="image-url-3" alt="Partnership" class="w-8 h-8 mr-4">
                                <h3 class="text-lg font-bold">Partnership</h3>
                            </div>
                            <p>We see ourselves as more than just a service provider; we are your trusted partner.</p>
                        </div>
                    </div>
                </div>
                <div class="bg-blue-500 py-12">
                    <div class="container mx-auto">
                        <h2 class="text-3xl font-bold text-white mb-8">Let us help you</h2>
                        <p class="text-white mb-8">Reach out for an exploratory conversation.</p>
                        <div class="flex flex-wrap items-center justify-center">
                        <div class="flex items-center mr-8 mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 15c0-1.657 1.79-4 4-4h8c2.21 0 4 2.343 4 4v4c0 1.657-1.79 4-4 4H8c-2.21 0-4-2.343-4-4v-4z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10V3m0 0L9 6m3-3l3 3M12 21v-2" />
                            </svg>
                            <span class="text-white">123-456-7890</span>
                        </div>
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 22C6.486 22 2 17.514 2 12c0-5.514 4.486-10 10-10s10 4.486 10 10c0 5.514-4.486 10-10 10zm0 0l-4-4m4 4l4-4m-4 4V4" />
                            </svg>
                            <span class="text-white">dummyemail@example.com</span>
                        </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </body>
</html>
