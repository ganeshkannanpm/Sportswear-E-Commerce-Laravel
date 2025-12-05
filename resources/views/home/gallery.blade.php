<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sportswear Gallery</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 text-gray-800">

    <!-- 🌟 Header / Hero Section -->
    <section class="relative bg-[url('https://images.unsplash.com/photo-1521412644187-c49fa049e84d?auto=format&fit=crop&w=1950&q=80')] bg-cover bg-center h-72 flex items-center">
        <div class="absolute inset-0 bg-black/50"></div>
        <div class="container mx-auto px-6 relative z-10">
            <h1 class="text-4xl md:text-5xl font-bold text-white">Sportswear Gallery</h1>
            <p class="text-gray-200 mt-2 text-lg">Explore our training, gym, running & outdoor collections</p>
        </div>
    </section>

    <!-- 📸 Gallery Filters -->
    <section class="container mx-auto px-6 mt-10">
        <h2 class="text-xl font-bold mb-4">Browse by Category</h2>
        <div class="flex flex-wrap gap-3">
            <button class="px-4 py-2 bg-gray-800 text-white rounded-lg hover:bg-gray-900">All</button>
            <button class="px-4 py-2 border border-gray-400 rounded-lg hover:bg-gray-200">Men</button>
            <button class="px-4 py-2 border border-gray-400 rounded-lg hover:bg-gray-200">Women</button>
            <button class="px-4 py-2 border border-gray-400 rounded-lg hover:bg-gray-200">Running</button>
            <button class="px-4 py-2 border border-gray-400 rounded-lg hover:bg-gray-200">Training</button>
            <button class="px-4 py-2 border border-gray-400 rounded-lg hover:bg-gray-200">Outdoor</button>
        </div>
    </section>

    <!-- 🏅 Featured Section -->
    <section class="container mx-auto px-6 mt-12">
        <h2 class="text-xl font-bold mb-6">Featured Shots</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            <!-- Gallery Item -->
            <div class="rounded-xl overflow-hidden shadow-lg hover:scale-[1.02] transition">
                <img src="https://images.unsplash.com/photo-1599058917212-d750089bc07e?auto=format&fit=crop&w=1000&q=80" class="w-full h-56 object-cover" />
            </div>

            <div class="rounded-xl overflow-hidden shadow-lg hover:scale-[1.02] transition">
                <img src="https://images.unsplash.com/photo-1594381898411-846e7d193883?auto=format&fit=crop&w=1000&q=80" class="w-full h-56 object-cover" />
            </div>

            <div class="rounded-xl overflow-hidden shadow-lg hover:scale-[1.02] transition">
                <img src="https://images.unsplash.com/photo-1600180758890-6d17a9d0c53e?auto=format&fit=crop&w=1000&q=80" class="w-full h-56 object-cover" />
            </div>

            <div class="rounded-xl overflow-hidden shadow-lg hover:scale-[1.02] transition">
                <img src="https://images.unsplash.com/photo-1600180759042-056f788bbb03?auto=format&fit=crop&w=1000&q=80" class="w-full h-56 object-cover" />
            </div>

            <div class="rounded-xl overflow-hidden shadow-lg hover:scale-[1.02] transition">
                <img src="https://images.unsplash.com/photo-1594381898305-ec33d8cde94f?auto=format&fit=crop&w=1000&q=80" class="w-full h-56 object-cover" />
            </div>

            <div class="rounded-xl overflow-hidden shadow-lg hover:scale-[1.02] transition">
                <img src="https://images.unsplash.com/photo-1579758629938-03607ccdbaba?auto=format&fit=crop&w=1000&q=80" class="w-full h-56 object-cover" />
            </div>

            <div class="rounded-xl overflow-hidden shadow-lg hover:scale-[1.02] transition">
                <img src="https://images.unsplash.com/photo-1584863231364-8912c55d57dc?auto=format&fit=crop&w=1000&q=80" class="w-full h-56 object-cover" />
            </div>

            <div class="rounded-xl overflow-hidden shadow-lg hover:scale-[1.02] transition">
                <img src="https://images.unsplash.com/photo-1594381898411-846e7d193883?auto=format&fit=crop&w=1000&q=80" class="w-full h-56 object-cover" />
            </div>
        </div>
    </section>

    <!-- 📞 Call To Action -->
    <section class="container mx-auto px-6 mt-16 mb-20">
        <div class="bg-gray-900 text-white p-10 rounded-2xl text-center">
            <h2 class="text-3xl font-bold">Want Custom Sportswear Photography?</h2>
            <p class="mt-2 text-gray-300">We create premium brand shoots for fitness, running, gym and outdoor sportswear.</p>
            <a href="#" class="inline-block mt-6 px-6 py-3 bg-white text-gray-900 font-bold rounded-lg hover:bg-gray-200">
                Contact Us
            </a>
        </div>
    </section>

</body>

</html>
