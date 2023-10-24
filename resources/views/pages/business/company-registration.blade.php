@extends('layouts.business.default')

@section('content')
<div class="bg-blue-500 py-12">
    <div class="container px-8 mx-auto text-white">
        <h1 class="text-4xl font-semibold mb-4">You're almost there!</h1>
        <h2 class="text-xl mb-4">
            Complete your registration now, or you can revisit and update
            your details in your company profile later.
        </h2>
    </div>
</div>
<div class="md:container md:mx-auto px-8 text-white">
    <div id="error-message-box" class="hidden">
        <div class="flex p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
            <svg class="flex-shrink-0 inline w-4 h-4 mr-3 mt-[2px]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
            </svg>
            <span class="sr-only">Danger</span>
            <div>
                <span class="font-medium">Ensure that these requirements are met:</span>
                <ul class="mt-1.5 ml-4 list-disc list-inside" id="error-list"></ul>
            </div>
        </div>
    </div>
    <form id="company-update-form" enctype="multipart/form-data">
        @csrf
        <div class="md:flex border-b border-gray-900/10 py-8">
            <div class="w-full md:w-1/3 mb-6 pr-16">
                <h2 class="text-base font-semibold leading-7 text-gray-900">Company Profile</h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">Complete the form to provide important information about your organization.</p> 
            </div>
            <div class="w-full md:w-2/3">
                <div class="space-y-12">
                    <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-full">
                            <input name="name" type="hidden" value="{{ $company['legal_name'] ?? $company['name'] }}">
                            <label for="legal_name" class="block text-sm font-medium leading-6 text-gray-900">Legal Name</label>
                            <div class="mt-2">
                                <input
                                    id="legal_name"
                                    name="legal_name"
                                    type="text"
                                    class="px-3 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                    value="{{ old('legal_name') ?? $company['name'] }}"
                                >
                            </div>
                        </div>
                        <div class="col-span-full">
                            <label for="logo" class="block text-sm font-medium leading-6 text-gray-900">Company Logo</label>
                            <div class="mt-2 flex items-center gap-x-3">
                                <img id="logo-preview" class="h-20 w-20 mt-2 hidden rounded-full" alt="Company Logo Preview">
                                <svg id="logo-placeholder" class="h-20 w-20 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" clip-rule="evenodd" />
                                </svg>
                                <label for="logo" class="cursor-pointer rounded-md bg-white px-2.5 py-1.5 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">
                                    <span>Upload</span>
                                    <input id="logo" name="logo" type="file" class="sr-only" onchange="displaySelectedImage(this)">
                                </label>
                            </div>
                        </div>
                        <div class="col-span-full">
                            <label for="address_line" class="block text-sm font-medium leading-6 text-gray-900">Address Line</label>
                            <div class="mt-2">
                                <input type="text" name="address_line" id="address_line" class="px-3 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="{{ old('address_line') ?? $company['address_line'] }}">
                            </div>
                        </div>
                        <div class="col-span-full">
                            <label for="barangay_town_city_province" class="block text-sm font-medium leading-6 text-gray-900">Barangay / Town / City / Province</label>
                            <div class="mt-2">
                                <input type="text" name="barangay_town_city_province" id="barangay_town_city_province" value="{{ old('barangay_town_city_province') ?? $company['barangay_town_city_province'] }}" class="px-3 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                        <div class="sm:col-span-4">
                            <label for="contact_name" class="block text-sm font-medium leading-6 text-gray-900">Contact Name</label>
                            <div class="mt-2">
                                <input id="contact_name" name="contact_name" type="text" class="px-3 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="{{ old('contact_name') ?? $company['contact_name'] }}">
                            </div>
                        </div>
                        <div class="sm:col-span-4">
                            <label for="email_address" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
                            <div class="mt-2">
                                <input id="email_address" name="email_address" type="email" autocomplete="email_address" class="px-3 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="{{ old('email_address') ?? $company['email_address'] }}">
                            </div>
                        </div>
                        <div class="hidden sm:block sm:col-span-2"></div>
                        <div class="sm:col-span-2">
                            <label for="mobile_number" class="block text-sm font-medium leading-6 text-gray-900">Mobile Number</label>
                            <div class="mt-2">
                                <input type="text" name="mobile_number" id="mobile_number" autocomplete="given-name" class="px-3 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="{{ old('mobile_number') ?? $company['mobile_number'] }}">
                            </div>
                        </div>
                        <div class="sm:col-span-2">
                            <label for="landline_number" class="block text-sm font-medium leading-6 text-gray-900">Landline name</label>
                            <div class="mt-2">
                                <input type="text" name="landline_number" id="landline_number" autocomplete="family-name" class="px-3 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="{{ old('landline_number') ?? $company['landline_number'] }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="md:flex border-b border-gray-900/10 py-8">
            <div class="w-full md:w-1/3 mb-6 pr-16">
                <h2 class="text-base font-semibold leading-7 text-gray-900">Bank Account Details (optional)</h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">
                    Information will be stored securely. If you prefer not to provide this information at
                    the moment, you can leave this section blank.
                </p>
            </div>
            <div class="w-full md:w-2/3">
                <div class="space-y-12">
                    <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-4">
                            <label for="bank_name" class="block text-sm font-medium leading-6 text-gray-900">Bank Name</label>
                            <div class="mt-2">
                                <input id="bank_name" name="bank_name" type="text" class="px-3 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="{{ old('bank_name') ?? $company['bank_name'] }}">
                            </div>
                        </div>
                        <div class="sm:col-span-4">
                            <label for="bank_account_name" class="block text-sm font-medium leading-6 text-gray-900">Account Name</label>
                            <div class="mt-2">
                                <input id="bank_account_name" name="bank_account_name" type="text" class="px-3 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="{{ old('bank_account_name') ?? $company['bank_account_name'] }}">
                            </div>
                        </div>
                        <div class="sm:col-span-4">
                            <label for="bank_account_number" class="block text-sm font-medium leading-6 text-gray-900">Account Number</label>
                            <div class="mt-2">
                                <input id="bank_account_number" name="bank_account_number" type="text" class="px-3 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="{{ old('bank_account_number') ?? $company['bank_account_number'] }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="md:flex border-b border-gray-900/10 py-8">
            <div class="w-full md:w-1/3 mb-6 pr-16">
                <h2 class="text-base font-semibold leading-7 text-gray-900">Tax Information (optional)</h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">
                    Information will be stored securely. If you prefer not to provide this information
                    at the moment, you can leave this section blank.
                </p>
            </div>
            <div class="w-full md:w-2/3">
                <div class="space-y-12">
                    <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-3">
                        <div class="sm:col-span-2">
                            <label for="tin" class="block text-sm font-medium leading-6 text-gray-900">Tax Identification Number (TIN)</label>
                            <div class="mt-2">
                                <input id="tin" name="tin" type="text" class="px-3 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="{{ old('tin') ?? $company['tin'] }}">
                            </div>
                        </div>
                        <div class="sm:col-span-2">
                            <label for="sss_number" class="block text-sm font-medium leading-6 text-gray-900">Social Security System (SSS) Number</label>
                            <div class="mt-2">
                                <input id="sss_number" name="sss_number" type="text" class="px-3 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="{{ old('sss_number') ?? $company['sss_number'] }}">
                            </div>
                        </div>
                        <div class="sm:col-span-2">
                            <label for="philhealth_number" class="block text-sm font-medium leading-6 text-gray-900">Philippine Health Insurance Corp. (PhilHealth) Number</label>
                            <div class="mt-2">
                                <input id="philhealth_number" name="philhealth_number" type="text" class="px-3 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="{{ old('philhealth_number') ?? $company['philhealth_number'] }}">
                            </div>
                        </div>
                        <div class="sm:col-span-2">
                            <label for="pagibig_number" class="block text-sm font-medium leading-6 text-gray-900">Pag-IBIG Fund (HDMF) Number</label>
                            <div class="mt-2">
                                <input id="pagibig_number" name="pagibig_number" type="text" class="px-3 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="{{ old('pagibig_number') ?? $company['pagibig_number'] }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex items-center justify-end gap-x-6 py-8">
            <a href="{{ route('company.dashboard') }}" type="button" class="text-sm font-semibold leading-6 text-gray-900 cursor-pointer underline">
                Skip
            </a>
            <button type="submit" class="w-28 rounded-md bg-blue-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600">
                Save
            </button>
        </div>
    </form>
</div>
@endsection

@section('js-bottom')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#company-update-form').on('submit', function(e) {
            e.preventDefault();

            var formData = new FormData(this);
            var token = "{{ $token }}";

            $.ajax({
                url: '{{ $update_api_endpoint }}',
                type: 'POST',
                headers: {
                    'Authorization': 'Bearer ' + token,
                },
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    setTimeout(function() {
                        window.location.href = 'company/complete-registration';
                    }, 500);
                },
                error: function(xhr, status) {
                    var response = xhr.responseJSON;
                    if (response && response.errors) {
                        $('#error-message-box').removeClass('hidden');
                        var errors = response.errors;
                        var errorMessage = "";
                        $.each(errors, function(field, messages) {
                            errorMessage += '<li>' + messages + '</li>';
                        });
                        $('#error-list').html(errorMessage);
                        $('html, body').animate({
                            scrollTop: $('#error-message-box').offset().top - 10
                        }, 350);
                    }
                }
            });
        });
    });

    function displaySelectedImage(input) {
        const preview = document.getElementById('logo-preview');
        if (input.files && input.files[0]) {
            const reader = new FileReader();

            reader.onload = function (e) {
                preview.src = e.target.result;
            };

            reader.readAsDataURL(input.files[0]);
        }
        preview.classList.remove('hidden');

        const placeholder = document.getElementById('logo-placeholder');
        placeholder.classList.add('hidden');
    }
</script>
@endsection