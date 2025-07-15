<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Le-Flivy</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>

<div class="min-h-full">
  <nav class="bg-gray-800">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between">
        <div class="flex items-center">
          <div class="shrink-0">
            <a href="/" class="block w-12 h-12 overflow-hidden rounded-md bg-white p-1 shadow-md">
                <x-application-logo class="w-full h-full object-cover" />
            </a>

          </div>
          <div class="hidden md:block">
            <div class="ml-10 flex items-baseline space-x-4">
              @if(Auth::check())
              <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
              <a href="/home" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white" aria-current="page">Home</a>
              <a href="{{ route('products.index') }}" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Products</a>
              <a href="/contact" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Contact Us</a>
              <a href="/outlets" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Outlets</a>
              @endif

            </div>
          </div>
        </div>
        <div class="hidden md:block">
          <div class="ml-4 flex items-center md:ml-6">
             
              @if(Auth::check())
                  <span class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">
                      Hello, {{ Auth::user()->name }}
                  </span>
                  <form action="{{ route('logout') }}" method="POST">
                      @csrf
                      <button type="submit" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">
                          Logout
                      </button>
                   </form>
                @else
                    <a href="{{ route('login') }}" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Login</a>
                    <a href="{{ route('register') }}"class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Register</a>
                @endif
              
            

              <!-- Profile dropdown -->
                <div class="relative ml-3 flex items-center space-x-4">

                    <!-- User Profile Icon -->
                    <div>
                        <button type="button" class="relative flex max-w-xs items-center rounded-full bg-gray-800 text-sm focus:outline-none" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                            <span class="sr-only">Open user menu</span>
                            <img class="size-8 rounded-full" src="{{ asset('images/user1.png')}}" alt="User" />
                        </button>
                    </div>


                    <!-- Orders/Cart Icon -->
                     @if(Auth::check())
                    <a href="{{ route('orders.cart') }}" class="flex flex-col items-center group w-20 hover:opacity-90">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-white group-hover:text-blue-400 transition duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13l-1.5 6h13L17 13M7 13H5.4M17 13l1.5 6M9 21h6" />
                        </svg>
                    </a>
                    @endif

                </div> 
            </div>
          </div>
        </div>


    <div class="-mr-2 flex md:hidden">
          <!-- Mobile menu button -->
          <button type="button" class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 focus:outline-hidden" aria-controls="mobile-menu" aria-expanded="false">

            <!-- Menu open: "hidden", Menu closed: "block" -->
            <svg class="block size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
          </button>
        </div>


    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="md:hidden" id="mobile-menu">
      <div class="space-y-1 px-2 pt-2 pb-3 sm:px-3">
        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
        @if(Auth::check())
              <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
              <a href="/home" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white" aria-current="page">Home</a>
              <a href="{{ route('products.index') }}" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Products</a>
              <a href="/contact" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Contact Us</a>
              <a href="/outlets" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Outlets</a>
              @endif

      </div>
      <div class="border-t border-gray-700 pt-4 pb-3">
        <div class="flex items-center px-5">
          <div class="shrink-0">
            <img class="size-10 rounded-full" src="{{ asset('images/user1.png')}}" alt="" />
          </div>
          <div class="ml-3">
              @if(Auth::check())
                  <span class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">
                      Hello, {{ Auth::user()->name }}
                  </span>
                  <form action="{{ route('logout') }}" method="POST">
                      @csrf
                      <button type="submit" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">
                          Logout
                      </button>
                   </form>
                @else
                    <a href="{{ route('login') }}" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Login</a>
                    <a href="{{ route('register') }}"class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Register</a>
                @endif
              

          </div>
          <button type="button" class="relative ml-auto shrink-0 rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 focus:outline-hidden">
            <span class="absolute -inset-1.5"></span>
            <span class="sr-only">View notifications</span>
            <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
              <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
            </svg>
          </button>
        </div>
            <div class="hidden md:block">

              @if(Auth::check())
                <a href="{{ route('orders.cart') }}" class="flex flex-col items-center group w-24 hover:opacity-90">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16 text-blue-500 group-hover:text-blue-700 transition duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13l-1.5 6h13L17 13M7 13H5.4M17 13l1.5 6M9 21h6" />
                    </svg>
                    <span class="mt-2 text-sm font-semibold text-gray-700 group-hover:text-blue-600"> My Orders</span>
                </a>
              @endif
            </div>
       
      </div>
    </div>
  </nav>

    <header class="bg-white shadow-sm">
      
    </header>

    <main>
      <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <!-- Your content -->
        
      </div>
    </main>

</div>
 {{ $slot}}


</body>
</html>



              