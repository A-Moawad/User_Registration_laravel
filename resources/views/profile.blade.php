@extends('welcome') {{-- Or your main layout file --}}

@section('content')
@php
    $user = auth()->user();
    // Default profile picture if none is set
    $defaultProfilePhoto = asset('images/default-profile.png'); 
    // or you can use a URL from a CDN or placeholder service
@endphp

<div class="max-w-md mx-auto bg-white p-8 rounded shadow-md">
    <h2 class="text-2xl font-bold mb-6 text-center">{{__("messages.profile")}}</h2>

    @if (session('status'))
        <div class="mb-4 bg-green-100 text-green-700 p-3 rounded">
            {{ session('status') }}
        </div>
    @endif

    <div class="flex flex-col items-center space-y-4 text-gray-700">
        {{-- Profile Picture --}}
        <img src="{{ $user && $user->user_image ? asset('images/users/' . $user->user_image) : $defaultProfilePhoto }}"
             alt="Profile Picture"
             class="w-24 h-24 rounded-full object-cover shadow-md">

        <p><strong>{{__("messages.name")}}:</strong> {{ $user && $user->user_name ? $user->user_name : 'John Doe' }}</p>
        <p><strong>{{__("messages.email")}}:</strong> {{ $user && $user->email ? $user->email : 'john.doe@example.com' }}</p>
        <p><strong>{{__("messages.Registered_At")}}:</strong>
            {{ $user && $user->created_at ? $user->created_at->format('M d, Y') : 'Jan 01, 2023' }}
        </p>
    </div>

    <div class="mt-6 text-center">
        @if ($user)
            <a href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                class="inline-block bg-red-600 text-white py-2 px-4 rounded hover:bg-red-700 transition">
                {{__("messages.logout")}}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                @csrf
            </form>
        @else
            <p class="text-gray-500">{{__("messages.YouAreNotLoggedIn")}}</p>
        @endif
    </div>
</div>
@endsection
