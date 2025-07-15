<x-layout>

<!DOCTYPE html>
<html lang="en">

<body class="bg-gray-50 font-sans text-gray-800">

    

    <!-- Main Section -->
    <div class="max-w-7xl mx-auto px-6 py-16 flex-col-reverse lg:flex-row items-center gap-12 bg-white rounded-xl shadow-lg mt-10">
   
    

            <form method="POST" action="{{ route('login') }}"class="max-w-2xl mx-auto mt-12 space-y-6">
                @csrf

                <h2 class="text-xl font-semibold text-gray-900">LOG IN</h2>


                <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Email</label>
                <input name="email" placeholder="Email" type="email" required class="mt-2 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" >
                </div>

                <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Password</label>
                <input name="password" placeholder="Password" type="password" required class="mt-2 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" >
                </div>

                <div class="text-right">
                <button type="submit"class="inline-block rounded-md bg-indigo-600 px-4 py-2 text-white font-semibold hover:bg-indigo-500" >
                    Login
                </button>
            </div>
                <div class="hidden sm:mb-8 sm:flex sm:justify-left">
                    <div class="relative rounded-full px-3 py-1 text-sm/6 text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20">
                    Haven't an account? <a href="{{ route('register') }}" class="font-semibold text-indigo-600"><span class="absolute inset-0" aria-hidden="true"></span>Register Now<span aria-hidden="true">&rarr;</span></a>
                    </div>
                </div>

            
                
            </form>
        </div>
    </div>
</body>


</x-layout>          
   
        

        