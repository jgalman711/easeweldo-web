<form action="{{ route('password.update') }}" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
    <h1 class="text-3xl font-semibold mb-6">Reset Your Password</h1>
    @csrf
    <input type="hidden" name="token" value="{{ $token }}">
    @if($errors->any())
        <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-4">
            @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif
    <div class="mb-4">
        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
        <input type="email" id="email" name="email" value="{{ $email }}" class="mt-1 block w-full shadow-sm sm:text-sm rounded-md p-3 border border-sky-500" readonly>
    </div>
    <div class="mb-4">
        <label for="password" class="block text-sm font-medium text-gray-700">New Password</label>
        <input type="password" id="password" name="password" class="mt-1 block w-full shadow-sm sm:text-sm rounded-md p-3 border border-sky-500">
    </div>
    <div class="mb-4">
        <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm New Password</label>
        <input type="password" id="password_confirmation" name="password_confirmation" class="mt-1 block w-full shadow-sm sm:text-sm rounded-md p-3 border border-sky-500">
    </div>
    <div class="flex items-center justify-between">
        <button type="submit" class="w-full bg-blue-800 text-white py-2 px-4 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Reset Password</button>
    </div>
</form>
<div class="text-center mt-4">
    <a href="{{ route('login') }}" class="font-medium text-blue-600 hover:underline">Back to Login</a>
</div>