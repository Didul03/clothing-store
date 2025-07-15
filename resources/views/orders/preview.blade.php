<x-layout>

<div class="max-w-4xl mx-auto mt-10 bg-white p-6 shadow rounded-lg">
    {{-- Header --}}
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-xl font-bold text-gray-800">Order #{{ $order->id }}</h2>
        <span class="text-sm text-gray-500">Order placed {{ $order->created_at->format('F d, Y') }}</span>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        {{-- Product Image --}}
        <div class="col-span-1">
             @if($order->product->image)
                <img src="{{ asset('images/' . $order->product->image) }}"
                alt="Product Image"
                class="w-full h-auto rounded border border-gray-200">
            @endif
            </div>

        {{-- Details --}}
        <div class="col-span-2 space-y-4">
            {{-- Product --}}
            <div>
                <h3 class="text-lg font-semibold text-gray-800">{{ $order->product->name ?? 'Unnamed Product' }}</h3>
                <p class="text-gray-500">${{ number_format($order->product->price ?? 0, 2) }}</p>
                <p class="text-gray-600 text-sm">
                    {{ $order->product->description ?? 'No description available for this product.' }}
                </p>
            </div>

            {{-- Order Summary --}}
            <div class="text-sm text-gray-700 space-y-1">
                <p><strong>Size:</strong> {{ $order->size ?? 'N/A' }}</p>
                <p><strong>Color:</strong> {{ $order->color ?? 'N/A' }}</p>
                <p><strong>Quantity:</strong> {{ $order->quantity ?? 1 }}</p>
                <p><strong>Total Price:</strong> ${{ number_format($order->total_price ?? 0, 2) }}</p>
            </div>

            {{-- Address --}}
            <div>
                <h4 class="font-semibold text-gray-700 mb-1">Delivery address</h4>
                @if($order->full_name || $order->address)
                    <p class="text-sm text-gray-600 leading-tight">
                        {{ $order->full_name ?? '' }}<br>
                        {{ $order->address ?? '' }}<br>
                        {{ $order->city ?? '' }} {{ $order->postal_code ?? '' }}
                    </p>
                @else
                    <p class="text-sm text-gray-400 italic">No delivery address provided.</p>
                @endif
            </div>

            {{-- Shipping Info --}}
            <div>
                <h4 class="font-semibold text-gray-700 mb-1">Shipping updates</h4>
                <p class="text-sm text-gray-600">
                    {{ $order->phone ? substr($order->phone, 0, 2) . str_repeat('*', strlen($order->phone) - 4) . substr($order->phone, -2) : 'No phone provided' }}<br>
                    @auth
                        {{ Auth::user()->email ? substr(Auth::user()->email, 0, 1) . '•••@' . substr(strrchr(Auth::user()->email, "@"), 1) : 'No email' }}
                    @endauth
                </p>
                <a href="#" class="text-sm text-indigo-600 hover:underline">Edit</a>
            </div>
        </div>
    </div>

    {{-- Progress Bar --}}
    <div class="mt-8">
        <p class="text-sm text-gray-500 mb-2">
            Preparing to ship on {{ $order->created_at->addDays(2)->format('F d, Y') }}
        </p>
        <div class="w-full h-2 bg-gray-200 rounded-full overflow-hidden">
            <div class="h-full bg-indigo-600 w-1/3"></div>
        </div>
        <div class="flex justify-between text-xs text-gray-600 mt-2">
            <span class="text-indigo-600 font-semibold">Order placed</span>
            <span class="text-indigo-600 font-semibold">Processing</span>
            <span>Shipped</span>
            <span>Delivered</span>
        </div>
    </div>

    {{-- Back --}}
    <div class="mt-6 text-right">
        <a href="{{ route('orders.cart') }}" class="font-semibold text-indigo-600">
            Back
        </a>
    </div>
</div>

</x-layout>