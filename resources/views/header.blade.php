<header class="bg-gray-800 text-white py-4 shadow-md ">
  <div class="container mx-auto flex justify-between items-center  md:px-0">
    <h1 class="text-2xl font-bold tracking-wide">User Registration</h1>
    <nav>
      <ul class="flex space-x-6">
        <li><a href="{{ route('register') }}" class="hover:underline hover:text-gray-300 transition">Register</a></li>
        <li><a href="{{ route('login') }}" class="hover:underline hover:text-gray-300 transition">Login</a></li>
        <li><a href="{{ route('profile') }}" class="hover:underline hover:text-gray-300 transition">Profile</a></li>
      </ul>
    </nav>
    <div>
      @auth
        <span>Hello, {{ auth()->user()->name }}</span>
      @else
        <span>Hello, Guest</span>
      @endauth
    </div>
  </div>
</header>
