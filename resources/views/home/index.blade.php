<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jersey & Sportswear Tailoring</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="font-sans bg-gray-50">

    <!-- Navbar -->
    <nav class="bg-white shadow-lg fixed w-full top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 flex justify-between items-center h-20">

            <!-- Logo + Title -->
            <div class="flex items-center space-x-2">
                 {{-- <img src="{{asset('images/logo1.jpg')}}" alt="Logo" class="h-10 w-10">  --}}
                <h1 class="text-4xl font-bold text-red-600 font-sans">ELEGANCE</h1>
            </div>

            <!-- Desktop Menu -->
            <ul class="hidden md:flex space-x-6 text-gray-700 font-medium">
                <li><a href="#home" class="no-underline hover:underline  hover:text-red-600">Home</a></li>
                <li><a href="#about" class="no-underline hover:underline hover:text-red-600">About</a></li>
                <li><a href="#services" class=" no-underline hover:underline hover:text-red-600">Products</a></li>
                <li><a href="#gallery" class=" no-underline hover:underline hover:text-red-600">Gallery</a></li>
                <li><a href="#contact" class=" no-underline hover:underline hover:text-red-600">Contact</a></li>
            </ul>

            <!-- Desktop Auth Buttons -->
            <div class="hidden md:flex space-x-4">
                <a href="#"
                    class="text-gray-100 px-4 py-2 rounded-full bg-red-600 font-semibold hover:text-gray-100  hover:bg-red-700">Sign
                    Up</a>
                <a href="#"
                    class="text-gray-100 font-semibold px-4 py-2 rounded-full bg-red-600 hover:text-gray-100 hover:bg-red-700">Login</a>
            </div>

            <!-- Hamburger Button (Mobile) -->
            <button id="menu-btn" class="md:hidden text-gray-700 focus:outline-none">
                <!-- Hamburger Icon -->
                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div id="menu" class="hidden md:hidden bg-white shadow-md">
            <ul class="flex flex-col space-y-4 py-4 px-6 text-gray-700 font-medium">
                <li><a href="#home" class="hover:text-red-600">Home</a></li>
                <li><a href="#about" class="hover:text-red-600">About</a></li>
                <li><a href="#services" class="hover:text-red-600">Products</a></li>
                <li><a href="#gallery" class="hover:text-red-600">Gallery</a></li>
                <li><a href="#contact" class="hover:text-red-600">Contact</a></li>
                <li><a href="#" class="hover:text-red-600">Sign Up</a></li>
                <li><a href="#" class="hover:text-red-600">Login</a></li>
            </ul>
        </div>
    </nav>

    <script>
        // Toggle Mobile Menu
        const btn = document.getElementById("menu-btn");
        const menu = document.getElementById("menu");

        btn.addEventListener("click", () => {
            menu.classList.toggle("hidden");
        });
    </script>


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
                    <p class="text-gray-600 group-hover:text-gray-100">We craft sportswear with comfort, durability, and
                        perfect fit.</p>
                </div>
                <div class="group p-6 bg-gray-100 rounded-xl shadow hover:bg-red-700 hover:shadow-lg transition">
                    <h3 class="text-xl font-semibold mb-2 group-hover:text-gray-100">Alterations & Repairs</h3>
                    <p class="text-gray-600 group-hover:text-gray-100">Professional alterations and repair services for
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
            <button class="bg-white text-red-600 font-semibold px-6 py-3 rounded-lg hover:bg-gray-200">Shop Now</button>
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
                    <p class="text-gray-600 italic mb-4">"Loved the sports T-shirts. Light, breathable, and stylish!"
                    </p>
                    <h4 class="font-bold">Sneha M.</h4>
                    <p class="text-sm text-gray-500">Verified Buyer</p>
                </div>


                <div class="bg-white p-6 rounded-xl shadow">
                    <p class="text-gray-600 italic mb-4">"Fast delivery and excellent product quality. Will shop again!"
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
                        Yes! We specialize in custom jerseys, team uniforms, and personalized sportswear for all sports.
                    </p>
                </div>

                <!-- FAQ Item 2 -->
                <div class="bg-white shadow-md rounded-lg p-5">
                    <button class="w-full flex justify-between items-center text-left">
                        <h3 class="text-lg font-semibold">2. How long does delivery take?</h3>
                        <span class="text-xl">+</span>
                    </button>
                    <p class="mt-3 text-gray-600">
                        Standard delivery takes 5–7 business days. Custom orders may take 7–12 days depending on design.
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



    <!-- Gallery -->
    {{-- <section id="gallery" class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold mb-10 text-gray-800">Gallery</h2>
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                <img src="https://images.unsplash.com/photo-1610962417390-4f8db7b2f61f?auto=format&fit=crop&w=500&q=80"
                    class="rounded-lg shadow hover:scale-105 transition">
                <img src="https://images.unsplash.com/photo-1603398938378-8a71f49ad1d9?auto=format&fit=crop&w=500&q=80"
                    class="rounded-lg shadow hover:scale-105 transition">
                <img src="https://images.unsplash.com/photo-1526401281623-4c3b3b0d8c68?auto=format&fit=crop&w=500&q=80"
                    class="rounded-lg shadow hover:scale-105 transition">
                <img src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?auto=format&fit=crop&w=500&q=80"
                    class="rounded-lg shadow hover:scale-105 transition">
            </div>
        </div>
    </section> --}}

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
            <p class="text-gray-600 mb-6">Get exclusive offers, new arrivals, and updates directly in your inbox.</p>
            <div class="flex flex-col sm:flex-row items-center gap-4 justify-center">
                <input type="email" placeholder="Enter your email"
                    class="px-4 py-3 border rounded-lg w-full sm:w-2/3 focus:ring-2 focus:ring-red-600" />
                <button
                    class="bg-red-600 text-white px-6 py-3 rounded-lg hover:bg-red-700 w-full sm:w-auto">Subscribe</button>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class=" bg-gray-900 text-white py-5">
        <div class="max-w-6xl mx-auto px-4 grid grid-cols-1 md:grid-cols-4 gap-8">
            <!-- Logo & About -->
            <div>
                <a href="/" class="text-2xl font-bold mb-4 hover:text-red-600 transition">Elegance</a>
                <p class="text-gray-100 mt-8">
                    At Elegance, we specialize in creating Premium Jersey & Sportswear Tailoring for teams, athletes,
                    and sports lovers.
                </p>
            </div>

            <!-- Quick Links -->
            <div>
                <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
                <ul class="space-y-2">
                    <li><a href="#" class="text-gray-100 hover:text-red-600 transition">Home</a></li>
                    <li><a href="#" class="text-gray-100 hover:text-red-600 transition">About Us</a></li>
                    <li><a href="#" class="text-gray-100 hover:text-red-600 transition">Products</a></li>
                    <li><a href="#" class="text-gray-100 hover:text-red-600 transition">Gallery</a></li>
                    <li><a href="#" class="text-gray-100 hover:text-red-600 transition">Contact</a></li>
                </ul>
            </div>

            <!-- Job Categories -->
            <div>
                <h3 class="text-lg font-semibold mb-4">Categories</h3>
                <ul class="space-y-2">
                    <li><a href="#" class="text-gray-100 hover:text-red-600 transition">Custom Jerseys</a></li>
                    <li><a href="#" class="text-gray-100 hover:text-red-600 transition">Team Uniforms</a></li>
                    <li><a href="#" class="text-gray-100 hover:text-red-600 transition">Sports T-Shirts & Shorts</a>
                    </li>
                    <li><a href="#" class="text-gray-100 hover:text-red-600 transition">Tracksuits & Hoodies</a></li>
                    <li><a href="#" class="text-gray-100 hover:text-red-600 transition">Alterations & Repairs</a></li>
                </ul>
            </div>

            <!-- Contact -->
            <div>
                <h3 class="text-lg font-semibold mb-4">Contact</h3>
                <ul class="space-y-2 text-gray-400">
                    <li class="text-gray-100">Email: <a href="mailto:support@elegance.com"
                            class="text-gray-100 hover:text-red-600 transition">support@elegance.com</a></li>
                    <li class="text-gray-100">Phone: <a href="tel:+1234567890"
                            class="text-gray-100 hover:text-red-600 transition">+1 234 567 890</a></li>
                    <li class="text-gray-100">Location: <span
                            class="text-gray-100 hover:text-red-600 transition">Trivandrum</span></li>
                </ul>
                <h3 class="text-lg font-semibold mt-6">Follow Us</h3>
                <!-- Social Media -->
                <div class="flex space-x-4 mt-4">
                    <!-- Facebook -->
                    <a href="#" class="p-2 bg-gray-800 rounded-full hover:bg-blue-700 transition">
                        <svg class="w-5 h-5 text-white hover:text-black" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M22 12C22 6.477 17.523 2 12 2S2 6.477 2 12a10 10 0 008.44 9.874v-6.99H7.898v-2.884H10.44V9.845c0-2.52 1.492-3.911 3.777-3.911 1.094 0 2.238.195 2.238.195v2.456h-1.26c-1.243 0-1.63.772-1.63 1.562v1.87h2.773l-.443 2.884h-2.33v6.99A10 10 0 0022 12z" />
                        </svg>
                    </a>
                    <!-- Twitter -->
                    <a href="#" class="p-2 bg-gray-800 rounded-full hover:bg-blue-500 transition">
                        <svg class="w-5 h-5 text-white hover:text-black" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M19.633 7.581c.013.177.013.355.013.533 0 5.428-4.13 11.685-11.685 11.685-2.322 0-4.482-.678-6.296-1.844a8.233 8.233 0 005.96-1.667 4.122 4.122 0 01-3.849-2.861c.254.039.508.065.775.065.374 0 .748-.05 1.096-.143a4.118 4.118 0 01-3.297-4.042v-.051a4.14 4.14 0 001.86.522 4.118 4.118 0 01-1.272-5.494 11.675 11.675 0 008.457 4.287 4.643 4.643 0 01-.102-.944 4.118 4.118 0 017.124-2.813 8.233 8.233 0 002.61-.996 4.103 4.103 0 01-1.806 2.27 8.233 8.233 0 002.368-.64 8.845 8.845 0 01-2.056 2.13z" />
                        </svg>
                    </a>
                    <!-- WhatsApp -->
                    <a href="https://wa.me/your-number-here" target="_blank"
                        class="p-2 bg-gray-800 rounded-full hover:bg-green-500 transition">
                        <svg class="w-5 h-5 text-white hover:text-black" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M20.52 3.48A11.88 11.88 0 0012.02 0C5.38 0 0 5.38 0 12.02c0 2.12.55 4.19 1.59 6.01L0 24l6.17-1.61A11.97 11.97 0 0012.02 24C18.66 24 24 18.62 24 12.02c0-3.19-1.24-6.2-3.48-8.54zM12.02 22a9.88 9.88 0 01-5.34-1.55l-.38-.23-3.65.96.97-3.55-.25-.37a9.93 9.93 0 01-1.57-5.36c0-5.46 4.45-9.9 9.92-9.9 2.65 0 5.14 1.03 7.01 2.9a9.88 9.88 0 012.91 7c0 5.46-4.45 9.9-9.92 9.9zm5.48-7.4c-.3-.15-1.76-.87-2.03-.97-.27-.1-.47-.15-.67.15-.2.3-.77.97-.94 1.17-.17.2-.35.22-.65.07-.3-.15-1.26-.46-2.4-1.47-.89-.79-1.48-1.77-1.65-2.07-.17-.3-.02-.46.13-.61.14-.14.3-.35.45-.52.15-.17.2-.3.3-.5.1-.2.05-.37-.02-.52-.07-.15-.67-1.61-.92-2.2-.24-.58-.49-.5-.67-.51-.17-.01-.37-.01-.57-.01s-.52.07-.8.37c-.27.3-1.05 1.02-1.05 2.48s1.08 2.87 1.23 3.07c.15.2 2.12 3.23 5.14 4.52.72.31 1.28.5 1.72.64.72.23 1.38.2 1.9.12.58-.09 1.76-.72 2.01-1.42.25-.7.25-1.3.18-1.42-.07-.12-.27-.2-.57-.35z" />
                        </svg>
                    </a>
                    <!-- Instagram -->
                    <a href="https://instagram.com/your-username" target="_blank"
                        class="p-2 bg-gray-800 rounded-full hover:bg-pink-500 transition">
                        <svg class="w-5 h-5 text-white hover:text-black" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M7 2C4.24 2 2 4.24 2 7v10c0 2.76 2.24 5 5 5h10c2.76 0 5-2.24 5-5V7c0-2.76-2.24-5-5-5H7zm10 2c1.66 0 3 1.34 3 3v10c0 1.66-1.34 3-3 3H7c-1.66 0-3-1.34-3-3V7c0-1.66 1.34-3 3-3h10zm-5 3a5 5 0 100 10 5 5 0 000-10zm0 2c1.66 0 3 1.34 3 3s-1.34 3-3 3a3 3 0 110-6zm4.5-.75a1.25 1.25 0 100 2.5 1.25 1.25 0 000-2.5z" />
                        </svg>
                    </a>

                </div>
            </div>
            <div>
            </div>
        </div>
        <!-- Bottom -->
        <div class="border-t border-gray-400 pt-6 text-center text-white">
            <p>&copy; 2025 Elegance. All rights reserved.</p>
        </div>
        </div>
    </footer>

</body>

</html>