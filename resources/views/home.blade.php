<x-layout>
    

<body>


    <header class="hero">
        <div class="hero-content">
            <p class="summer-collection">SUMMER COLLECTION</p>
            <h1>Fall - Winter <br> Collections </h1>
            <p class="tagline">A specialist label creating luxury essentials. Ethically crafted <br> with an unwavering commitment to exceptional quality.</p>
            <button class="shop-now-button">SHOP NOW →</button>
            
        </div>
        <div class="hero-image">
            <img src="{{ asset('images/lady.jpg')}}" alt="Model wearing top">
        </div>
    </header>
    

    <section class="clothing-section">
        <h2>Discover fashion that fits your vibe, every day!</h2>
        <div class="clothing-image">
            <img src="{{ asset('images/lady2.jpg')}}" alt="Model wearing clothing">
        </div>
        <button class="view-all-button">View All</button>
        
    </section>

        <section class="hero">
            

        <div class="hero-content">
                <p class="summer-collection">SPRING BLOOM</p>
                <h1>Spring - Summer <br> Collections </h1>
                <p class="tagline"> A vibrant collection celebrating renewal and style. Thoughtfully designed <br> with a focus on sustainable elegance and timeless comfort.</p>
                <button class="shop-now-button">SHOP NOW →</button>
                <div class="social-icons">
                
                </div>
            </div>
            <div class="hero-image">
                <img src="{{ asset('images/younglady.jpg')}}" alt="Model wearing top">
            </div>
        </section>

        <div class="relative isolate px-6 pt-14 lg:px-8">
            <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
            <div class="relative left-[calc(50%-11rem)] aspect-1155/678 w-144.5 -translate-x-1/2 rotate-30 bg-linear-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-288.75" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
            </div>
            <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
            <div class="hidden sm:mb-8 sm:flex sm:justify-center">
                <div class="relative rounded-full px-3 py-1 text-sm/6 text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20">
                Announcing our new winter collection. <a href="#" class="font-semibold text-indigo-600"><span class="absolute inset-0" aria-hidden="true"></span>Read more <span aria-hidden="true">&rarr;</span></a>
                </div>
            </div>
            <div class="text-center">
                <h3 class="text-5xl font-semibold tracking-tight text-balance text-gray-900 sm:text-7xl">Style that speaks for you !</h3>
                <p class="mt-8 text-lg font-medium text-pretty text-gray-500 sm:text-xl/8">Want something more edgy, elegant, or casual?</p>
                <div class="mt-10 flex items-center justify-center gap-x-6">
                <a href="{{ route('products.index') }}" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Shop Now</a>
                
                </div>
            </div>
            </div>
            <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
            <div class="relative left-[calc(50%+3rem)] aspect-1155/678 w-144.5 -translate-x-1/2 bg-linear-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-288.75" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
            </div>
        </div>
        </div>



    
      
       <footer></footer> 
</body>


</html>

<style>
        body {
     font-family: Arial, sans-serif;
   
    box-sizing: border-box;
}

.hero {
    background-color: #f7f7f7;
    display: flex;
    align-items: center;
    padding: 50px 100px; /* Adjust padding as needed */
}

.hero-content {
    flex: 1;
}

.summer-collection {
    color: #777;
    font-size: 14px;
    margin-bottom: 10px;
}

.hero-content h1 {
    font-size: 3em;
    margin-top: 0;
    margin-bottom: 20px;
    line-height: 1.2;
}

.tagline {
    color: #555;
    line-height: 1.6;
    margin-bottom: 30px;
}

.shop-now-button {
    background-color: #000;
    color: #fff;
    border: none;
    padding: 15px 30px;
    font-size: 16px;
    cursor: pointer;
    border-radius: 5px;
}

.shop-now-button:hover {
    background-color: #222;
}

.social-icons {
    margin-top: 40px;
}

.social-icons a {
    display: inline-block;
    margin-right: 15px;
}

.social-icons img {
    width: 20px; /* Adjust size as needed */
    height: 20px;
    vertical-align: middle;
}

.hero-image {
    flex: 1;
    text-align: right;
}

.hero-image img {
    max-width: 100%;
    height: auto;
}

.clothing-section {
    padding: 50px 100px; /* Adjust padding as needed */
    text-align: center;
}

.clothing-section h2 {
    font-size: 2.5em;
    margin-bottom: 30px;
    line-height: 1.2;
}

.clothing-image {
    margin-bottom: 30px;
}

.clothing-image img {
    max-width: 80%; /* Adjust as needed */
    height: auto;
}

.view-all-button {
    background-color: transparent;
    color: #000;
    border: 1px solid #000;
    padding: 15px 30px;
    font-size: 16px;
    cursor: pointer;
    border-radius: 5px;
}

.view-all-button:hover {
    background-color: #000;
    color: #fff;
}

footer {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 20px;
}

/* Media queries for responsiveness */
@media (max-width: 768px) {
    .hero {
        flex-direction: column;
        padding: 30px;
        text-align: center;
    }

    .hero-image {
        text-align: center;
        margin-top: 30px;
    }

    .hero-content h1 {
        font-size: 2.5em;
    }

    .clothing-section {
        padding: 30px;
    }

    .clothing-section h2 {
        font-size: 2em;
    }

    .clothing-image img {
        max-width: 100%;
    }
}
</style>


</x-layout>