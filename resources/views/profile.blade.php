@extends('welcome') {{-- Or your main layout file --}}

@section('content')
@php
    $user = auth()->user();
@endphp

<div class="max-w-md mx-auto bg-white p-8 rounded shadow-md">
    <h2 class="text-2xl font-bold mb-6 text-center">User Profile</h2>

    @if (session('status'))
        <div class="mb-4 bg-green-100 text-green-700 p-3 rounded">
            {{ session('status') }}
        </div>
    @endif

    <div class="space-y-4 text-gray-700">
        <p><strong>Name:</strong> {{ $user && $user->name ? $user->name : 'John Doe' }}</p>
        <p><strong>Email:</strong> {{ $user && $user->email ? $user->email : 'john.doe@example.com' }}</p>
        <p><strong>Registered At:</strong>
            {{ $user && $user->created_at ? $user->created_at->format('M d, Y') : 'Jan 01, 2023' }}
        </p>
    </div>

    <div class="mt-6 text-center">
        @if ($user)
            <a href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                class="inline-block bg-red-600 text-white py-2 px-4 rounded hover:bg-red-700 transition">
                Logout
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                @csrf
            </form>
        @else
            <p class="text-gray-500">You are not logged in.</p>
        @endif
    </div>
</div>
@endsection
