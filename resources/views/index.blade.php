@extends('layouts.app')
@section('content')
<main>

    <!-- Carousel Wrapper -->
<div class="relative w-full overflow-hidden">

  <!-- Slides Container -->
  <div id="carouselSlides" class="flex transition-transform duration-500" style="transform: translateX(0%);">
    <!-- Slide 1 -->
    <div class="w-full flex-shrink-0 relative h-[40vw] max-h-[600px]">
      <img src="./assets/images/slide1.png" class="w-full h-full object-cover object-center" />
      <div class="absolute inset-0 flex items-center justify-center">
        <a href="#" class="bg-[#638ECB] text-white px-6 py-2 font-bold rounded absolute bottom-16 left-20 flex items-center">
          SHOP NOW
        </a>
      </div>
    </div>
    <!-- Slide 2 -->
    <div class="w-full flex-shrink-0 relative h-[40vw] max-h-[600px]">
      <img src="./assets/images/slide2.png" class="w-full h-full object-cover object-center" />
      <div class="absolute inset-0 flex items-center justify-center">
        <a href="#" class="bg-[#064469] text-white px-6 py-2 font-bold rounded absolute bottom-16 left-20 flex items-center">
          SHOP NOW
        </a>
      </div>
    </div>
    <!-- Slide 3 -->
    <div class="w-full flex-shrink-0 relative h-[40vw] max-h-[600px]">
      <img src="./assets/images/slide3.png" class="w-full h-full object-cover object-center" />
      <div class="absolute inset-0 flex items-center justify-center">
        <a href="#" class="bg-[#064469] text-white px-6 py-2 font-bold rounded absolute bottom-16 left-20 flex items-center">
          SHOP NOW
        </a>
      </div>
    </div>
    <!-- Slide 4 -->
    <div class="w-full flex-shrink-0 relative h-[40vw] max-h-[600px]">
      <img src="./assets/images/slide4.png" class="w-full h-full object-cover object-center" />
      <div class="absolute inset-0 flex items-center justify-center">
        <a href="#" class="bg-[#064469] text-white px-6 py-2 font-bold rounded absolute bottom-16 left-20 flex items-center">
          SHOP NOW
        </a>
      </div>
    </div>
    <!-- Slide 5 -->
    <div class="w-full flex-shrink-0 relative h-[40vw] max-h-[600px]">
      <img src="./assets/images/slide5.png" class="w-full h-full object-cover object-center" />
      <div class="absolute inset-0 flex items-center justify-center">
        <a href="#" class="bg-[#064469] text-white px-6 py-2 font-bold rounded absolute bottom-16 left-20 flex items-center">
          SHOP NOW
        </a>
      </div>
    </div>
    <!-- Slide 6 -->
    <div class="w-full flex-shrink-0 relative h-[40vw] max-h-[600px]">
      <img src="./assets/images/slide6.png" class="w-full h-full object-cover object-center" />
      <div class="absolute inset-0 flex items-center justify-center">
        <a href="#" class="bg-[#064469] text-white px-6 py-2 font-bold rounded absolute bottom-16 left-20 flex items-center">
          SHOP NOW
        </a>
      </div>
    </div>
  </div>

  <!-- Dot navigation (harus di luar carouselSlides) -->
  <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-3 z-10">
    <button class="dot w-3 h-3 rounded-full bg-[#638ECB] opacity-100" data-index="0"></button>
    <button class="dot w-3 h-3 rounded-full bg-gray-400 opacity-50" data-index="1"></button>
    <button class="dot w-3 h-3 rounded-full bg-gray-400 opacity-50" data-index="2"></button>
    <button class="dot w-3 h-3 rounded-full bg-gray-400 opacity-50" data-index="3"></button>
    <button class="dot w-3 h-3 rounded-full bg-gray-400 opacity-50" data-index="4"></button>
    <button class="dot w-3 h-3 rounded-full bg-gray-400 opacity-50" data-index="5"></button>
  </div>

