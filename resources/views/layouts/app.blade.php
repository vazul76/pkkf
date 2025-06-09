<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
  <link rel="stylesheet" href="./assets/style.css" />
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Anton&family=Oswald:wght@200..700&display=swap" rel="stylesheet">
  <style>
    html, body {
      height: 100%;
    }
    body {
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }
    main {
      flex: 1;
    }
  </style>
  @stack("styles")
</head>
<body class="bg-stone-50 text-gray-800">

<!-- Navbar -->
<nav class="flex justify-between items-center px-6 py-4 shadow-md bg-white navtxt">
  <div class="flex items-center gap-4">
    <a href="{{ route('home.index') }}" class="flex items-center gap-4">
      <img src="./assets/images/logo.png" alt="Logo" class="w-10 h-10">
      <span class="text-2xl font-semibold">HikeGear</span>
    </a>
  </div>
  <div class="hidden md:flex gap-6 font-normal ">
    <a href="#" class="hover:text-blue-600">SHOP</a>
    <a href="#" class="hover:text-blue-600">SUSTAINABILITY</a>
  </div>
  <div class="flex items-center gap-4 text-xl">
    <a href="#" class="hover:text-blue-600"><i class="fa-solid fa-magnifying-glass"></i></a>
    @auth
      <a href="{{ route('profile') }}" class="px-2 text-base hover:text-blue-600 flex items-center gap-2">
      {{ Auth::user()->name }}
      <i class="fa-solid fa-circle-user"></i>
      </a>
      <form action="{{ route('logout') }}" method="POST" class="inline">
      @csrf
      <button type="submit" class="hover:text-blue-600" title="Logout">
        <i class="fa-solid fa-right-from-bracket"></i>
      </button>
      </form>
    @else
      <a href="{{ route('login') }}" class="hover:text-blue-600"><i class="fa-solid fa-circle-user"></i></a>
    @endauth
    <a href="{{route('cart.index')}}" class="hover:text-blue-600"><i class="fa-solid fa-cart-shopping"></i></a>
  </div>
</nav>

<!-- Category Icons -->
<div class="flex justify-center gap-6 bg-transparent py-4 border-t border-b shadow-sm hidden md:flex">
  <div class="flex items-center space-x-2 hover:text-blue-600 cursor-pointer">
    <img src="./assets/images/shelter.png" alt="Shelter" class="w-13 h-9">
    <span class="text-sm font-medium">Shelters</span>
  </div>
  <div class="flex items-center space-x-2 hover:text-blue-600 cursor-pointer">
    <img src="./assets/images/backpak.png" alt="Backpacks" class="w-9 h-9">
    <span class="text-sm font-medium">Backpacks</span>
  </div>
  <div class="flex items-center space-x-2 hover:text-blue-600 cursor-pointer">
    <img src="./assets/images/sleep bag.png" alt="Sleeping Bags" class="w-7 h-9">
    <span class="text-sm font-medium">Sleeping Bags</span>
  </div>
  <div class="flex items-center space-x-2 hover:text-blue-600 cursor-pointer">
    <img src="./assets/images/cloth.png" alt="Clothing" class="w-9 h-9">
    <span class="text-sm font-medium">Clothing</span>
  </div>
  <div class="flex items-center space-x-2 hover:text-blue-600 cursor-pointer">
    <img src="./assets/images/accesories.png" alt="Accessories" class="w-7 h-9">
    <span class="text-sm font-medium">Accessories</span>
  </div>
</div>

<main>
  @yield("content")
</main>

<!-- Footer -->
<footer class="w-full bg-no-repeat bg-cover bg-center text-white mt-auto" style="background-image: url('./assets/images/footer-image.jpg');">
  <div class="max-w-7xl mx-auto px-4 py-20">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-10 text-center">
      
      <!-- Contact Us -->
      <div class="flex flex-col items-center space-y-4">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
        <span class="text-lg font-semibold">Contact Us</span>
      </div>

      <!-- Sign Up for Alerts -->
      <div class="flex flex-col items-center space-y-4">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
        <span class="text-lg font-semibold">SIGN UP FOR ALERTS</span>
        <a href="#" class="bg-[#638ECB] text-white px-4 py-2 text-sm rounded hover:bg-[#4e74b1] transition">
          SUBSCRIBE TO NEWSLETTER
        </a>
      </div>

      <!-- Shipping -->
      <div class="flex flex-col items-center space-y-4">
        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M3 16V6a1 1 0 011-1h13l3 4v7a1 1 0 01-1 1H4a1 1 0 01-1-1z" />
          <circle cx="7.5" cy="17.5" r="1.5" />
          <circle cx="17.5" cy="17.5" r="1.5" />
        </svg>
        <span class="text-lg font-semibold">Shipping</span>
      </div>

    </div>
  </div>
</footer>  
<script src="{{ asset('assets/js/script.js') }}"></script>
</body>
</html>