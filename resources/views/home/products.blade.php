<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sportswear Products</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <!-- HERO / BANNER -->
    <section class="w-full bg-gray-900 text-white py-16 px-6 text-center">
        <h1 class="text-4xl font-bold mb-4">Premium Sportswear Collection</h1>
        <p class="text-gray-300 max-w-2xl mx-auto">
            Explore our latest high-performance sportswear, designed for comfort and built for champions.
        </p>
    </section>

    <!-- FILTERS + SEARCH -->
    <section class="max-w-7xl mx-auto px-6 mt-10">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-6">

            <!-- Search -->
            <div class="flex-1">
                <input 
                    type="text" 
                    placeholder="Search products..."
                    class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500"
                >
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
                <img src="https://source.unsplash.com/400x400/?sportswear,shirt" alt="Product 1" class="w-full h-56 object-cover">
                <div class="p-4">
                    <h3 class="font-semibold text-lg">Men's Running Shirt</h3>
                    <p class="text-gray-500 text-sm">Men</p>
                    <div class="flex justify-between items-center mt-4">
                        <span class="text-xl font-bold text-blue-600">₹1,299</span>
                    </div>
                    <div class="mt-4 flex gap-3">
                        <a href="#" class="flex-1 text-center bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition">View</a>
                        <button class="flex-1 bg-gray-900 text-white py-2 rounded-lg hover:bg-gray-800 transition">Add to Cart</button>
                    </div>
                </div>
            </div>

            <div class="bg-white shadow-md rounded-xl overflow-hidden hover:scale-[1.02] transition">
                <img src="https://source.unsplash.com/400x400/?sportswear,pants" alt="Product 2" class="w-full h-56 object-cover">
                <div class="p-4">
                    <h3 class="font-semibold text-lg">Women's Jogger Pants</h3>
                    <p class="text-gray-500 text-sm">Women</p>
                    <div class="flex justify-between items-center mt-4">
                        <span class="text-xl font-bold text-blue-600">₹1,799</span>
                    </div>
                    <div class="mt-4 flex gap-3">
                        <a href="#" class="flex-1 text-center bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition">View</a>
                        <button class="flex-1 bg-gray-900 text-white py-2 rounded-lg hover:bg-gray-800 transition">Add to Cart</button>
                    </div>
                </div>
            </div>

            <div class="bg-white shadow-md rounded-xl overflow-hidden hover:scale-[1.02] transition">
                <img src="https://source.unsplash.com/400x400/?sportswear,shoes" alt="Product 3" class="w-full h-56 object-cover">
                <div class="p-4">
                    <h3 class="font-semibold text-lg">Unisex Sports Shoes</h3>
                    <p class="text-gray-500 text-sm">Unisex</p>
                    <div class="flex justify-between items-center mt-4">
                        <span class="text-xl font-bold text-blue-600">₹2,499</span>
                    </div>
                    <div class="mt-4 flex gap-3">
                        <a href="#" class="flex-1 text-center bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition">View</a>
                        <button class="flex-1 bg-gray-900 text-white py-2 rounded-lg hover:bg-gray-800 transition">Add to Cart</button>
                    </div>
                </div>
            </div>

            <div class="bg-white shadow-md rounded-xl overflow-hidden hover:scale-[1.02] transition">
                <img src="https://source.unsplash.com/400x400/?sportswear,hat" alt="Product 4" class="w-full h-56 object-cover">
                <div class="p-4">
                    <h3 class="font-semibold text-lg">Sports Cap</h3>
                    <p class="text-gray-500 text-sm">Accessories</p>
                    <div class="flex justify-between items-center mt-4">
                        <span class="text-xl font-bold text-blue-600">₹499</span>
                    </div>
                    <div class="mt-4 flex gap-3">
                        <a href="#" class="flex-1 text-center bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition">View</a>
                        <button class="flex-1 bg-gray-900 text-white py-2 rounded-lg hover:bg-gray-800 transition">Add to Cart</button>
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

</body>
</html>
