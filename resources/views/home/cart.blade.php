<x-layout>
    <x-navbar />
    <div class="max-w-7xl mx-auto px-4 py-10 mt-20">
        <h1 class="text-3xl font-bold mb-6">Shopping Cart</h1>

        <!-- CART ITEMS TABLE -->
        <div class="overflow-x-auto bg-white shadow rounded-lg">
            <table class="w-full min-w-[600px]">
                <thead>
                    <tr class="bg-gray-100 text-left text-gray-600 text-sm">
                        <th class="py-3 px-4">Product</th>
                        <th class="py-3 px-4">Price</th>
                        <th class="py-3 px-4">Quantity</th>
                        <th class="py-3 px-4">Total</th>
                        <th class="py-3 px-4">Action</th>
                    </tr>
                </thead>

                <tbody>
                    <!-- ITEM -->
                    <tr class="border-b">
                        <td class="py-4 px-4 flex items-center gap-4">
                            <img src="{{asset('images/tanaphong.jpg')}}" class="w-20 h-20 rounded-md object-cover" />
                            <div>
                                <h3 class="text-lg font-semibold">Men's Sports T-Shirt</h3>
                                <p class="text-sm text-gray-500">Size: L | Black</p>
                            </div>
                        </td>
                        <td class="py-4 px-4 text-gray-700 font-medium">₹899</td>
                        <td class="py-4 px-4">
                            <input type="number" value="1" min="1" class="w-16 border rounded px-2 py-1 text-center">
                        </td>
                        <td class="py-4 px-4 font-semibold text-gray-900">₹899</td>
                        <td class="py-4 px-4">
                            <button class="text-red-500 hover:text-red-700 font-semibold">Remove</button>
                        </td>
                    </tr>

                    <!-- ITEM -->
                    <tr class="border-b">
                        <td class="py-4 px-4 flex items-center gap-4">
                            <img src="{{asset('images/tanaphong.jpg')}}" class="w-20 h-20 rounded-md object-cover" />
                            <div>
                                <h3 class="text-lg font-semibold">Running Shoes</h3>
                                <p class="text-sm text-gray-500">Size: 9 | Blue</p>
                            </div>
                        </td>
                        <td class="py-4 px-4 text-gray-700 font-medium">₹2,499</td>
                        <td class="py-4 px-4">
                            <input type="number" value="1" min="1" class="w-16 border rounded px-2 py-1 text-center">
                        </td>
                        <td class="py-4 px-4 font-semibold text-gray-900">₹2,499</td>
                        <td class="py-4 px-4">
                            <button class="text-red-500 hover:text-red-700 font-semibold">Remove</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- BOTTOM SECTION -->
        <div class="mt-10 grid grid-cols-1 lg:grid-cols-3 gap-8">

            <!-- COUPON SECTION -->
            <div class="lg:col-span-2">
                <h2 class="text-xl font-bold mb-4">Apply Coupon</h2>
                <div class="flex items-center gap-3">
                    <input type="text" placeholder="Enter Coupon Code"
                        class="w-full border rounded-lg px-4 py-2 focus:outline-red-500">

                    <a href="#" class="bg-red-600 text-white px-6 py-3 rounded-lg shadow hover:bg-red-700 inline-block">
                        Apply
                    </a>
                </div>
            </div>

            <!-- CART TOTAL -->
            <div class="bg-white shadow rounded-lg p-6">
                <h2 class="text-xl font-bold mb-4">Order Summary</h2>

                <div class="flex justify-between border-b py-3">
                    <span class="text-gray-600">Subtotal</span>
                    <span class="font-semibold">₹3,398</span>
                </div>

                <div class="flex justify-between border-b py-3">
                    <span class="text-gray-600">Shipping</span>
                    <span class="font-semibold">₹150</span>
                </div>

                <div class="flex justify-between border-b py-3">
                    <span class="text-gray-600">Tax</span>
                    <span class="font-semibold">₹120</span>
                </div>

                <div class="flex justify-between text-lg font-bold py-4">
                    <span>Total</span>
                    <span>₹3,668</span>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="{{ route('product.details') }}"
                        class="bg-red-600 text-white px-6 py-3 rounded-lg shadow hover:bg-red-700 inline-block">
                        Cancel
                    </a>

                    <button
                        class="bg-green-600 text-white text-lg px-6 py-3 rounded-lg hover:bg-green-700 inline-block">
                        Proceed to Checkout
                    </button>
                </div>

            </div>
        </div>
    </div>
    <x-footer />
</x-layout>