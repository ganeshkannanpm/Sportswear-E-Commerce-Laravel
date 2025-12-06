<!-- Navbar -->
<nav class="bg-white shadow-lg fixed w-full top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 flex justify-between items-center h-20">

        <!-- Logo + Title -->
        <div class="flex items-center space-x-2">
            {{-- <img src="{{asset('images/logo1.jpg')}}" alt="Logo" class="h-10 w-10"> --}}
            <h1 class="text-4xl font-bold text-red-600 font-sans">ELEGANCE</h1>
        </div>

        <!-- Desktop Menu -->
        <ul class="hidden md:flex space-x-4 text-gray-700 font-medium">
            <li>
                <a href="{{ route('home.index') }}"
                    class="block px-5 py-2 rounded-full transition duration-300 
                  {{ request()->routeIs('home.index') ? 'bg-red-600 text-white shadow-lg' : 'hover:bg-red-600 hover:text-white' }}">
                    Home
                </a>
            </li>
            <li>
                <a href="{{ route('home.about') }}"
                    class="block px-5 py-2 rounded-full transition duration-300 
                  {{ request()->routeIs('home.about') ? 'bg-red-600 text-white shadow-lg' : 'hover:bg-red-600 hover:text-white' }}">
                    About
                </a>
            </li>
            <li>
                <a href="{{ route('home.products') }}"
                    class="block px-5 py-2 rounded-full transition duration-300 
                  {{ request()->routeIs('home.products','product.details','show.cart') ? 'bg-red-600 text-white shadow-lg' : 'hover:bg-red-600 hover:text-white' }}">
                    Products
                </a>
            </li>
            <li>
                <a href="{{ route('home.gallery') }}"
                    class="block px-5 py-2 rounded-full transition duration-300 
                  {{ request()->routeIs('home.gallery') ? 'bg-red-600 text-white shadow-lg' : 'hover:bg-red-600 hover:text-white' }}">
                    Gallery
                </a>
            </li>
            <li>
                <a href="{{ route('home.contact') }}"
                    class="block px-5 py-2 rounded-full transition duration-300 
                  {{ request()->routeIs('home.contact') ? 'bg-red-600 text-white shadow-lg' : 'hover:bg-red-600 hover:text-white' }}">
                    Contact
                </a>
            </li>
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