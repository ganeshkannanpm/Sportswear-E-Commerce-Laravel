<x-layout>
    <x-navbar />

    <body class="bg-gray-100">

        <!-- MAIN CONTAINER -->
        <div class="max-w-7xl mx-auto p-6 mt-20">

            <!-- PRODUCT DETAILS SECTION -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10 bg-white p-6 rounded-xl shadow">

                <!-- LEFT: PRODUCT IMAGES -->
                <div>
                    <img src="{{asset('images/Gym-T-shirt.jpg')}}" alt="Product 3"
                        class="rounded-xl w-full object-cover shadow" alt="Product Image">

                    <!-- Thumbnail images -->
                    <div class="flex gap-4 mt-4">
                        <img src="{{asset('images/Gym-T-shirt.jpg')}}"
                            class="w-20 h-20 rounded-lg cursor-pointer border">
                        <img src="{{asset('images/Gym-T-shirt.jpg')}}"
                            class="w-20 h-20 rounded-lg cursor-pointer border">
                        <img src="{{asset('images/Gym-T-shirt.jpg')}}"
                            class="w-20 h-20 rounded-lg cursor-pointer border">
                    </div>
                </div>

                <!-- RIGHT: PRODUCT INFO -->
                <div class="space-y-4">
                    <h1 class="text-3xl font-semibold text-gray-900">Men’s Performance Sports T-Shirt</h1>
                    <p class="text-sm text-gray-500">Category: <span class="font-semibold">Sportswear</span></p>

                    <!-- Rating -->
                    <div class="flex items-center gap-1">
                        <span class="text-yellow-400 text-xl">★★★★★</span>
                        <span class="text-gray-600 text-sm">(120 Reviews)</span>
                    </div>

                    <!-- Price -->
                    <p class="text-3xl font-bold text-red-600">₹1,499</p>

                    <p class="text-gray-700 leading-relaxed">
                        This premium sports t-shirt is made with breathable, moisture-wicking fabric designed
                        for performance, comfort, and durability. Perfect for gym, running, and casual wear.
                    </p>

                    <!-- Size Selector -->
                    <div>
                        <p class="font-semibold mb-1">Select Size</p>
                        <div class="flex gap-3">
                            <button class="px-4 py-2 border rounded-lg hover:bg-gray-200">S</button>
                            <button class="px-4 py-2 border rounded-lg hover:bg-gray-200">M</button>
                            <button class="px-4 py-2 border rounded-lg hover:bg-gray-200">L</button>
                            <button class="px-4 py-2 border rounded-lg hover:bg-gray-200">XL</button>
                        </div>
                    </div>

                    <!-- Quantity Selector -->
                    <div>
                        <p class="font-semibold mb-1">Quantity</p>
                        <div class="flex items-center gap-3">
                            <button class="px-3 py-2 bg-gray-200 rounded-lg font-bold">-</button>
                            <span class="font-semibold text-lg">1</span>
                            <button class="px-3 py-2 bg-gray-200 rounded-lg font-bold">+</button>
                        </div>
                    </div>

                    <!-- Buttons -->
                    <div class="flex gap-4 pt-2">
                        <a href="{{ route('show.cart') }}"
                            class="bg-red-600 text-white px-6 py-3 rounded-lg shadow hover:bg-red-700 inline-block">
                            Add to Cart
                        </a>

                        <a href="{{ route('show.checkout') }}"
                            class="bg-green-600 text-white px-6 py-3 rounded-lg shadow hover:bg-green-700 inline-block ml-2">
                            Buy Now
                        </a>

                    </div>
                </div>

            </div>


            <!-- REVIEWS SECTION -->
            <div class="bg-white p-6 mt-10 rounded-xl shadow">
                <h2 class="text-2xl font-semibold mb-4">Customer Reviews</h2>

                <!-- One Review -->
                <div class="border-b pb-4 mb-4">
                    <div class="flex items-center justify-between">
                        <h3 class="font-semibold">John Doe</h3>
                        <span class="text-yellow-400 text-xl">★★★★☆</span>
                    </div>
                    <p class="text-gray-700 mt-1">
                        Great product! Loved the fabric and fit. Perfect for gym workouts.
                    </p>
                </div>

                <div class="border-b pb-4 mb-4">
                    <div class="flex items-center justify-between">
                        <h3 class="font-semibold">Ranveer Singh</h3>
                        <span class="text-yellow-400 text-xl">★★★★★</span>
                    </div>
                    <p class="text-gray-700 mt-1">
                        Absolutely worth the price! Quality is amazing and delivery was quick.
                    </p>
                </div>

                <!-- Add Review Button -->
                <button class="mt-4 px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700">
                    Write a Review
                </button>
            </div>


            <!-- RELATED PRODUCTS -->
            <div class="mt-10">
                <h2 class="text-2xl font-semibold mb-4">Related Products</h2>

                <div class="grid grid-cols-2 md:grid-cols-4 gap-6">

                    <div class="bg-white p-4 rounded-xl shadow hover:scale-105 transition">
                        <img src="{{asset('images/tanaphong.jpg')}}" alt="Product 3"
                            class="w-full h-56 object-cover rounded-lg">
                        <h3 class="mt-2 font-semibold">Training Shorts</h3>
                        <p class="text-red-600 font-bold">₹999</p>
                    </div>

                    <div class="bg-white p-4 rounded-xl shadow hover:scale-105 transition">
                        <img src="{{asset('images/tanaphong.jpg')}}" alt="Product 3"
                            class="w-full h-56 object-cover rounded-lg">
                        <h3 class="mt-2 font-semibold">Sports Track Pants</h3>
                        <p class="text-red-600 font-bold">₹1,299</p>
                    </div>

                    <div class="bg-white p-4 rounded-xl shadow hover:scale-105 transition">
                        <img src="{{asset('images/tanaphong.jpg')}}" alt="Product 3"
                            class="w-full h-56 object-cover rounded-lg">
                        <h3 class="mt-2 font-semibold">Running Shoes</h3>
                        <p class="text-red-600 font-bold">₹2,499</p>
                    </div>

                    <div class="bg-white p-4 rounded-xl shadow hover:scale-105 transition">
                        <img src="{{asset('images/tanaphong.jpg')}}" alt="Product 3"
                            class="w-full h-56 object-cover rounded-lg">
                        <h3 class="mt-2 font-semibold">Sports Hoodie</h3>
                        <p class="text-red-600 font-bold">₹1,899</p>
                    </div>

                </div>
            </div>

        </div>

    </body>
    <x-footer />

</x-layout>