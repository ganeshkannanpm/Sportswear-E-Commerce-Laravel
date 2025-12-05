<!-- Navbar -->
<nav class="bg-white shadow-lg fixed w-full top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 flex justify-between items-center h-20">

        <!-- Logo + Title -->
        <div class="flex items-center space-x-2">
            {{-- <img src="{{asset('images/logo1.jpg')}}" alt="Logo" class="h-10 w-10"> --}}
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