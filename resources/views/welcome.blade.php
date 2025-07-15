<x-layout>


    <!-- Main Section -->
    <div class="max-w-7xl mx-auto px-6 py-16 flex flex-col-reverse lg:flex-row items-center gap-12 bg-white rounded-xl shadow-lg mt-10">
        
        <!-- Left -->
        <div class="w-full lg:w-1/2">
            <h1 class="text-4xl font-extrabold tracking-tight sm:text-5xl mb-4 text-blue-800">Welcome to Our Amazing Store</h1>
            <p class="text-lg text-gray-600 mb-6">Discover a wide range of high-quality clothing and accessories designed just for you.</p>

            <h2 class="text-xl font-semibold text-gray-800 mb-2">Featured Categories</h2>
            <ul class="mb-6 space-y-2 text-blue-600 list-disc list-inside">
              @if(Auth::check())
                    <li><a href="{{ route('products.index') }}" class="hover:underline">New Arrivals</a></li>
                    <li><a href="{{ route('products.index') }}" class="hover:underline">Best Sellers</a></li>
                    <li><a href="{{ route('products.index') }}" class="hover:underline">Special Offers</a></li>
                @else
                    <li><a href="{{ route('register') }}" class="hover:underline">New Arrivals</a></li>
                    <li><a href="{{ route('register') }}" class="hover:underline">Best Sellers</a></li>
                    <li><a href="{{ route('register') }}" class="hover:underline">Special Offers</a></li>
                @endif                
                
            </ul>

            @if(Auth::check())
            <a href="{{ route('products.index') }}" class="inline-block bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold shadow-md hover:bg-blue-700 transition">Browse Products</a>
            @else
            <a href="{{ route('register') }}" class="inline-block bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold shadow-md hover:bg-blue-700 transition">Browse Products</a>
            @endif
        </div>


        <!-- Right -->
        <div class="w-full lg:w-1/2">
            <img src="{{ asset('images/store.jpg') }}" alt="Store Banner" class="rounded-lg shadow-lg w-full">
        </div>
    </div>

</body>
</html>

</x-layout>