</div> <!-- Penutup untuk carousel wrapper -->



  <section class="py-12">
    <!-- Title -->
    <div class="text-center mb-10">
      <img src="./assets/images/mount.png" alt="mountain" class="mx-auto w-20">
      <h2 class="text-2xl font-bold">New Arrivals</h2>
    </div>
  
    <!-- Product Cards -->
    <div class="max-w-6xl mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 px-4">

      <!-- Card -->
      <a href="https://vazul.my.id" class="block">
        <div class="relative rounded-xl overflow-hidden shadow-md transform transition-transform duration-300 hover:scale-105">
          <div class="absolute inset-0 bg-cover bg-center opacity-20"
               style="background-image: url('./assets/images/bg.png');"></div>
          <div class="relative z-10 flex flex-col items-center text-center p-6">
            <img src="./assets/images/hexamid.png" alt="Hexamid Tent"
                 class="w-55 h-55 object-contain mb-4">
            <h3 class="text-lg font-bold">Hexamid Tent</h3>
            <p class="text-sm font-semibold mb-2">$499.00 USD</p>
            <div class="bg-transparent bg-opacity-60 px-4 py-2 rounded-md text-sm w-full">
              <p class="font-semibold">Weight</p>
              <p>9.7 oz / 275 g</p>
            </div>
          </div>
        </div>
      </a>
      
      <a href="https://vazul.my.id" class="block">
        <div class="relative rounded-xl overflow-hidden shadow-md transform transition-transform duration-300 hover:scale-105">
          <div class="absolute inset-0 bg-cover bg-center opacity-20"
               style="background-image: url('./assets/images/bg.png');"></div>
          <div class="relative z-10 flex flex-col items-center text-center p-6">
            <img src="./assets/images/hexamid.png" alt="Octa Camp Pants"
                 class="w-55 h-55 object-contain mb-4">
            <h3 class="text-lg font-bold">Octa Camp Pants</h3>
            <p class="text-sm font-semibold mb-2">$499.00 USD</p>
            <div class="bg-transparent bg-opacity-60 px-4 py-2 rounded-md text-sm w-full">
              <p class="font-semibold">Weight</p>
              <p>9.7 oz / 275 g</p>
            </div>
          </div>
        </div>
      </a>

      <a href="https://vazul.my.id" class="block">
        <div class="relative rounded-xl overflow-hidden shadow-md transform transition-transform duration-300 hover:scale-105">
          <div class="absolute inset-0 bg-cover bg-center opacity-20"
               style="background-image: url('./assets/images/bg.png');"></div>
          <div class="relative z-10 flex flex-col items-center text-center p-6">
            <img src="./assets/images/hexamid.png" alt="Comfy Camp Pillow"
                 class="w-55 h-55 object-contain mb-4">
            <h3 class="text-lg font-bold">Comfy Camp Pillow</h3>
            <p class="text-sm font-semibold mb-2">$499.00 USD</p>
            <div class="bg-transparent bg-opacity-60 px-4 py-2 rounded-md text-sm w-full">
              <p class="font-semibold">Weight</p>
              <p>9.7 oz / 275 g</p>
            </div>
          </div>
        </div>
      </a>
    </div>
  </section>

  <section class="grid grid-cols-6 grid-rows-6 gap-2 p-4 h-[120vh]">
    <div class="relative col-span-6 row-span-2 overflow-hidden group">
      <img src="./assets/images/shelter.jpg" alt="Shelters" class="w-full h-full object-cover transition duration-500 group-hover:brightness-100 brightness-50 rounded-lg" />
      <div class="absolute inset-0 flex items-center justify-center">
        <span class="text-white text-3xl font-bold">SHELTERS</span>
      </div>
    </div>
    <div class="relative col-span-4 row-span-2 overflow-hidden group">
      <img src="./assets/images/bapak.jpg" alt="Backpacks" class="w-full h-full object-cover transition duration-500 group-hover:brightness-100 brightness-50 rounded-lg" />
      <div class="absolute inset-0 flex items-center justify-center">
        <span class="text-white text-2xl font-bold">BACKPACKS</span>
      </div>
    </div>
    <div class="relative col-span-2 row-span-2 overflow-hidden group">
      <img src="./assets/images/cloot.png" alt="Clothing" class="w-full h-full object-cover transition duration-500 group-hover:brightness-100 brightness-50 rounded-lg" />
      <div class="absolute inset-0 flex items-center justify-center">
        <span class="text-white text-xl font-bold">CLOTHING</span>
      </div>
    </div>
    <div class="relative col-span-2 row-span-2 overflow-hidden group">
      <img src="./assets/images/akses.jpg" alt="Accessories" class="w-full h-full object-cover transition duration-500 group-hover:brightness-100 brightness-50 rounded-lg" />
      <div class="absolute inset-0 flex items-center justify-center">
        <span class="text-white text-xl font-bold">ACCESSORIES</span>
      </div>
    </div>
    <div class="relative col-span-4 row-span-2 overflow-hidden group">
      <img src="./assets/images/slip.jpg" alt="Sleeping Bags" class="w-full h-full object-cover transition duration-500 group-hover:brightness-100 brightness-50 rounded-lg" />
      <div class="absolute inset-0 flex items-center justify-center">
        <span class="text-white text-2xl font-bold">SLEEPING BAGS</span>
      </div>
    </div>
  </section>

  <section>
    <div class="grid grid-cols-[auto_1fr_auto] items-center gap-4">
      <!-- Navigasi Kiri -->
      <div class="flex flex-col items-center justify-center gap-4 h-full">
        <button id="prevBtn" class="text-[#638ECB] hover:text-blue-700">&#9650;</button>
        <div class="flex flex-col items-center gap-2">
          <span class="w-2 h-2 rounded-full bg-[#638ECB] opacity-100 cursor-pointer" data-dot="0"></span>
          <span class="w-2 h-2 rounded-full bg-[#638ECB] opacity-30 cursor-pointer" data-dot="1"></span>
          <span class="w-2 h-2 rounded-full bg-[#638ECB] opacity-30 cursor-pointer" data-dot="2"></span>
        </div>
        <button id="nextBtn" class="text-[#638ECB] hover:text-blue-700">&#9660;</button>
      </div>
  
      <!-- Carousel Konten -->
      <div class="relative w-full overflow-hidden">
        <!-- Slides Wrapper -->
        <div class="relative w-full">
          <!-- Slide 1 -->
          <div class="carousel-slide grid grid-cols-1 lg:grid-cols-[1.5fr_0.5fr_auto] items-center gap-4" data-slide="0">
            <div class="flex flex-col justify-center p-8 md:text-start text-center w-full">
              <h1 class="text-3xl font-bold mb-4">Duplex Classic Tent</h1>
              <p class="text-gray-700 mb-4">The thru-hikers choice!</p>
              <p class="text-gray-700 mb-4">From the Appalachian Trail to the Annapurna Circuit...</p>
              <p class="text-gray-700 mb-4">Spacious interior, unbelievable weight.</p>
              <div class="w-full">
                <a href="https://vazul.my.id" class="bg-[#638ECB] text-white px-4 py-2 rounded-md w-20">Shop Now</a>
              </div>
            </div>
            <div class="grid grid-cols-2 lg:grid-cols-1 border-t-2 lg:border-t-0 lg:border-l-2 md:px-12 py-8">
              <div>
                <h1 class="text-2xl font-bold mb-4">Features</h1>
                <p class="text-gray-700 mb-4">Sleeps 2</p>
                <h1 class="text-2xl font-bold mb-4">Set Up</h1>
                <p class="text-gray-700 mb-4">2 Trekking Poles or 48" Tent Poles</p>
              </div>
              <div>
                <h1 class="text-2xl font-bold mb-4">Floor Size</h1>
                <p class="text-gray-700 mb-4">45" x 90" (114cm x 2.3m)</p>
                <h1 class="text-2xl font-bold mb-4">Weight</h1>
                <p class="text-gray-700 mb-4">17.9 oz (507 g)</p>
              </div>
            </div>
            <div class="flex justify-center items-center h-full">
              <img src="./assets/images/tund-bg.png" alt="Duplex Classic Tent" class="w-50 h-auto">
            </div>
          </div>
  
          <!-- Slide 2 -->
          <div class="carousel-slide hidden grid grid-cols-1 lg:grid-cols-[1.5fr_0.5fr_auto] items-center gap-4" data-slide="1">
            <div class="p-8 md:text-start text-center">
              <h1 class="text-3xl font-bold mb-4">Duplex Classic Tent 2</h1>
              <p class="text-gray-700 mb-4">The thru-hikers choice!</p>
              <p class="text-gray-700 mb-4">From the Appalachian Trail to the Annapurna Circuit...</p>
              <p class="text-gray-700 mb-4">Spacious interior, unbelievable weight.</p>
              <div class="w-full">
                <a href="https://vazul.my.id" class="bg-[#638ECB] text-white px-4 py-2 rounded-md w-20">Shop Now</a>
              </div>
            </div>
            <div class="grid grid-cols-2 lg:grid-cols-1 border-t-2 lg:border-t-0 lg:border-l-2 md:px-12 py-8">
              <div>
                <h1 class="text-2xl font-bold mb-4">Features</h1>
                <p class="text-gray-700 mb-4">Sleeps 2</p>
                <h1 class="text-2xl font-bold mb-4">Set Up</h1>
                <p class="text-gray-700 mb-4">2 Trekking Poles or 48" Tent Poles</p>
              </div>
              <div>
                <h1 class="text-2xl font-bold mb-4">Floor Size</h1>
                <p class="text-gray-700 mb-4">45" x 90" (114cm x 2.3m)</p>
                <h1 class="text-2xl font-bold mb-4">Weight</h1>
                <p class="text-gray-700 mb-4">17.9 oz (507 g)</p>
              </div>
            </div>
            <div class="flex justify-center items-center h-full">
              <img src="./assets/images/tund-bg.png" alt="Second Product" class="w-50 h-auto rounded-lg">
            </div>
          </div>
  
          <!-- Slide 3 -->
          <div class="carousel-slide hidden grid grid-cols-1 lg:grid-cols-[1.5fr_0.5fr_auto] items-center gap-4" data-slide="1">
            <div class="p-8 md:text-start text-center">
              <h1 class="text-3xl font-bold mb-4">Duplex Classic Tent 3</h1>
              <p class="text-gray-700 mb-4">The thru-hikers choice!</p>
              <p class="text-gray-700 mb-4">From the Appalachian Trail to the Annapurna Circuit...</p>
              <p class="text-gray-700 mb-4">Spacious interior, unbelievable weight.</p>
              <div class="w-full">
                <a href="https://vazul.my.id" class="bg-[#638ECB] text-white px-4 py-2 rounded-md w-20">Shop Now</a>
              </div>
            </div>
            <div class="grid grid-cols-2 lg:grid-cols-1 border-t-2 lg:border-t-0 lg:border-l-2 md:px-12 py-8">
              <div>
                <h1 class="text-2xl font-bold mb-4">Features</h1>
                <p class="text-gray-700 mb-4">Sleeps 2</p>
                <h1 class="text-2xl font-bold mb-4">Set Up</h1>
                <p class="text-gray-700 mb-4">2 Trekking Poles or 48" Tent Poles</p>
              </div>
              <div>
                <h1 class="text-2xl font-bold mb-4">Floor Size</h1>
                <p class="text-gray-700 mb-4">45" x 90" (114cm x 2.3m)</p>
                <h1 class="text-2xl font-bold mb-4">Weight</h1>
                <p class="text-gray-700 mb-4">17.9 oz (507 g)</p>
              </div>
            </div>
            <div class="flex justify-center items-center h-full">
              <img src="./assets/images/tund-bg.png" alt="Second Product" class="w-50 h-auto rounded-lg">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  </main>
@endsection