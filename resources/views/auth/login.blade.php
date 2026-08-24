<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="mb-6 text-center">
        <h2 class="text-2xl font-bold tracking-tight text-gray-900">Selamat Datang Kembali</h2>
        <p class="mt-1 text-sm text-blue-500">Silakan masuk ke akun Anda</p>
    </div>

    <form method="POST" action="{{ route('login') }}" class="space-y-4">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Alamat Email')" class="text-xs font-semibold uppercase tracking-wider text-gray-700" />
            <div class="relative mt-1">
                <x-text-input id="email" class="block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-sm py-2.5 px-3" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="nama@email.com" />
            </div>
            <x-input-error :messages="$errors->get('email')" class="mt-1 text-xs" />
        </div>

        <!-- Password -->
        <div>
            <div class="flex items-center justify-between">
                <x-input-label for="password" :value="__('Kata Sandi')" class="text-xs font-semibold uppercase tracking-wider text-gray-700" />
                @if (Route::has('password.request'))
                    <a class="text-xs font-medium text-indigo-600 hover:text-indigo-500 transition" href="{{ route('password.request') }}">
                        {{ __('Lupa Kata Sandi?') }}
                    </a>
                @endif
            </div>
            <div class="relative mt-1">
                <x-text-input id="password" class="block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-sm py-2.5 px-3"
                                type="password"
                                name="password"
                                required autocomplete="current-password"
                                placeholder="••••••••" />
            </div>
            <x-input-error :messages="$errors->get('password')" class="mt-1 text-xs" />
        </div>

        <!-- Remember Me -->
        <div class="flex items-center justify-between pt-1">
            <label for="remember_me" class="inline-flex items-center cursor-pointer">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500 w-4 h-4" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Ingat Saya') }}</span>
            </label>
        </div>

        <!-- Actions -->
        <div class="pt-2 space-y-3">
            <x-primary-button class="w-full justify-center py-2.5 text-sm font-semibold rounded-lg shadow-md transition duration-150 ease-in-out">
                {{ __('Masuk') }}
            </x-primary-button>

            @if (Route::has('register'))
                <div class="text-center text-sm">
                    <span class="text-gray-500">Belum punya akun?</span>
                    <a class="ml-1 font-medium text-indigo-600 hover:text-indigo-500 underline decoration-indigo-200 underline-offset-4 transition" href="{{ route('register') }}">
                        {{ __('Daftar di sini') }}
                    </a>
                </div>
            @endif
        </div>
    </form>
</x-guest-layout>