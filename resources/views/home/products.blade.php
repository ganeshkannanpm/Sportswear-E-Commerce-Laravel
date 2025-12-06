<x-layout>
    <x-navbar />

    <body class="bg-gray-100">

        <!-- HERO / BANNER -->
        <section class="w-full py-24 px-6 text-center relative bg-black overflow-hidden">

            <!-- Background Image -->
            <div
                class="absolute inset-0 bg-[url('https://images.pexels.com/photos/841130/pexels-photo-841130.jpeg')] bg-cover bg-center opacity-40">
            </div>

            <div class="relative z-10">
                <h1 class="text-4xl md:text-6xl font-extrabold text-white drop-shadow-xl mb-6">
                    Premium Sportswear Collection
                </h1>

                <p class="text-gray-200 max-w-2xl mx-auto text-lg drop-shadow">
                    Explore our latest high-performance sportswear, designed for comfort and built for champions.
                </p>

                <div class="w-24 h-1 bg-red-500 mx-auto mt-6 rounded-full"></div>
            </div>
        </section>


        <!-- FILTERS + SEARCH -->
        <section class="max-w-7xl mx-auto px-6 mt-10">
            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-6">

                <!-- Search -->
                <div class="flex-1">
                    <input type="text" placeholder="Search products..."
                        class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-red-500">
                </div>

                <!-- Filters -->
                <div class="flex flex-wrap gap-4">
                    <select class="border border-gray-300 px-4 py-2 rounded-lg">
                        <option>All Categories</option>
                        <option>Men</option>
                        <option>Women</option>
                        <option>Kids</option>
                        <option>Accessories</option>
                    </select>

                    <select class="border border-gray-300 px-4 py-2 rounded-lg">
                        <option>All Sizes</option>
                        <option>S</option>
                        <option>M</option>
                        <option>L</option>
                        <option>XL</option>
                    </select>

                    <select class="border border-gray-300 px-4 py-2 rounded-lg">
                        <option>Price: Low to High</option>
                        <option>Price: High to Low</option>
                    </select>
                </div>
            </div>
        </section>

        <!-- PRODUCTS GRID -->
        <section class="max-w-7xl mx-auto px-6 py-12">
            <h2 class="text-2xl font-semibold mb-6">Our Products</h2>

            <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">

                <!-- PRODUCT CARD -->
                <div class="bg-white shadow-md rounded-xl overflow-hidden hover:scale-[1.02] transition">
                    <img src="{{asset('images/Gym-T-shirt.jpg')}}" alt="Product 1" class="w-full h-56 object-cover">
                    <div class="p-4">
                        <h3 class="font-semibold text-lg">Men's Running Shirt</h3>
                        <p class="text-gray-500 text-sm">Men</p>
                        <div class="flex justify-between items-center mt-4">
                            <span class="text-xl font-bold text-red-600">₹1,299</span>
                        </div>
                        <div class="mt-4 flex gap-3">
                            <a href="#"
                                class="flex-1 text-center bg-red-600 text-white py-2 rounded-lg hover:bg-red-700 transition">View</a>
                            <button
                                class="flex-1 bg-gray-900 text-white py-2 rounded-lg hover:bg-gray-800 transition">Add
                                to Cart</button>
                        </div>
                    </div>
                </div>

                <div class="bg-white shadow-md rounded-xl overflow-hidden hover:scale-[1.02] transition">
                    <img src="{{asset('images/CRK-PT02-1.jpg')}}" alt="Product 2" class="w-full h-56 object-cover">
                    <div class="p-4">
                        <h3 class="font-semibold text-lg">Women's Jogger Pants</h3>
                        <p class="text-gray-500 text-sm">Women</p>
                        <div class="flex justify-between items-center mt-4">
                            <span class="text-xl font-bold text-red-600">₹1,799</span>
                        </div>
                        <div class="mt-4 flex gap-3">
                            <a href="#"
                                class="flex-1 text-center bg-red-600 text-white py-2 rounded-lg hover:bg-red-700 transition">View</a>
                            <button
                                class="flex-1 bg-gray-900 text-white py-2 rounded-lg hover:bg-gray-800 transition">Add
                                to Cart</button>
                        </div>
                    </div>
                </div>

                <div class="bg-white shadow-md rounded-xl overflow-hidden hover:scale-[1.02] transition">
                    <img src="{{asset('images/tanaphong.jpg')}}" alt="Product 3" class="w-full h-56 object-cover">
                    <div class="p-4">
                        <h3 class="font-semibold text-lg">Unisex Sports Shoes</h3>
                        <p class="text-gray-500 text-sm">Unisex</p>
                        <div class="flex justify-between items-center mt-4">
                            <span class="text-xl font-bold text-red-600">₹2,499</span>
                        </div>
                        <div class="mt-4 flex gap-3">
                            <a href="#"
                                class="flex-1 text-center bg-red-600 text-white py-2 rounded-lg hover:bg-red-700 transition">View</a>
                            <button
                                class="flex-1 bg-gray-900 text-white py-2 rounded-lg hover:bg-gray-800 transition">Add
                                to Cart</button>
                        </div>
                    </div>
                </div>

                <div class="bg-white shadow-md rounded-xl overflow-hidden hover:scale-[1.02] transition">
                    <img src="{{asset('images/new-admin-ajax.jpg')}}" alt="Product 4" class="w-full h-56 object-cover">
                    <div class="p-4">
                        <h3 class="font-semibold text-lg">Sports Cap</h3>
                        <p class="text-gray-500 text-sm">Accessories</p>
                        <div class="flex justify-between items-center mt-4">
                            <span class="text-xl font-bold text-red-600">₹499</span>
                        </div>
                        <div class="mt-4 flex gap-3">
                            <a href="#"
                                class="flex-1 text-center bg-red-600 text-white py-2 rounded-lg hover:bg-red-700 transition">View</a>
                            <button
                                class="flex-1 bg-gray-900 text-white py-2 rounded-lg hover:bg-gray-800 transition">Add
                                to Cart</button>
                        </div>
                    </div>
                </div>

            </div>

            <!-- PAGINATION -->
            <div class="mt-10 flex justify-center gap-2">
                <button class="px-4 py-2 bg-gray-200 rounded hover:bg-gray-300">1</button>
                <button class="px-4 py-2 bg-gray-200 rounded hover:bg-gray-300">2</button>
                <button class="px-4 py-2 bg-gray-200 rounded hover:bg-gray-300">3</button>
                <button class="px-4 py-2 bg-gray-200 rounded hover:bg-gray-300">Next</button>
            </div>
        </section>

        <x-footer />
    </body>

</x-layout>