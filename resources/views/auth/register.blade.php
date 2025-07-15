<x-layout>
   
<body class="bg-gray-50 font-sans text-gray-800">

    
    <!-- Main Section -->
    <div class="max-w-7xl mx-auto px-6 py-16  flex-col-reverse lg:flex-row items-center gap-12 bg-white rounded-xl shadow-lg mt-10">
   
   
        <div class="mx-auto max-w-2xl py-16 sm:py-20 lg:py-24">
            <form method="POST" action="{{ route('register') }}"class="max-w-2xl mx-auto mt-12 space-y-6" >
                    @csrf

                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                    <input name="name" placeholder="Name" required 
                    class="mt-2 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                    </div>

                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Email</label>
                    <input name="email" placeholder="Email" type="email" required
                    class="mt-2 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                    </div>

                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Password</label>
                    <input name="password" placeholder="Password" type="password" required
                    class="mt-2 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                    </div>


                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Comfirm Password</label>
                        <input name="password_confirmation" placeholder="Confirm Password" type="password" required
                        class="mt-2 w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                        
                    </div>


                    <div>
                    <select name="role">
                            <option value="user">User</option>
                            <option value="employer">Employer</option>
                        </select>   
                    </div>

                <div class="text-right">
                    <button type="submit"class="inline-block rounded-md bg-indigo-600 px-4 py-2 text-white font-semibold hover:bg-indigo-500" >
                        Register
                    </button>
                </div>

                
                    <div class="hidden sm:mb-8 sm:flex sm:justify-left">
                        <div class="relative rounded-full px-3 py-1 text-sm/6 text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20">
                        Already have an account? <a href="{{ route('login') }}" class="font-semibold text-indigo-600"><span class="absolute inset-0" aria-hidden="true"></span>Sign in<span aria-hidden="true">&rarr;</span></a>
                        </div>
                    </div>

                
                    
            </form>
        </div>
    </div>
</body>

</x-layout>



