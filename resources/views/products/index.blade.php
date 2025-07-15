<x-layout>
            @if(session('success'))
            <div class="bg-green-200 text-green-800 px-4 py-2 rounded my-4">
                {{ session('success') }}
            </div>
            @endif

    <div class="bg-white">
        <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-bold tracking-tight text-gray-900">Product List</h2>
                @if(Auth::check() && Auth::user()->isEmployer())
                    <a href="{{ route('products.create') }}" class="inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                        Add Product</a>
                @endif
                
            </div>

            <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
                @foreach($products as $product)
                    <a href="{{ route('products.show', $product->id) }}" class="group block shadow rounded-lg overflow-hidden bg-white">
                        @if($product->image)
                            <img src="{{ asset('images/' . $product->image) }}"
                                alt="{{ $product->name }}"
                                class="aspect-[4/5] w-full bg-gray-200 object-cover group-hover:opacity-75">
                        @else
                            <div class="aspect-[4/5] w-full bg-gray-100 flex items-center justify-center text-gray-400">
                                No Image
                            </div>
                        @endif
                        <div class="p-4">
                            <h3 class="text-sm text-gray-700">{{ $product->name }}</h3>
                            <p class="mt-1 text-lg font-medium text-gray-900">${{ $product->price }}</p>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</x-layout>


