<x-layout>


    <div class="max-w-4xl mx-auto px-6 py-12 bg-white rounded-xl shadow-lg mt-10">

        <!-- Product Preview -->
        <div class="flex flex-col md:flex-row items-center gap-6 mb-8">
            @if($product->image)
                <img src="{{ asset('images/' . $product->image) }}"
                    alt="{{ $product->name }}"
                    class="w-40 h-40 object-cover rounded-lg shadow">
            @endif
            <div>
                <h2 class="text-2xl font-semibold text-gray-800">{{ $product->name }}</h2>
                <p class="text-gray-600 mt-2">{{ $product->description }}</p>
                <p class="text-blue-600 font-bold mt-2 text-lg">${{ $product->price }}</p>
                <p class="text-sm text-gray-500 mt-1">Estimated Delivery: <strong>3-5 business days</strong></p>
            </div>
        </div>

        <!-- Checkout Form -->
        <form id="orderForm" action="{{ route('orders.store') }}" method="POST">
            @csrf
            <input type="hidden" name="product_id" value="{{ $product->id }}">
            
            <div class="max-w-xl mx-auto p-6 bg-white rounded-lg shadow">
            <div class="grid grid-cols-1 gap-4">

                <h2 class="text-2xl font-semibold mb-6 text-gray-800">Product Preference </h2>
                
                 <!-- Size -->
@php
    $sizes = explode(',', $product->available_sizes);
    $colors = explode(',', $product->available_colors);
@endphp

<!-- Size Section -->
<div class="mb-6">
    <div class="flex items-center justify-between mb-2">
        <label class="text-sm font-medium text-gray-700">Size</label>
        <a href="#" class="text-sm font-medium text-indigo-600 hover:text-indigo-500">Size guide</a>
    </div>

    <div class="mt-2 grid grid-cols-4 gap-3">
        @foreach($sizes as $size)
        <label class="relative cursor-pointer">
            <input type="radio" name="size" value="{{ trim($size) }}" class="peer hidden" required>
            <div class="flex items-center justify-center rounded-md border border-gray-300 bg-white p-3 text-sm font-medium uppercase
                        peer-checked:border-blue-600 peer-checked:bg-blue-600 peer-checked:text-white
                        hover:border-blue-400 transition-colors duration-200">
                {{ trim($size) }}
            </div>
        </label>
        @endforeach
    </div>
</div>

<!-- Color Section -->
<div class="mb-6">
    <label class="block text-sm font-medium text-gray-700 mb-2">Color</label>
    <div class="flex flex-wrap gap-4">
        @foreach($colors as $color)
            @php
                $colorClassMap = [
                    'Red' => 'bg-red-500',
                'Blue' => 'bg-blue-500',
                'Green' => 'bg-green-500',
                'Black' => 'bg-black',
                'White' => 'bg-white border border-gray-300',
                'Purple' => 'bg-purple-500',
                'Pink' => 'bg-pink-400',
                'Yellow' => 'bg-yellow-400',
                ];
                $class = $colorClassMap[trim($color)] ?? 'bg-gray-300';
            @endphp

            <label class="relative cursor-pointer">
                <input type="radio" name="color" value="{{ trim($color) }}" class="peer hidden" required>
                <div class="w-10 h-10 rounded-full {{ $class }}
                            peer-checked:ring-2 peer-checked:ring-blue-500 peer-checked:ring-offset-2
                            border border-gray-300 hover:scale-105 transition-transform duration-150 flex items-center justify-center">
                    <svg class="hidden peer-checked:block w-4 h-4 text-white" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                    </svg>
                </div>
            </label>
        @endforeach
    </div>
</div>





                <!-- Quantity -->
                <div>
                    <label class="block text-sm font-medium text-gray-700">Quantity</label>
                    <input type="number" name="quantity" min="1" value="1"
                        class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" />
                </div>



            <!-- Total Price -->
            <div class="mt-6">
                <p class="text-lg font-medium text-gray-800">Total: <span class="text-blue-600">${{ $product->price }}</span></p>
            </div>  
            
                <div class="grid grid-cols-1 gap-4">
                <div class="grid grid-cols-1 gap-4">
                </div>
                

                <h2 class="text-2xl font-semibold mb-6 text-gray-800">Shipping Details</h2>

            <!-- Shipping Info -->
                <div class="grid grid-cols-1 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Full Name</label>
                        <input type="text" name="full_name" required
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" />
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700">Address</label>
                        <input type="text" name="address" required
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" />
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700">City</label>
                        <input type="text" name="city" required
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" />
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700">Postal Code</label>
                        <input type="text" name="postal_code" required
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" />
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-700">Phone</label>
                        <input type="text" name="phone" required
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" />
                    </div>

                    <!-- Payment Method -->
                     <div class="grid grid-cols-1 gap-4">
                     <h2 class="text-2xl font-semibold mb-6 text-gray-800">Payment Details</h2>
                    
                     <div>
                        <label class="block text-sm font-medium text-gray-700">Payment Method</label>
                        <select name="payment_method" id="payment_method" onchange="toggleCardFields()" required
                            class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
                            <option value="">Select method</option>
                            <option value="Cash on Delivery">Cash on Delivery</option>
                            <option value="Card">Card</option>
                        </select>
                    </div>

                    <!-- Card Fields -->
                    <div id="cardFields" style="display: none;">
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Card Number</label>
                            <input type="text" name="card_number"
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" />
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">Expiry</label>
                            <input type="text" name="expiry"
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" />
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700">CVV</label>
                            <input type="text" name="cvv"
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500" />
                        </div>
                    </div>
                </div>


                <!-- Confirm Button -->
                <div class="mt-6 text-right">
                    <button type="button" onclick="openModal()"
                        class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700 shadow">
                        Confirm Order
                    </button>
                </div>
            </form>
        </div>

        <!-- Confirmation Modal -->
        <div id="confirmModal"
            class="fixed inset-0 bg-gray-800 bg-opacity-75 flex items-center justify-center z-50 hidden">
            <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-md">
                <h3 class="text-xl font-semibold text-gray-800 mb-4">Confirm Your Order</h3>
                <p class="text-gray-600 mb-6">Are you sure you want to place this order?</p>
                <div class="flex justify-end gap-4">
                    <button onclick="closeModal()"
                        class="bg-gray-300 text-gray-800 px-4 py-2 rounded hover:bg-gray-400">Cancel</button>
                    <button onclick="document.getElementById('orderForm').submit()"
                        class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Yes, Confirm</button>
                </div>
            </div>
        </div>

        <!-- JS for Modal and Card Toggle -->
        <script>
            function openModal() {
                document.getElementById('confirmModal').classList.remove('hidden');
            }

            function closeModal() {
                document.getElementById('confirmModal').classList.add('hidden');
            }

            function toggleCardFields() {
                const method = document.getElementById('payment_method').value;
                const cardFields = document.getElementById('cardFields');
                cardFields.style.display = method === 'Card' ? 'block' : 'none';
            }
        </script>



</x-layout>
