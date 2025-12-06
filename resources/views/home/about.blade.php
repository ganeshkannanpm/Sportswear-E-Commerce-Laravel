<x-layout>
    <style>
        /* Infinite slide */
        @keyframes slide {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-50%);
            }
        }

        .animate-slide {
            display: flex;
            width: fit-content;
            animation: slide 20s linear infinite;
        }
    </style>
    <x-navbar />
    <section class="relative bg-gray-900 text-white">
        <!-- Background -->
        <div class="absolute inset-0">
            <img src="{{asset('images/banner1.png')}}" class="w-full h-full object-cover opacity-30" alt="">
        </div>

        <!-- DARK RED OVERLAY -->
        <div class="absolute inset-0 bg-red-900/50 mix-blend-multiply"></div>

        <div class="relative z-10 container mx-auto px-6 py-36">
            <div
                class="max-w-3xl mx-auto text-center border border-red-600/40 p-10 rounded-xl backdrop-blur-sm bg-black/30">

                <h1 class="text-4xl md:text-6xl font-extrabold tracking-tight mb-4">
                    About Us
                </h1>

                <p class="text-lg md:text-xl text-gray-200 leading-relaxed">
                    The future of performance sportswear — crafted for athletes, built for everyday champions.
                </p>
            </div>
        </div>
    </section>


    <!-- OUR STORY -->
    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-6 md:px-12 lg:px-20">
            <div class="grid md:grid-cols-2 gap-12 items-center bg-white p-10 rounded-2xl shadow-xl">

                <div>
                    <h2 class="text-4xl font-bold mb-6 text-red-600">Our Story</h2>

                    <p class="text-gray-700 leading-relaxed mb-4">
                        Founded with a passion for fitness and innovation, our goal has always been to bridge
                        the gap between comfort and high performance. What started as a small idea has grown
                        into a full-scale sportswear brand trusted by athletes across the country.
                    </p>

                    <p class="text-gray-700 leading-relaxed">
                        Every product we create is inspired by real training experiences and designed to help
                        athletes push their limits — whether in the gym, on the field, or in everyday life.
                    </p>
                </div>

                <div>
                    <img src="{{asset('images/irene-kredenets.jpg')}}" class="rounded-xl w-100 h-100 shadow-lg" alt="">
                </div>

            </div>
        </div>
    </section>


    <!-- MISSION -->
    <section class="py-20 bg-cover bg-center relative"
        style="background-image: url('{{asset('images/banner1.png')}}');">

        <!-- Red overlay -->
        <div class="absolute inset-0 bg-gray-700/80"></div>

        <div class="relative container mx-auto px-6 md:px-12 lg:px-20 text-center text-white">

            <h2 class="text-4xl md:text-5xl font-extrabold tracking-wide mb-4">
                Our Mission
            </h2>

            <div class="w-20 h-1 bg-white mx-auto mb-8 rounded-full"></div>

            <p class="max-w-3xl mx-auto text-white/90 text-lg leading-relaxed">
                To empower athletes with premium-quality activewear designed for high performance,
                durability, and ultimate comfort. We’re committed to building a community that inspires
                discipline, strength, and becoming the best version of yourself.
            </p>

        </div>
    </section>



    <!-- CORE VALUES -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-6 md:px-12 lg:px-20">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-12">Our Core Values</h2>

            <div class="grid md:grid-cols-3 gap-10">

                <div class="p-8 rounded-xl bg-gray-100 shadow 
                hover:shadow-[0_0_20px_rgba(255,0,0,0.35)]
                hover:bg-white hover:scale-105
                hover:border hover:border-red-500
                transition-all duration-300 cursor-pointer">
                    <h3 class="text-xl font-semibold mb-4">🏋️ Performance</h3>
                    <p class="text-gray-600">We design clothing that can keep up with the most intense workouts and
                        movements.</p>
                </div>

                <div class="p-8 rounded-xl bg-gray-100 shadow 
                hover:shadow-[0_0_20px_rgba(255,0,0,0.35)]
                hover:bg-white hover:scale-105
                hover:border hover:border-red-500
                transition-all duration-300 cursor-pointer">
                    <h3 class="text-xl font-semibold mb-4">✨ Quality</h3>
                    <p class="text-gray-600">Premium materials, long-lasting stitching, and comfortable designs —
                        always.</p>
                </div>

                <div class="p-8 rounded-xl bg-gray-100 shadow 
                hover:shadow-[0_0_20px_rgba(255,0,0,0.35)]
                hover:bg-white hover:scale-105
                hover:border hover:border-red-500
                transition-all duration-300 cursor-pointer">
                    <h3 class="text-xl font-semibold mb-4">🔥 Passion</h3>
                    <p class="text-gray-600">We live and breathe fitness. Our passion fuels every product we create.</p>
                </div>

            </div>

        </div>
    </section>

    <!-- TEAM -->
    <section class="py-16 bg-gray-50 overflow-hidden">
        <div class="container mx-auto px-6 md:px-12 lg:px-20">

            <h2 class="text-3xl md:text-4xl font-bold text-center mb-12">
                Meet Our Team
            </h2>

            <!-- Slider Wrapper -->
            <div class="relative w-full">
                <div class="flex gap-10 animate-slide">

                    <!-- Team Member 1 -->
                    <div
                        class="text-center bg-white p-6 rounded-xl shadow-lg hover:shadow-2xl transition w-64 flex-shrink-0">
                        <img src="https://randomuser.me/api/portraits/men/32.jpg"
                            class="mx-auto rounded-full h-32 w-32 object-cover border-4 border-red-600 shadow-md">
                        <h4 class="text-lg font-semibold mt-4">Arun Kumar</h4>
                        <p class="text-gray-600 text-sm">Founder & Fitness Coach</p>
                    </div>

                    <!-- Team Member 2 -->
                    <div
                        class="text-center bg-white p-6 rounded-xl shadow-lg hover:shadow-2xl transition w-64 flex-shrink-0">
                        <img src="https://randomuser.me/api/portraits/women/45.jpg"
                            class="mx-auto rounded-full h-32 w-32 object-cover border-4 border-red-600 shadow-md">
                        <h4 class="text-lg font-semibold mt-4">Priya Sharma</h4>
                        <p class="text-gray-600 text-sm">Product Designer</p>
                    </div>

                    <!-- Team Member 3 -->
                    <div
                        class="text-center bg-white p-6 rounded-xl shadow-lg hover:shadow-2xl transition w-64 flex-shrink-0">
                        <img src="https://randomuser.me/api/portraits/men/67.jpg"
                            class="mx-auto rounded-full h-32 w-32 object-cover border-4 border-red-600 shadow-md">
                        <h4 class="text-lg font-semibold mt-4">Rohit Verma</h4>
                        <p class="text-gray-600 text-sm">Marketing Lead</p>
                    </div>

                    <!-- Duplicate for infinite loop -->
                    <div
                        class="text-center bg-white p-6 rounded-xl shadow-lg hover:shadow-2xl transition w-64 flex-shrink-0">
                        <img src="https://randomuser.me/api/portraits/men/32.jpg"
                            class="mx-auto rounded-full h-32 w-32 object-cover border-4 border-red-600 shadow-md">
                        <h4 class="text-lg font-semibold mt-4">Arun Kumar</h4>
                        <p class="text-gray-600 text-sm">Founder & Fitness Coach</p>
                    </div>

                    <div
                        class="text-center bg-white p-6 rounded-xl shadow-lg hover:shadow-2xl transition w-64 flex-shrink-0">
                        <img src="https://randomuser.me/api/portraits/women/45.jpg"
                            class="mx-auto rounded-full h-32 w-32 object-cover border-4 border-red-600 shadow-md">
                        <h4 class="text-lg font-semibold mt-4">Priya Sharma</h4>
                        <p class="text-gray-600 text-sm">Product Designer</p>
                    </div>

                    <div
                        class="text-center bg-white p-6 rounded-xl shadow-lg hover:shadow-2xl transition w-64 flex-shrink-0">
                        <img src="https://randomuser.me/api/portraits/men/67.jpg"
                            class="mx-auto rounded-full h-32 w-32 object-cover border-4 border-red-600 shadow-md">
                        <h4 class="text-lg font-semibold mt-4">Rohit Verma</h4>
                        <p class="text-gray-600 text-sm">Marketing Lead</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- WHY CHOOSE US -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-6 md:px-12 lg:px-20">

            <h2 class="text-3xl md:text-4xl font-bold text-center mb-12 text-gray-900">
                Why Choose Us?
            </h2>

            <div class="grid md:grid-cols-2 gap-12 items-center">

                <!-- Left Content -->
                <div class="space-y-5">

                    <div class="flex items-start gap-4">
                        <div class="h-8 w-8 flex items-center justify-center bg-red-600 text-white rounded-full shadow">
                            ✓
                        </div>
                        <p class="text-gray-700 font-medium">
                            Breathable & sweat-resistant fabrics
                        </p>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="h-8 w-8 flex items-center justify-center bg-red-600 text-white rounded-full shadow">
                            ✓
                        </div>
                        <p class="text-gray-700 font-medium">
                            Lightweight and durable sportswear
                        </p>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="h-8 w-8 flex items-center justify-center bg-red-600 text-white rounded-full shadow">
                            ✓
                        </div>
                        <p class="text-gray-700 font-medium">
                            Athlete-tested performance gear
                        </p>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="h-8 w-8 flex items-center justify-center bg-red-600 text-white rounded-full shadow">
                            ✓
                        </div>
                        <p class="text-gray-700 font-medium">
                            Trendy and modern designs
                        </p>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="h-8 w-8 flex items-center justify-center bg-red-600 text-white rounded-full shadow">
                            ✓
                        </div>
                        <p class="text-gray-700 font-medium">
                            Community-first brand
                        </p>
                    </div>

                </div>

                <!-- Right Image -->
                <div class="relative">
                    <img src="{{asset('images/pexels-tima.jpg')}}" class="rounded-xl w-full h-100 shadow-xl " alt="">

                    <!-- Subtle glow -->
                    {{-- <div class="absolute inset-0 rounded-xl bg-red-600 opacity-20 blur-xl"></div> --}}
                </div>
            </div>

        </div>
    </section>

    <!-- CTA -->
    <section class="py-20 bg-gray-900 text-white text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-4">Join the Movement</h2>
        <p class="max-w-2xl mx-auto text-gray-300 mb-8">Discover premium sportswear built for performance and style.</p>
        <a href="/shop" class="px-8 py-4 bg-red-600 hover:bg-red-700 rounded-lg font-semibold text-white">
            Shop Now
        </a>
    </section>

    <x-footer />

</x-layout>