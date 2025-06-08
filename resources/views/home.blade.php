<!-- resources/views/home.blade.php -->

@extends('welcome')

@section('content')
    <!-- Hero Section -->
    <div class="relative bg-cover bg-center h-screen" style="background-image: url('https://source.unsplash.com/1600x900/?nature,technology');">
        <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
            <div class="text-center text-white px-4">
                <h1 class="text-4xl md:text-6xl font-bold mb-4">{{__("messages.Welcome_to_our_website")}}</h1>
                <p class="text-lg md:text-2xl mb-8">
                   {{__("messages.main_description")}}
                </p>
                <a href="{{ route('register') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-full text-lg font-semibold transition">
                      {{__("messages.get_started")}}
                </a>
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <section class="py-16 bg-gray-100">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-10 text-gray-800">{{__("messages.WhyUs")}}</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Feature Card 1 -->
                <div class="bg-white rounded-lg shadow-lg p-6 text-center hover:shadow-xl transition">
                    <div class="text-4xl mb-4 text-blue-600">
                        🚀
                    </div>
                    <h3 class="text-xl font-semibold mb-2 text-gray-700">{{__("messages.Fast_&_Reliable")}}</h3>
                    <p class="text-gray-500">{{__("messages.Fast_&_Reliable_desc")}}</p>
                </div>
                <!-- Feature Card 2 -->
                <div class="bg-white rounded-lg shadow-lg p-6 text-center hover:shadow-xl transition">
                    <div class="text-4xl mb-4 text-green-600">
                        🔒
                    </div>
                    <h3 class="text-xl font-semibold mb-2 text-gray-700">{{__("messages.Secure")}}</h3>
                    <p class="text-gray-500">{{__("messages.secure_Desc")}}</p>
                </div>
                <!-- Feature Card 3 -->
                <div class="bg-white rounded-lg shadow-lg p-6 text-center hover:shadow-xl transition">
                    <div class="text-4xl mb-4 text-purple-600">
                        🤝
                    </div>
                    <h3 class="text-xl font-semibold mb-2 text-gray-700">{{__("messages.customer_support")}}</h3>
                    <p class="text-gray-500">{{__("messages.customer_support_desc")}}</p>
                </div>
            </div>
        </div>
    </section>
@endsection
