@extends('layouts.app')
@section('content')
<main>
<div class="max-w-5xl mx-auto p-6">
    <h2 class="text-2xl font-semibold mb-2">My Cart</h2>
    <p class="uppercase text-sm font-semibold mb-6">1 Item</p>

    <div class="border-t pt-6 flex flex-col md:flex-row items-start md:items-center gap-6">
        <!-- Product Image -->
        <div class="w-full md:w-1/3">
            <img src="./assets/images/hexamid.png" alt="Hexamid Tent" class="w-full rounded-lg">
        </div>

        <!-- Product Info -->
        <div class="flex-1">
            <h3 class="text-xl font-semibold">Hexamid Tent</h3>
            <p class="text-gray-600 mt-1">$499.00</p>

            <div class="mt-4 space-y-2">
                <div>
                    <p class="font-semibold">Color</p>
                    <p class="text-gray-600">Blue</p>
                </div>
                <div>
                    <p class="font-semibold">Qty</p>
                    <input 
                        type="number" 
                        value="1" 
                        min="1" 
                        oninput="this.value = Math.max(1, parseInt(this.value)) || 1"
                        class="w-16 border rounded text-center py-1">
                </div>
                <div>
                    <a href="#" class="text-sm text-blue-600 hover:underline">Remove</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Continue Shopping -->
    <div class="mt-10">
        <a href="{{ route('home.index') }}" class="inline-flex items-center border px-6 py-2 text-sm font-medium hover:bg-gray-100">
            ← Continue Shopping
        </a>
    </div>
</div>
</main>
@endsection