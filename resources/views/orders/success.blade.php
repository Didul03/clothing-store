<x-layout>

<div class="p-6 text-center">
    <h1 class="text-2xl font-bold text-green-600">Thank you for your purchase!</h1>
    <p class="mt-4">Your order has been successfully placed.</p>
    <a href="{{ route('products.index') }}" class="mt-6 inline-block bg-blue-500 text-white px-6 py-2 rounded hover:bg-blue-600">
        Back to Products
    </a>
    <p class="mt-4"></p>
        
                <div class="hidden sm:mb-8 sm:flex sm:justify-center :">
                    <div class="relative rounded-full px-3 py-1 text-sm/6 text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20">
                     <a href="{{ route('orders.cart') }}" class="font-semibold text-indigo-600"><span class="absolute inset-0" aria-hidden="true"></span>My Orders<span aria-hidden="true">&rarr;</span></a>
                    </div>
                </div>
        

    



</x-layout>
