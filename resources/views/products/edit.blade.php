<x-layout>
    <div class="max-w-xl mx-auto mt-10 bg-white p-6 shadow rounded">
        <h2 class="text-2xl font-semibold mb-4">Edit Product</h2>
        <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <label class="block">Name</label>
            <input type="text" name="name" value="{{ $product->name }}" class="w-full border px-3 py-2 rounded mb-4" required>

            <label class="block">Description</label>
            <textarea name="description" class="w-full border px-3 py-2 rounded mb-4" required>{{ $product->description }}</textarea>

            <label class="block">Price</label>
            <input type="number" name="price" value="{{ $product->price }}" class="w-full border px-3 py-2 rounded mb-4" required>

            <label class="block">Image</label>
            <input type="file" name="image" class="mb-4">

            @if($product->image)
                <img src="{{ asset('images/' . $product->image) }}" width="150" class="mb-4">
            @endif

            <button class="bg-blue-500 text-white px-4 py-2 rounded">Update Product</button>
            
        </form>

                           <div style="text-align: right;">
                            <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600"
                                    onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
                            </form>
                            </div>

        </form>
    </div>
</x-layout>

