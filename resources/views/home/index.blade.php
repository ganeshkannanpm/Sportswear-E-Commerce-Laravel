<x-layout>

    <body class="font-sans bg-gray-50">

        <!-- Navbar -->
        <x-navbar />

        <!-- Hero Section -->
        <section id="home"
            class="h-screen flex items-center justify-center bg-[url('{{ asset('images/banner1.png') }}')] bg-cover bg-center relative">

            <div class="bg-black/50 absolute inset-0"></div>

            <div class="relative text-center text-white max-w-2xl px-6">
                <h2 class="text-4xl md:text-6xl font-bold mb-4">Custom Jerseys & Sportswear</h2>

                <p class="text-lg mb-6">We design and tailor premium sportswear for teams, athletes, and fans.</p>

                <!-- Search Bar -->
                <div class="flex items-center justify-center mb-6">
                    <div class="w-full md:w-[500px] flex bg-white rounded-full overflow-hidden shadow-lg">
                        <input type="text" placeholder="Search sportswear, jerseys, collections..."
                            class="w-full px-5 py-3 text-black outline-none">
                        <button class="px-5 bg-red-600 text-white font-semibold hover:bg-red-700">
                            Search
                        </button>
                    </div>
                </div>

                <a href="#contact"
                    class="px-6 py-3 bg-red-600 rounded-lg text-lg font-semibold hover:bg-red-700 inline-block">
                    Get a Quote
                </a>
            </div>
        </section>


        <!-- About -->
        <section id="about" class="py-16 bg-white">
            <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-10 items-center">
                <img src="{{asset('images/about.png')}}" class="rounded-lg shadow-lg h-100 w-100">
                <div>
                    <h2 class="text-3xl font-bold mb-4 text-gray-800">About Us</h2>
                    <p class="text-gray-600 mb-4">At Elegance, we specialize in creating custom jerseys and sportswear
                        that combine quality, style, and comfort. With years of experience in tailoring, we work with
                        athletes, teams, and sports lovers to deliver premium clothing tailored to perfection.</p>
                    <p class="text-gray-600">Our mission is to make every team look professional and every athlete feel
                        confident on and off the field.</p>
                </div>
            </div>
        </section>

        <!-- Services -->
        <section id="services" class="py-16 bg-white">
            <div class="max-w-7xl mx-auto px-6 text-center">
                <h2 class="text-3xl font-bold mb-10 text-gray-800">Our Services</h2>
                <div class="grid md:grid-cols-3 gap-8">
                    <div class="group p-6 bg-gray-100 rounded-xl shadow hover:bg-red-700 hover:shadow-lg transition">
                        <h3 class="text-xl font-semibold mb-2 group-hover:text-gray-100">Custom Jersey Design</h3>
                        <p class="text-gray-600 group-hover:text-gray-100">Get unique, professional jerseys designed and
                            stitched for your team.</p>
                    </div>
                    <div class="group p-6 bg-gray-100 rounded-xl shadow hover:bg-red-700 hover:shadow-lg transition">
                        <h3 class="text-xl font-semibold mb-2 group-hover:text-gray-100">Sportswear Tailoring</h3>
                        <p class="text-gray-600 group-hover:text-gray-100">We craft sportswear with comfort, durability,
                            and
                            perfect fit.</p>
                    </div>
                    <div class="group p-6 bg-gray-100 rounded-xl shadow hover:bg-red-700 hover:shadow-lg transition">
                        <h3 class="text-xl font-semibold mb-2 group-hover:text-gray-100">Alterations & Repairs</h3>
                        <p class="text-gray-600 group-hover:text-gray-100">Professional alterations and repair services
                            for
                            sports uniforms.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Featured Products Section -->
        <section class="py-12 bg-gray-100">
            <div class="max-w-7xl mx-auto px-4">
                <h2 class="text-3xl font-bold mb-8 text-center">Featured Products</h2>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

                    <!-- Card -->
                    <div class="bg-white p-4 rounded-xl shadow hover:shadow-lg transition flex flex-col">
                        <img src="{{asset('images/tanaphong.jpg')}}"
                            class="rounded-lg shadow-lg w-full h-56 object-cover mb-4" />
                        <h3 class="font-semibold text-lg">Sports Shoe</h3>
                        <p class="text-gray-600 text-sm mb-2">High performance running shoe</p>
                        <p class="font-bold text-lg mb-3">₹1,999</p>
                        <button class="mt-auto w-full bg-red-600 text-white py-2 rounded-lg hover:bg-red-700">Add to
                            Cart</button>
                    </div>

                    <!-- Card -->
                    <div class="bg-white p-4 rounded-xl shadow hover:shadow-lg transition flex flex-col">
                        <img src="{{asset('images/Gym-T-shirt.jpg')}}"
                            class="rounded-lg shadow-lg w-full h-56 object-cover mb-4" />
                        <h3 class="font-semibold text-lg">Gym T-Shirt</h3>
                        <p class="text-gray-600 text-sm mb-2">Breathable workout wear</p>
                        <p class="font-bold text-lg mb-3">₹799</p>
                        <button class="mt-auto w-full bg-red-600 text-white py-2 rounded-lg hover:bg-red-700">Add to
                            Cart</button>
                    </div>

                    <!-- Card -->
                    <div class="bg-white p-4 rounded-xl shadow hover:shadow-lg transition flex flex-col">
                        <img src="{{asset('images/CRK-PT02-1.jpg')}}"
                            class="rounded-lg shadow-lg w-full h-56 object-cover mb-4" />
                        <h3 class="font-semibold text-lg">Track Pants</h3>
                        <p class="text-gray-600 text-sm mb-2">Comfort fit for training</p>
                        <p class="font-bold text-lg mb-3">₹1,299</p>
                        <button class="mt-auto w-full bg-red-600 text-white py-2 rounded-lg hover:bg-red-700">Add to
                            Cart</button>
                    </div>

                    <!-- Card -->
                    <div class="bg-white p-4 rounded-xl shadow hover:shadow-lg transition flex flex-col">
                        <img src="{{asset('images/new-admin-ajax.jpg')}}"
                            class="rounded-lg shadow-lg w-full h-56 object-cover mb-4" />
                        <h3 class="font-semibold text-lg">Sports Cap</h3>
                        <p class="text-gray-600 text-sm mb-2">UV protection outdoor cap</p>
                        <p class="font-bold text-lg mb-3">₹499</p>
                        <button class="mt-auto w-full bg-red-600 text-white py-2 rounded-lg hover:bg-red-700">Add to
                            Cart</button>
                    </div>

                </div>
            </div>
        </section>



        <!-- Categories Section -->
        <section class="py-12">
            <div class="max-w-7xl mx-auto px-4">
                <h2 class="text-3xl font-bold mb-8 text-center">Shop by Categories</h2>

                <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-4">

                    <!-- Category Item -->
                    <div class="bg-gray-100 p-6 rounded-xl text-center shadow 
                        hover:shadow-xl hover:bg-red-600 hover:text-white 
                        cursor-pointer transition transform hover:scale-105">
                        <p class="font-semibold">Shoes</p>
                    </div>

                    <div class="bg-gray-100 p-6 rounded-xl text-center shadow 
                        hover:shadow-xl hover:bg-red-600 hover:text-white 
                        cursor-pointer transition transform hover:scale-105">
                        <p class="font-semibold">T-Shirts</p>
                    </div>

                    <div class="bg-gray-100 p-6 rounded-xl text-center shadow 
                        hover:shadow-xl hover:bg-red-600 hover:text-white 
                        cursor-pointer transition transform hover:scale-105">
                        <p class="font-semibold">Shorts</p>
                    </div>

                    <div class="bg-gray-100 p-6 rounded-xl text-center shadow 
                        hover:shadow-xl hover:bg-red-600 hover:text-white 
                        cursor-pointer transition transform hover:scale-105">
                        <p class="font-semibold">Track Pants</p>
                    </div>

                    <div class="bg-gray-100 p-6 rounded-xl text-center shadow 
                        hover:shadow-xl hover:bg-red-600 hover:text-white 
                        cursor-pointer transition transform hover:scale-105">
                        <p class="font-semibold">Accessories</p>
                    </div>

                    <div class="bg-gray-100 p-6 rounded-xl text-center shadow 
                        hover:shadow-xl hover:bg-red-600 hover:text-white 
                        cursor-pointer transition transform hover:scale-105">
                        <p class="font-semibold">Jackets</p>
                    </div>

                </div>
            </div>
        </section>


        <!-- Promotions / Deals -->
        <section class="py-12 bg-red-600 text-white">
            <div class="max-w-7xl mx-auto px-4 flex flex-col md:flex-row items-center justify-between">
                <div class="mb-6 md:mb-0">
                    <h2 class="text-3xl font-bold">Winter Sports Sale</h2>
                    <p class="text-lg mt-2">Get up to 50% off on selected sportswear!</p>
                </div>
                <button class="bg-white text-red-600 font-semibold px-6 py-3 rounded-lg hover:bg-gray-200">Shop
                    Now</button>
            </div>
        </section>


        <!-- Testimonials / Reviews -->
        <section class="py-12 bg-gray-100">
            <div class="max-w-7xl mx-auto px-4">
                <h2 class="text-3xl font-bold mb-8 text-center">What Our Customers Say</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">


                    <div class="bg-white p-6 rounded-xl shadow">
                        <p class="text-gray-600 italic mb-4">"Amazing quality! The shoes fit perfectly and are super
                            comfortable."</p>
                        <h4 class="font-bold">Rahul S.</h4>
                        <p class="text-sm text-gray-500">Verified Buyer</p>
                    </div>


                    <div class="bg-white p-6 rounded-xl shadow">
                        <p class="text-gray-600 italic mb-4">"Loved the sports T-shirts. Light, breathable, and
                            stylish!"
                        </p>
                        <h4 class="font-bold">Sneha M.</h4>
                        <p class="text-sm text-gray-500">Verified Buyer</p>
                    </div>


                    <div class="bg-white p-6 rounded-xl shadow">
                        <p class="text-gray-600 italic mb-4">"Fast delivery and excellent product quality. Will shop
                            again!"
                        </p>
                        <h4 class="font-bold">Vikram P.</h4>
                        <p class="text-sm text-gray-500">Verified Buyer</p>
                    </div>


                </div>
            </div>
        </section>

        <!-- FAQ -->
        <section class="py-16 bg-gray-100">
            <div class="max-w-4xl mx-auto px-6">
                <h2 class="text-3xl md:text-4xl font-bold text-center mb-10">
                    Frequently Asked <span class="text-red-600">Questions</span>
                </h2>

                <div class="space-y-4">

                    <!-- FAQ Item 1 -->
                    <div class="bg-white shadow-md rounded-lg p-5">
                        <button class="w-full flex justify-between items-center text-left">
                            <h3 class="text-lg font-semibold">1. Do you offer custom sportswear?</h3>
                            <span class="text-xl">+</span>
                        </button>
                        <p class="mt-3 text-gray-600">
                            Yes! We specialize in custom jerseys, team uniforms, and personalized sportswear for all
                            sports.
                        </p>
                    </div>

                    <!-- FAQ Item 2 -->
                    <div class="bg-white shadow-md rounded-lg p-5">
                        <button class="w-full flex justify-between items-center text-left">
                            <h3 class="text-lg font-semibold">2. How long does delivery take?</h3>
                            <span class="text-xl">+</span>
                        </button>
                        <p class="mt-3 text-gray-600">
                            Standard delivery takes 5–7 business days. Custom orders may take 7–12 days depending on
                            design.
                        </p>
                    </div>

                    <!-- FAQ Item 3 -->
                    <div class="bg-white shadow-md rounded-lg p-5">
                        <button class="w-full flex justify-between items-center text-left">
                            <h3 class="text-lg font-semibold">3. What payment methods do you accept?</h3>
                            <span class="text-xl">+</span>
                        </button>
                        <p class="mt-3 text-gray-600">
                            We accept UPI, Debit/Credit Card, Net Banking, and Cash on Delivery (COD).
                        </p>
                    </div>

                    <!-- FAQ Item 4 -->
                    <div class="bg-white shadow-md rounded-lg p-5">
                        <button class="w-full flex justify-between items-center text-left">
                            <h3 class="text-lg font-semibold">4. Can I return or exchange a product?</h3>
                            <span class="text-xl">+</span>
                        </button>
                        <p class="mt-3 text-gray-600">
                            Yes, returns and exchanges are accepted within 7 days if the item is unused and in original
                            condition.
                        </p>
                    </div>

                    <!-- FAQ Item 5 -->
                    <div class="bg-white shadow-md rounded-lg p-5">
                        <button class="w-full flex justify-between items-center text-left">
                            <h3 class="text-lg font-semibold">5. How can I track my order?</h3>
                            <span class="text-xl">+</span>
                        </button>
                        <p class="mt-3 text-gray-600">
                            After shipping, we send a tracking link via email and SMS. You can track your order anytime.
                        </p>
                    </div>

                </div>
            </div>
        </section>

        <!-- Contact -->
        <section id="contact" class="py-16 bg-gray-50">
            <div class="max-w-4xl mx-auto px-6 text-center">
                <h2 class="text-3xl font-bold mb-6 text-gray-800">Contact Us</h2>
                <form class="grid gap-4">
                    <input type="text" placeholder="Your Name" class="p-3 border rounded-lg w-full">
                    <input type="email" placeholder="Your Email" class="p-3 border rounded-lg w-full">
                    <textarea placeholder="Your Message" class="p-3 border rounded-lg w-full h-32"></textarea>
                    <button class="px-6 py-3 bg-red-600 text-white rounded-lg font-semibold hover:bg-red-700">Send
                        Message</button>
                </form>
            </div>
        </section>

        <!-- Newsletter Subscription -->
        <section class="py-12 bg-white">
            <div class="max-w-3xl mx-auto px-4 text-center">
                <h2 class="text-3xl font-bold mb-4">Subscribe to Our Newsletter</h2>
                <p class="text-gray-600 mb-6">Get exclusive offers, new arrivals, and updates directly in your inbox.
                </p>
                <div class="flex flex-col sm:flex-row items-center gap-4 justify-center">
                    <input type="email" placeholder="Enter your email"
                        class="px-4 py-3 border rounded-lg w-full sm:w-2/3 focus:ring-2 focus:ring-red-600" />
                    <button
                        class="bg-red-600 text-white px-6 py-3 rounded-lg hover:bg-red-700 w-full sm:w-auto">Subscribe</button>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <x-footer />

    </body>
</x-layout>