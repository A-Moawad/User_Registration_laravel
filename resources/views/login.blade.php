@extends('welcome')

@section('content')
<div class="max-w-md mx-auto bg-white p-8 rounded shadow-md">
    <h2 class="text-2xl font-bold mb-6 text-center">Login</h2>

    @if (session('error'))
        <div class="mb-4 bg-red-100 text-red-700 p-3 rounded">
            {{ session('error') }}
        </div>
    @endif

    <form action="{{ route('login') }}" method="POST" class="space-y-4">
        @csrf

        <div>
            <label for="email" class="block text-gray-700">Email</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}" required
                class="w-full mt-1 px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-green-500" />
        </div>

        <div>
            <label for="password" class="block text-gray-700">Password</label>
            <input type="password" name="password" id="password" required
                class="w-full mt-1 px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-green-500" />
        </div>

        <button type="submit" class="w-full bg-green-600 text-white py-2 rounded hover:bg-green-700 transition">
            Login
        </button>
    </form>

    <p class="mt-4 text-center text-gray-600">
        Don't have an account?
        <a href="{{ route('register') }}" class="text-green-600 hover:underline">Register here</a>
    </p>
</div>
@endsection
