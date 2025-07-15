<x-layout>  
    
<div class="mx-auto max-w-2xl py-16 sm:py-20 lg:py-24">

<div class="">
           
    <form method="POST" action="{{ route('contact.store') }}" class="max-w-2xl mx-auto mt-12 space-y-6">
      
      @csrf

        <h2 class="text-xl font-semibold text-gray-900">Contact Us</h2>

        <div>
            <label for="name" class="block text-sm font-medium text-gray-700">Your Name</label>
            <input type="text" id="name" name="name" placeholder="Enter Here" required
                class="mt-2 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
        </div>

        <div>
            <label for="email" class="block text-sm font-medium text-gray-700">Your Email</label>
            <input type="email" id="email" name="email" placeholder="Enter Here"required
                class="mt-2 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
        </div>

        <div>
            <label for="subject" class="block text-sm font-medium text-gray-700">Subject</label>
            <input type="text" id="subject" name="subject" placeholder="Enter Here" required
                class="mt-2 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
        </div>

        <div>
            <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
            <textarea id="message" name="message" rows="4" placeholder="Enter Here" required
                    class="mt-2 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500"></textarea>
        </div>

        <div class="text-right">
            <button type="submit"class="inline-block rounded-md bg-indigo-600 px-4 py-2 text-white font-semibold hover:bg-indigo-500">
            Send Message
            </button>

        </div>
    </form>

    <div class="mx-auto max-w-2xl py-16 sm:py-20 lg:py-24">

</div>
    <div class="bg-white">
      <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
        <h2 class="sr-only">Products</h2>

        <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
          <a href="#" class="group">
            <img src="{{ asset('images/black.jpg') }}" alt="Black Summer Dresses for ladies." class="aspect-square w-full rounded-lg bg-gray-200 object-cover group-hover:opacity-75 xl:aspect-7/8" />
            <h3 class="mt-4 text-sm text-gray-700">Summer Dresses</h3>
            <p class="mt-1 text-lg font-medium text-gray-900">$48</p>
          </a>
          <a href="#" class="group">
            <img src="{{ asset('images/brown.jpg') }}" alt="Summer Dresses for ladies." class="aspect-square w-full rounded-lg bg-gray-200 object-cover group-hover:opacity-75 xl:aspect-7/8" />
            <h3 class="mt-4 text-sm text-gray-700">Nomad Tumbler</h3>
            <p class="mt-1 text-lg font-medium text-gray-900">$35</p>
          </a>
          <a href="#" class="group">
            <img src="{{ asset('images/pink.jpg') }}" alt="Summer Dresses for ladies." class="aspect-square w-full rounded-lg bg-gray-200 object-cover group-hover:opacity-75 xl:aspect-7/8" />
            <h3 class="mt-4 text-sm text-gray-700">Focus Paper Refill</h3>
            <p class="mt-1 text-lg font-medium text-gray-900">$89</p>
          </a>
          <a href="#" class="group">
            <img src="{{ asset('images/blue.jpg') }}" alt="Summer Dresses for ladies." class="aspect-square w-full rounded-lg bg-gray-200 object-cover group-hover:opacity-75 xl:aspect-7/8" />
            <h3 class="mt-4 text-sm text-gray-700">Machined Mechanical Pencil</h3>
            <p class="mt-1 text-lg font-medium text-gray-900">$35</p>
          </a>

          <!-- More products... -->
        </div>
      </div>
    </div>
</div>
</x-layout>