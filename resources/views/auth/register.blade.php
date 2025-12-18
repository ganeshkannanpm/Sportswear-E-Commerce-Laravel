<x-layout>
    <x-navbar />

    <!-- Page Wrapper -->
    <div class="min-h-screen flex flex-col bg-gray-50 mt-15">

        <!-- Centered Card -->
        <main class="flex-1 flex items-center justify-center px-4">
            <div class="bg-white shadow-xl rounded-2xl p-8 w-full max-w-md">
                <h2 class="text-3xl font-bold text-center mb-6 text-gray-800">
                    Create Account
                </h2>

                <form action="#" method="POST" class="space-y-5">
                    @csrf

                    <!-- Name -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Full Name</label>
                        <input type="text"
                            class="mt-1 w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-red-500 outline-none"
                            placeholder="John Doe" required />
                    </div>

                    <!-- Email -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email"
                            class="mt-1 w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-red-500 outline-none"
                            placeholder="you@example.com" required />
                    </div>

                    <!-- Password -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Password</label>
                        <input type="password"
                            class="mt-1 w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-red-500 outline-none"
                            placeholder="••••••••" required />
                    </div>

                    <!-- Confirm Password -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Confirm Password</label>
                        <input type="password"
                            class="mt-1 w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-red-500 outline-none"
                            placeholder="••••••••" required />
                    </div>

                    <!-- Register Button -->
                    <button
                        class="w-full bg-red-600 text-white py-2 rounded-lg font-semibold hover:bg-red-700 transition">
                        Register
                    </button>
                </form>

                <!-- Login Redirect -->
                <p class="text-center text-sm mt-6 text-gray-600">
                    Already have an account?
                    <a href="{{ route('login') }}" class="text-red-600 hover:underline">Login</a>
                </p>
            </div>
        </main>
    </div>
</x-layout>