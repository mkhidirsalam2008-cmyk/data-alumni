<x-guest-layout>

<div class="min-h-screen flex items-center justify-center bg-gray-100">

    <div class="w-full max-w-md bg-white shadow-xl rounded-2xl p-8">

        <div class="text-center mb-6">

            <h1 class="text-3xl font-bold text-blue-900">
                Data Alumni Elektro UNSRI
            </h1>

            <p class="text-gray-500 mt-2">
                Login Admin
            </p>

        </div>

        <x-validation-errors class="mb-4" />

        @session('status')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ $value }}
            </div>
        @endsession

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-label for="email" value="Email" />
                <x-input id="email"
                         class="block mt-1 w-full"
                         type="email"
                         name="email"
                         :value="old('email')"
                         required
                         autofocus />
            </div>

            <div class="mt-4">
                <x-label for="password" value="Password" />

                <x-input id="password"
                         class="block mt-1 w-full"
                         type="password"
                         name="password"
                         required
                         autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label class="flex items-center">
                    <input type="checkbox"
                           name="remember"
                           class="rounded border-gray-300 text-indigo-600 shadow-sm">

                    <span class="ms-2 text-sm text-gray-600">
                        Ingat Saya
                    </span>
                </label>
            </div>

            <div class="flex items-center justify-between mt-6">

                <a href="{{ url('/') }}"
                   class="text-sm text-blue-700 hover:underline">
                    ← Kembali ke Beranda
                </a>

                <x-button>
                    Login
                </x-button>

            </div>

        </form>

    </div>

</div>

</x-guest-layout>