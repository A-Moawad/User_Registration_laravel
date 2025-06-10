<header class="bg-gray-800 text-white py-4 shadow-md">
  <div class="container mx-auto flex justify-between items-center px-4">
    <a href="{{ route('home') }}" class="flex items-center space-x-2">
      <h1 class="text-xl font-bold tracking-wide">{{ __("messages.user_registration") }}</h1>
    </a>

    <!-- Hamburger Menu (Mobile) -->
    <div class="md:hidden">
      <button id="menu-toggle" class="focus:outline-none">
        <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
      </button>
    </div>

    <!-- Language Switch -->
    <a href="{{ url('lang/' . (session('locale') === 'ar' ? 'en' : 'ar')) }}"
       title="{{ session('locale') === 'ar' ? 'English' : 'العربية' }}">
      🌐 {{ session('locale') === 'ar' ? 'EN' : 'AR' }}
    </a>

    <!-- Navigation Links -->
   <!-- Navigation Links -->
<nav class="hidden md:flex space-x-6">
  @guest
    <a href="{{ route('register') }}" class="hover:underline hover:text-gray-300 transition">{{ __("messages.register") }}</a>
    <a href="{{ route('login') }}" class="hover:underline hover:text-gray-300 transition">{{ __("messages.login") }}</a>
  @endguest

  @auth
    <a href="{{ route('profile') }}" class="hover:underline hover:text-gray-300 transition">{{ __("messages.profile") }}</a>
  @endauth
</nav>


    <!-- Greeting -->
    <div class="hidden md:block">
      @auth
        <span>{{ __("messages.hello") }}, {{ auth()->user()->user_name }}</span>
      @else
        <span>{{ __("messages.hello") }}, Guest</span>
      @endauth
    </div>
  </div>

  <!-- Mobile Menu -->
  <div id="mobile-menu" class="md:hidden hidden bg-gray-800 px-4 pb-4">
    <nav class="flex flex-col space-y-2">
  @guest
    <a href="{{ route('register') }}" class="hover:underline hover:text-gray-300 transition">{{ __("messages.register") }}</a>
    <a href="{{ route('login') }}" class="hover:underline hover:text-gray-300 transition">{{ __("messages.login") }}</a>
  @endguest

  @auth
    <a href="{{ route('profile') }}" class="hover:underline hover:text-gray-300 transition">{{ __("messages.profile") }}</a>
  @endauth

  <div>
    @auth
      <span>{{ __("messages.hello") }}, {{ auth()->user()->user_name }}</span>
    @else
      <span class="font-bold text-xl">{{ __("messages.hello") }}, Guest</span>
    @endauth
  </div>
</nav>

  </div>

  <!-- Script to toggle mobile menu -->
  <script>
    document.getElementById('menu-toggle').addEventListener('click', function () {
      const mobileMenu = document.getElementById('mobile-menu');
      mobileMenu.classList.toggle('hidden');
    });
  </script>
</header>
