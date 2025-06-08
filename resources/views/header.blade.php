<header class="bg-gray-800 text-white py-4 shadow-md">
  <div class="container mx-auto flex justify-between items-center px-4">
    <a href="{{ route('home') }}" class="flex items-center space-x-2">
      <h1 class="text-xl font-bold tracking-wide">User Registration</h1>
    </a>

    <!-- Hamburger Menu (Mobile) -->
    <div class="md:hidden">
      <button id="menu-toggle" class="focus:outline-none">
        <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
      </button>
    </div>

    <!-- Navigation Links -->
    <nav class="hidden md:flex space-x-6">
      <a href="{{ route('register') }}" class="hover:underline hover:text-gray-300 transition">Register</a>
      <a href="{{ route('login') }}" class="hover:underline hover:text-gray-300 transition">Login</a>
      <a href="{{ route('profile') }}" class="hover:underline hover:text-gray-300 transition">Profile</a>
    </nav>

    <!-- Greeting -->
    <div class="hidden md:block">
      @auth
        <span>Hello, {{ auth()->user()->name }}</span>
      @else
        <span>Hello, Guest</span>
      @endauth
    </div>
  </div>

  <!-- Mobile Menu -->
  <div id="mobile-menu" class="md:hidden hidden bg-gray-800 px-4 pb-4">
    <nav class="flex flex-col space-y-2">
      <a href="{{ route('register') }}" class="hover:underline hover:text-gray-300 transition">Register</a>
      <a href="{{ route('login') }}" class="hover:underline hover:text-gray-300 transition">Login</a>
      <a href="{{ route('profile') }}" class="hover:underline hover:text-gray-300 transition">Profile</a>
      <div>
        @auth
          <span>Hello, {{ auth()->user()->name }}</span>
        @else
          <span class="font-bold text-xl hidden md:block">Hello, Guest</span>
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
