<x-layout>
    <x-navbar />

    <body class="bg-gray-50">

        <div class="max-w-7xl mx-auto p-4 md:p-8 mt-20">
            <h1 class="text-3xl font-bold text-gray-800 mb-6">Checkout</h1>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

                <!-- LEFT SECTION -->
                <div class="lg:col-span-2 space-y-6">

                    <!-- Contact Info -->
                    <div class="bg-white p-6 shadow rounded-xl">
                        <h2 class="text-xl font-semibold mb-4 text-gray-800">Contact Information</h2>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <input type="text" placeholder="Full Name"
                                class="border p-3 rounded-lg w-full focus:outline-none focus:ring-2 focus:ring-red-600">
                            <input type="email" placeholder="Email Address"
                                class="border p-3 rounded-lg w-full focus:outline-none focus:ring-2 focus:ring-red-600">
                            <input type="text" placeholder="Mobile Number"
                                class="border p-3 rounded-lg w-full focus:outline-none focus:ring-2 focus:ring-red-600 md:col-span-2">
                        </div>
                    </div>

                    <!-- Shipping Address -->
                    <div class="bg-white p-6 shadow rounded-xl">
                        <h2 class="text-xl font-semibold mb-4 text-gray-800">Shipping Address</h2>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <input type="text" placeholder="Street Address"
                                class="border p-3 rounded-lg w-full focus:outline-none focus:ring-2 focus:ring-red-600 md:col-span-2">

                            <input type="text" placeholder="City"
                                class="border p-3 rounded-lg w-full focus:outline-none focus:ring-2 focus:ring-red-600">

                            <input type="text" placeholder="State"
                                class="border p-3 rounded-lg w-full focus:outline-none focus:ring-2 focus:ring-red-600">

                            <input type="text" placeholder="Postal Code"
                                class="border p-3 rounded-lg w-full focus:outline-none focus:ring-2 focus:ring-red-600">

                            <select
                                class="border p-3 rounded-lg w-full focus:outline-none focus:ring-2 focus:ring-red-600">
                                <option>Select Country</option>
                                <option>India</option>
                                <option>USA</option>
                                <option>UK</option>
                                <option>Canada</option>
                            </select>
                        </div>
                    </div>

                    <!-- Delivery Method -->
                    <div class="bg-white p-6 shadow rounded-xl">
                        <h2 class="text-xl font-semibold mb-4 text-gray-800">Delivery Method</h2>

                        <div class="space-y-4">
                            <label
                                class="flex items-center gap-3 border rounded-lg p-4 cursor-pointer hover:bg-gray-100">
                                <input type="radio" name="delivery" class="h-5 w-5">
                                <div>
                                    <p class="font-semibold">Standard Delivery (3–5 days)</p>
                                    <p class="text-gray-500 text-sm">Free delivery for sportswear orders above ₹999</p>
                                </div>
                            </label>

                            <label
                                class="flex items-center gap-3 border rounded-lg p-4 cursor-pointer hover:bg-gray-100">
                                <input type="radio" name="delivery" class="h-5 w-5">
                                <div>
                                    <p class="font-semibold">Express Delivery (1–2 days)</p>
                                    <p class="text-gray-500 text-sm">Additional ₹199</p>
                                </div>
                            </label>
                        </div>
                    </div>

                    <!-- Payment Method -->
                    <div class="bg-white p-6 shadow rounded-xl">
                        <h2 class="text-xl font-semibold mb-4 text-gray-800">Payment Method</h2>

                        <div class="space-y-4">
                            <label
                                class="flex items-center gap-3 border p-4 rounded-lg cursor-pointer hover:bg-gray-100">
                                <input type="radio" name="payment" class="h-5 w-5">
                                <p class="font-semibold">Credit / Debit Card</p>
                            </label>

                            <label
                                class="flex items-center gap-3 border p-4 rounded-lg cursor-pointer hover:bg-gray-100">
                                <input type="radio" name="payment" class="h-5 w-5">
                                <p class="font-semibold">UPI / Wallet</p>
                            </label>

                            <label
                                class="flex items-center gap-3 border p-4 rounded-lg cursor-pointer hover:bg-gray-100">
                                <input type="radio" name="payment" class="h-5 w-5">
                                <p class="font-semibold">Cash on Delivery</p>
                            </label>
                        </div>
                    </div>

                </div>

                <!-- RIGHT SECTION (Order Summary) -->
                <div class="space-y-6">

                    <div class="bg-white p-6 shadow rounded-xl">

                        <h2 class="text-xl font-semibold mb-4 text-gray-800">Order Summary</h2>

                        <!-- Product List -->
                        <div class="space-y-4 mb-4">

                            <div class="flex items-center gap-4">
                                <img src="{{asset('images/Gym-T-shirt.jpg')}}" class="h-20 w-20 rounded-lg">
                                <div class="flex-1">
                                    <p class="font-semibold text-gray-800">Sports T-shirt</p>
                                    <p class="text-gray-500 text-sm">Size: M</p>
                                    <p class="font-semibold mt-1">₹799</p>
                                </div>
                            </div>

                            <div class="flex items-center gap-4">
                                <img src="{{asset('images/tanaphong.jpg')}}" class="h-20 w-20 rounded-lg">
                                <div class="flex-1">
                                    <p class="font-semibold text-gray-800">Running Shoes</p>
                                    <p class="text-gray-500 text-sm">Size: 9</p>
                                    <p class="font-semibold mt-1">₹2,999</p>
                                </div>
                            </div>

                        </div>

                        <!-- Price Breakdown -->
                        <div class="border-t pt-4 space-y-2 text-gray-700">
                            <div class="flex justify-between">
                                <p>Subtotal</p>
                                <p>₹3,798</p>
                            </div>
                            <div class="flex justify-between">
                                <p>Shipping</p>
                                <p>₹0.00</p>
                            </div>
                            <div class="flex justify-between font-bold text-lg">
                                <p>Total</p>
                                <p>₹3,798</p>
                            </div>
                        </div>

                        <!-- Coupon -->
                        <div class="mt-4 flex gap-2">
                            <input type="text" placeholder="Enter coupon code"
                                class="border p-3 rounded-lg w-full focus:outline-none focus:ring-2 focus:ring-red-600">
                            <button class="bg-gray-800 text-white px-4 rounded-lg">Apply</button>
                        </div>

                        <!-- Buttons -->
                        <div class="mt-6 space-y-3">
                            <button
                                class="w-full bg-red-600 text-white py-3 rounded-lg font-semibold hover:bg-red-700 transition">
                                Place Order
                            </button>

                            <button
                                class="w-full border border-gray-400 text-gray-700 py-3 rounded-lg font-semibold hover:bg-gray-100 transition">
                                Cancel
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <x-footer />
    </body>


</x-layout>