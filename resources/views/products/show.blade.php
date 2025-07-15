
<x-layout>


@if(Auth::check() && Auth::user()->isEmployer())
    
@endif

  
    <div class="flex min-h-full items-stretch justify-center text-center md:items-center md:px-2 lg:px-4">
      <!--
        Modal panel, show/hide based on modal state.

        Entering: "ease-out duration-300"
          From: "opacity-0 translate-y-4 md:translate-y-0 md:scale-95"
          To: "opacity-100 translate-y-0 md:scale-100"
        Leaving: "ease-in duration-200"
          From: "opacity-100 translate-y-0 md:scale-100"
          To: "opacity-0 translate-y-4 md:translate-y-0 md:scale-95"
      -->
      <div class="flex w-full transform text-left text-base transition md:my-8 md:max-w-2xl md:px-4 lg:max-w-4xl">
        <div class="relative flex w-full items-center overflow-hidden bg-white px-4 pt-14 pb-8 shadow-2xl sm:px-6 sm:pt-8 md:p-6 lg:p-8">
          <a href="{{ route('products.index') }}">
        <button type="button" class="absolute top-4 right-4 text-gray-400 hover:text-gray-500 sm:top-8 sm:right-6 md:top-6 md:right-6 lg:top-8 lg:right-8">
            <span class="sr-only">Close</span>
            <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
              
            </svg>
          </button>
          </a>

          <div class="grid w-full grid-cols-1 items-start gap-x-6 gap-y-8 sm:grid-cols-12 lg:gap-x-8">

              @if($product->image)
                            <img src="{{ asset('images/' . $product->image) }}"
                                 alt="{{ $product->name }}"
                                 class="aspect-2/3 w-full rounded-lg bg-gray-100 object-cover sm:col-span-4 lg:col-span-5" >
                        @else
                            <div class="aspect-square w-full bg-gray-100 flex items-center justify-center text-gray-400">
                                No Image
                            </div>
                        @endif

            
            <div class="sm:col-span-8 lg:col-span-7">
              <h2 class="text-5xl font-semibold tracking-tight text-balance text-gray-900 sm:text-7xl">{{ $product->name }}</h2>

                <p class="text-2xl text-gray-900">${{ $product->price }}</p>
                <p class="mt-8 text-lg font-medium text-pretty text-gray-500 sm:text-xl/8"><b>{{ $product->description }}</b> </p>
                
                <div class="mt-10 flex items-center justify-center gap-x-6">
                    
         
                </div>

            
                <form>
                  <!-- Colors -->
                  <fieldset aria-label="Choose a color">
                    <legend class="text-sm font-medium text-gray-900">Color</legend>

                    <div class="mt-4 flex items-center gap-x-3">
                      <div class="flex rounded-full outline -outline-offset-1 outline-black/10">
                        <input aria-label="White" type="radio" name="color" value="white" checked class="size-8 appearance-none rounded-full bg-white forced-color-adjust-none checked:outline-2 checked:outline-offset-2 checked:outline-gray-400 focus-visible:outline-3 focus-visible:outline-offset-3" />
                      </div>
                      <div class="flex rounded-full outline -outline-offset-1 outline-black/10">
                        <input aria-label="Gray" type="radio" name="color" value="gray" class="size-8 appearance-none rounded-full bg-gray-200 forced-color-adjust-none checked:outline-2 checked:outline-offset-2 checked:outline-gray-400 focus-visible:outline-3 focus-visible:outline-offset-3" />
                      </div>
                      <div class="flex rounded-full outline -outline-offset-1 outline-black/10">
                        <input aria-label="Black" type="radio" name="color" value="black" class="size-8 appearance-none rounded-full bg-gray-900 forced-color-adjust-none checked:outline-2 checked:outline-offset-2 checked:outline-gray-900 focus-visible:outline-3 focus-visible:outline-offset-3" />
                      </div>
                    </div>
                  </fieldset>

                  <!-- Sizes -->
                  <fieldset class="mt-10" aria-label="Choose a size">
                    <div class="flex items-center justify-between">

                        <div class="mb-6">
                            <div class="flex items-center justify-between mb-2">
                                <label class="text-sm font-medium text-gray-700">Size</label>
                                <a href="#" class="text-sm font-medium text-indigo-600 hover:text-indigo-500">Size guide</a>
                            </div>

                            <div class="mt-2 grid grid-cols-4 gap-3">
                                @php
                                    $sizes = ['S' => 'Small', 'M' => 'Medium', 'L' => 'Large', 'XL' => 'Extra Large'];
                                @endphp

                                @foreach($sizes as $key => $label)
                                <label class="relative cursor-pointer">
                                    <input type="radio" name="size" value="{{ $key }}" class="peer hidden" required>
                                    <div class="flex items-center justify-center rounded-md border border-gray-300 bg-white p-3 text-sm font-medium uppercase
                                                peer-checked:border-blue-600 peer-checked:bg-blue-600 peer-checked:text-white
                                                hover:border-blue-400 transition-colors duration-200">
                                        {{ $key }}
                                    </div>
                                </label>
                                @endforeach
                            </div>
                        </div>
                  </fieldset>

                  @if(Auth::check())
                  <a href="{{ route('orders.create', ['product_id' => $product->id]) }}"
                   class="mt-6 flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 px-8 py-3 text-base font-medium text-white hover:bg-indigo-700 focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:outline-hidden">
                    Buy Now
                  </a>
                  @endif
               
                </form>
                    @if(Auth::check() && Auth::user()->isEmployer())
                      <div class="max-w-3xl mx-auto mt-10 p-6 bg-white shadow-lg rounded-lg">
                        
                            <a href="{{ route('products.create') }}" class="inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                              Add Product
                            </a>

                            <div style="text-align: right;">
                              <a href="{{ route('products.edit', $product->id) }}" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Edit</a>

                              <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                                  @csrf
                                  @method('DELETE')
                                  <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600"
                                      onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
                              </form>
                          </div>
                    </div> 
                    @endif


              </section>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

</x-layout>
