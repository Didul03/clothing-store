<x-layout>  

                 
<div class="relative isolate px-6 pt-14 lg:px-8">
    <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
      <div class="relative left-[calc(50%-11rem)] aspect-1155/678 w-144.5 -translate-x-1/2 rotate-30 bg-linear-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-288.75" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>
    
      </div>
      <div class="text-center">
        <h1 class="text-5xl font-semibold tracking-tight text-balance text-gray-900 sm:text-7xl">Our Store Outlets</h1>
        <p class="mt-8 text-lg font-medium text-pretty text-gray-500 sm:text-xl/8"><b>For all your fashion and lifestyle needs!</b> <br> Visit our stores. <br> | Colombo | Kandy | Galle |</p>
        <div class="mt-10 flex items-center justify-center gap-x-6">
          <a href="/home" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Explore Products</a>
         
        </div>
      </div>
    </div>
   
</div>

<div class="bg-gray-100">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="mx-auto max-w-2xl py-16 sm:py-24 lg:max-w-none lg:py-32">
      <h2 class="text-2xl font-bold text-gray-900">Locations</h2>

      <div class="mt-6 space-y-12 lg:grid lg:grid-cols-3 lg:space-y-0 lg:gap-x-6">
        <div class="group relative">
          <img class="card-img-top" src="{{ asset('images/Colomb.jpg')}}" alt="Card image cap" class="w-full rounded-lg bg-white object-cover group-hover:opacity-75 max-sm:h-80 sm:aspect-2/1 lg:aspect-square" />
          <h3 class="mt-6 text-sm text-gray-500">
            <p> 1st Floor, CCC, Colombo 02<br>
                        011-2345678 </p>
          </h3>
          <p class="text-base font-semibold text-gray-900">Colombo City Centre</p>
        </div>
        <div class="group relative">
          <img class="card-img-top" src="{{ asset('images/GalleFort.jpg')}}" alt="Card image cap" class="w-full rounded-lg bg-white object-cover group-hover:opacity-75 max-sm:h-80 sm:aspect-2/1 lg:aspect-square" />
          <h3 class="mt-6 text-sm text-gray-500">
            <a href="#">
              <span class="absolute inset-0"></span>
              <p>15 Main Street, Galle Fort<br>
                     Contact: 091-8765432</p>
            </a>
          </h3>
          <p class="text-base font-semibold text-gray-900">Galle Fort Outlet</p>
        </div>
        <div class="group relative">
          <img class="card-img-top" src="{{ asset('images/kandy.jpeg')}}" alt="Card image cap" class="w-full rounded-lg bg-white object-cover group-hover:opacity-75 max-sm:h-80 sm:aspect-2/1 lg:aspect-square" />
          <h3 class="mt-6 text-sm text-gray-500">
            <a href="#">
              <span class="absolute inset-0"></span>
              <p> 2nd Floor, KCM, Kandy<br>
                    081-1234567</p>
            </a>
          </h3>
          <p class="text-base font-semibold text-gray-900">Kandy City Mall</p>
        </div>
      </div>
    </div>
  </div>
</div>




</x-layout>