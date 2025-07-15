<x-layout>

<div class="max-w-5xl mx-auto py-10">
    <h2 class="text-2xl font-bold mb-6">My Orders</h2>

    @forelse ($orders as $order)
        <div class="border p-4 mb-4 rounded shadow-md bg-white">
            <div class="flex items-center gap-4">
                @if($order->product->image)
                    <img src="{{ asset('images/' . $order->product->image) }}" class="w-24 h-24 object-cover rounded">
                @endif

                <div>
                    <h3 class="text-lg font-semibold">{{ $order->product->name }}</h3>
                    <p>Quantity: {{ $order->quantity }}</p>
                    <p>Total: ${{ $order->total_price }}</p>
                    @if($order->size)<p>Size: {{ $order->size }}</p>@endif
                    @if($order->color)<p>Color: {{ $order->color }}</p>@endif
                    @if($order->payment_method)<p>Payment: {{ $order->payment_method }}</p>@endif
                    <p class="text-sm text-gray-500">Ordered on {{ $order->created_at->format('d M Y') }}</p>

                </div>
            </div>
          
                <div style="text-align: right;">
                    <a href="{{ route('orders.preview', $order->id) }}"  class="font-semibold text-indigo-600"> Preview </a>
                </div>

        </div>
    @empty
        <p>No orders yet.</p>
    @endforelse
</div>

</x-layout>