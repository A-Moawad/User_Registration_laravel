@extends('welcome') {{-- or your main layout filename --}}

@section('content')
<div class="max-w-md mx-auto bg-white p-8 rounded shadow-md">
    <h2 class="text-2xl font-bold mb-6 text-center">{{__("messages.register")}}</h2>

    @if ($errors->any())
        <div class="mb-4 bg-red-100 text-red-700 p-3 rounded">
            <ul class="list-disc list-inside">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('register.submit') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf

<div>
            <label for="full_name" class="block text-gray-700">Full Name</label>
            <input type="text" name="full_name" id="full_name" value="{{ old('full_name') }}" required
                class="w-full mt-1 px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500" />
        </div>

        <div>
            <label for="user_name" class="block text-gray-700">Username</label>
            <input type="text" name="user_name" id="user_name" value="{{ old('user_name') }}" required
                class="w-full mt-1 px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500" />
        </div>

        <div>
            <label for="phone" class="block text-gray-700">Phone</label>
            <input type="text" name="phone" id="phone" value="{{ old('phone') }}" required
                class="w-full mt-1 px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500" />
        </div>

        <div>
            <label for="whatsapp_number" class="block text-gray-700">WhatsApp Number</label>
            <input type="text" name="whatsapp_number" id="whatsapp_number" value="{{ old('whatsapp_number') }}" required
                class="w-full mt-1 px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500" />
        </div>

        <div>
            <label for="address" class="block text-gray-700">Address</label>
            <input type="text" name="address" id="address" value="{{ old('address') }}" required
                class="w-full mt-1 px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500" />
        </div>

        <div>
            <label for="user_image" class="block text-gray-700">Profile Image</label>
            <input type="file" name="user_image" id="user_image"
                class="w-full mt-1 px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500" />
        </div>

        <div>
            <label for="email" class="block text-gray-700">Email</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}" required
                class="w-full mt-1 px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500" />
        </div>

        <div>
            <label for="password" class="block text-gray-700">Password</label>
            <input type="password" name="password" id="password" required
                class="w-full mt-1 px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500" />
        </div>

        <div>
            <label for="password_confirmation" class="block text-gray-700">Confirm Password</label>
            <input type="password" name="password_confirmation" id="password_confirmation" required
                class="w-full mt-1 px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500" />
        </div>

        <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700 transition">
            {{__("messages.register")}}
        </button>
    </form>

    <p class="mt-4 text-center text-gray-600">
        {{__("messages.AlreadyHaveAcc")}}
        <a href="{{ route('login') }}" class="text-blue-600 hover:underline">{{__("messages.login_here")}}</a>
    </p>
</div>
@endsection
