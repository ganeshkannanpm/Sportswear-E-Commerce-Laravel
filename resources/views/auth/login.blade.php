<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Login - Sportswear</title>
</head>

<body class="h-full flex items-center justify-center px-4">
    <div class="bg-white shadow-lg rounded-xl p-8 w-full max-w-md">
        <h2 class="text-3xl font-bold text-center mb-6 text-gray-800">Login</h2>

        <form action="#" method="POST" class="space-y-5">
            <!-- Email -->
            <div>
                <label class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" class="mt-1 w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 outline-none" placeholder="you@example.com" required />
            </div>

            <!-- Password -->
            <div>
                <label class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" class="mt-1 w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 outline-none" placeholder="••••••••" required />
            </div>

            <!-- Forgot Password -->
            <div class="text-right">
                <a href="#" class="text-blue-600 text-sm hover:underline">Forgot password?</a>
            </div>

            <!-- Login Button -->
            <button class="w-full bg-blue-600 text-white py-2 rounded-lg font-semibold hover:bg-blue-700 transition">
                Login
            </button>
        </form>

        <!-- Register Redirect -->
        <p class="text-center text-sm mt-6 text-gray-600">
            Don't have an account?
            <a href="register.html" class="text-blue-600 hover:underline">Register</a>
        </p>
    </div>
</body>
</html>
