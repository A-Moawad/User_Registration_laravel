<!-- resources/views/home.blade.php -->

@extends('welcome')

@section('content')
    <!-- Hero Section -->
    <div class="relative bg-cover bg-center h-screen" style="background-image: url('https://source.unsplash.com/1600x900/?nature,technology');">
        <div class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center">
            <div class="text-center text-white px-4">
                <h1 class="text-4xl md:text-6xl font-bold mb-4">Welcome to Our Website!</h1>
                <p class="text-lg md:text-2xl mb-8">
                    Explore our latest features, products, and services designed just for you.
                </p>
                <a href="{{ route('register') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-full text-lg font-semibold transition">
                    Get Started
                </a>
            </div>
        </div>
    </div>

    <!-- Features Section -->
    <section class="py-16 bg-gray-100">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-10 text-gray-800">Why Choose Us?</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Feature Card 1 -->
                <div class="bg-white rounded-lg shadow-lg p-6 text-center hover:shadow-xl transition">
                    <div class="text-4xl mb-4 text-blue-600">
                        🚀
                    </div>
                    <h3 class="text-xl font-semibold mb-2 text-gray-700">Fast & Reliable</h3>
                    <p class="text-gray-500">Enjoy blazing fast performance and reliable service for all your needs.</p>
                </div>
                <!-- Feature Card 2 -->
                <div class="bg-white rounded-lg shadow-lg p-6 text-center hover:shadow-xl transition">
                    <div class="text-4xl mb-4 text-green-600">
                        🔒
                    </div>
                    <h3 class="text-xl font-semibold mb-2 text-gray-700">Secure</h3>
                    <p class="text-gray-500">Your data and privacy are our top priority. We use the latest security protocols.</p>
                </div>
                <!-- Feature Card 3 -->
                <div class="bg-white rounded-lg shadow-lg p-6 text-center hover:shadow-xl transition">
                    <div class="text-4xl mb-4 text-purple-600">
                        🤝
                    </div>
                    <h3 class="text-xl font-semibold mb-2 text-gray-700">Customer Support</h3>
                    <p class="text-gray-500">We’re here to help 24/7. Reach out to us anytime for assistance.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
