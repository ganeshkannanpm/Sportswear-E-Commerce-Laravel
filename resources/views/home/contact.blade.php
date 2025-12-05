<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Sportswear</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">

    <!-- Header Section -->
    <section class="w-full bg-black text-white py-16 px-6 text-center">
        <h1 class="text-4xl font-bold tracking-wide">Contact Us</h1>
        <p class="mt-3 text-lg text-gray-300 max-w-xl mx-auto">
            Have questions about our products, orders or partnerships?  
            We’re here to help you stay active and perform your best.
        </p>
    </section>


    <!-- Contact Section -->
    <section class="py-16 px-6 max-w-6xl mx-auto grid md:grid-cols-2 gap-12">

        <!-- Contact Form -->
        <div class="bg-white p-8 rounded-2xl shadow-md">
            <h2 class="text-2xl font-bold mb-6">Send Us a Message</h2>

            <form class="space-y-5">
                <div>
                    <label class="block text-sm font-medium mb-2">Your Name</label>
                    <input type="text" class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:ring-2 focus:ring-black outline-none">
                </div>

                <div>
                    <label class="block text-sm font-medium mb-2">Email Address</label>
                    <input type="email" class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:ring-2 focus:ring-black outline-none">
                </div>

                <div>
                    <label class="block text-sm font-medium mb-2">Subject</label>
                    <input type="text" class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:ring-2 focus:ring-black outline-none">
                </div>

                <div>
                    <label class="block text-sm font-medium mb-2">Message</label>
                    <textarea rows="5" class="w-full border border-gray-300 rounded-xl px-4 py-3 focus:ring-2 focus:ring-black outline-none"></textarea>
                </div>

                <button class="w-full bg-black text-white py-3 rounded-xl text-lg font-semibold hover:bg-gray-800 transition">
                    Send Message
                </button>
            </form>
        </div>


        <!-- Contact Info Section -->
        <div class="space-y-8">

            <!-- Store Info -->
            <div class="bg-white p-8 rounded-2xl shadow-md">
                <h2 class="text-2xl font-bold mb-4">Our Contact Details</h2>

                <p class="text-gray-600"><strong>Phone:</strong> +91 98765 43210</p>
                <p class="text-gray-600"><strong>Email:</strong> support@sportswear.com</p>
                <p class="text-gray-600"><strong>Address:</strong>  
                    Sportswear India Pvt Ltd,  
                    2nd Floor, Fitness Street, Chennai, India.
                </p>

                <h3 class="font-semibold text-lg mt-5">Business Hours</h3>
                <ul class="text-gray-600 mt-2">
                    <li>Mon – Fri: 9:00 AM – 7:00 PM</li>
                    <li>Sat: 10:00 AM – 5:00 PM</li>
                    <li>Sun: Closed</li>
                </ul>
            </div>


            <!-- Social Media -->
            <div class="bg-white p-8 rounded-2xl shadow-md">
                <h2 class="text-xl font-bold mb-4">Connect With Us</h2>

                <div class="flex items-center gap-4 mt-3">
                    <a href="#" class="text-blue-600 font-semibold hover:underline">Instagram</a>
                    <a href="#" class="text-blue-600 font-semibold hover:underline">Facebook</a>
                    <a href="#" class="text-blue-600 font-semibold hover:underline">Twitter</a>
                </div>
            </div>

        </div>

    </section>



    <!-- Google Map -->
    <section class="mt-12">
        <iframe 
            class="w-full h-80"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!...your-map-link..."
            allowfullscreen="" 
            loading="lazy">
        </iframe>
    </section>



    <!-- Support Icons / Features -->
    <section class="py-16 bg-white mt-12 border-t">
        <div class="max-w-6xl mx-auto grid md:grid-cols-3 gap-10 px-6 text-center">

            <div>
                <img src="https://cdn-icons-png.flaticon.com/512/1483/1483336.png" class="w-14 mx-auto mb-3">
                <h3 class="font-bold text-lg">Fast Support</h3>
                <p class="text-gray-500">We respond quickly to ensure smooth sports shopping.</p>
            </div>

            <div>
                <img src="https://cdn-icons-png.flaticon.com/512/709/709790.png" class="w-14 mx-auto mb-3">
                <h3 class="font-bold text-lg">Secure Orders</h3>
                <p class="text-gray-500">Your order & payment details stay secure.</p>
            </div>

            <div>
                <img src="https://cdn-icons-png.flaticon.com/512/1040/1040230.png" class="w-14 mx-auto mb-3">
                <h3 class="font-bold text-lg">Quality Sportswear</h3>
                <p class="text-gray-500">Premium clothing, shoes, and gear for every athlete.</p>
            </div>

        </div>
    </section>


    <!-- Footer -->
    <footer class="bg-black text-white text-center py-6 mt-10">
        <p>&copy; 2025 Sportswear. All Rights Reserved.</p>
    </footer>

</body>
</html>
