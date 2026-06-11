<div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-blue-100 via-white to-blue-200 px-4">

    <div class="w-full max-w-md bg-white/80 backdrop-blur-lg shadow-2xl rounded-3xl p-8 border border-gray-100">

        <!-- Header -->
        <div class="text-center mb-8">
            <div class="w-16 h-16 mx-auto bg-blue-800 text-white rounded-full flex items-center justify-center text-xl font-bold shadow-md">
                AE
            </div>

            <h1 class="text-2xl font-bold text-blue-900 mt-4">
                Data Alumni Elektro UNSRI
            </h1>

            <p class="text-gray-500 text-sm mt-1">
                Login Admin Panel
            </p>
        </div>

        <!-- Validation -->
        <x-validation-errors class="mb-4" />

        @session('status')
            <div class="mb-4 text-sm text-green-600 bg-green-50 border border-green-200 p-2 rounded-lg">
                {{ $value }}
            </div>
        @endsession

        <!-- Form -->
        <form method="POST" action="{{ route('login') }}" class="space-y-5">
            @csrf

            <!-- Email -->
            <div>
                <x-label for="email" value="Email" />
                <x-input id="email"
                         class="block mt-1 w-full rounded-xl border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200"
                         type="email"
                         name="email"
                         :value="old('email')"
                         required
                         autofocus />
            </div>

            <!-- Password -->
            <div>
                <x-label for="password" value="Password" />
                <x-input id="password"
                         class="block mt-1 w-full rounded-xl border-gray-300 focus:border-blue-500 focus:ring focus:ring-blue-200"
                         type="password"
                         name="password"
                         required
                         autocomplete="current-password" />
            </div>

            <!-- Remember -->
            <div class="flex items-center justify-between">
                <label class="flex items-center space-x-2">
                    <input type="checkbox"
                           name="remember"
                           class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                    <span class="text-sm text-gray-600">Ingat saya</span>
                </label>
            </div>

            <!-- Button -->
            <button type="submit"
                    class="w-full bg-blue-800 hover:bg-blue-900 text-white font-semibold py-2.5 rounded-xl shadow-md transition duration-200">
                Login
            </button>

            <!-- Back -->
            <div class="text-center mt-4">
                <a href="{{ url('/') }}"
                   class="text-sm text-blue-700 hover:underline">
                    ← Kembali ke Beranda
                </a>
            </div>

        </form>

    </div>
</div>