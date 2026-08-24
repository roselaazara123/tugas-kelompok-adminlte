<x-guest-layout>
    <div class="mb-6 text-center">
        <h2 class="text-2xl font-bold tracking-tight text-gray-900">Buat Akun Baru</h2>
        <p class="mt-1 text-sm text-gray-500">Silakan isi data diri Anda untuk mendaftar</p>
    </div>

    <form method="POST" action="{{ route('register') }}" class="space-y-4">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Nama Lengkap')" class="text-xs font-semibold uppercase tracking-wider text-gray-700" />
            <div class="relative mt-1">
                <x-text-input id="name" class="block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-sm py-2.5 px-3" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="John Doe" />
            </div>
            <x-input-error :messages="$errors->get('name')" class="mt-1 text-xs" />
        </div>

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Alamat Email')" class="text-xs font-semibold uppercase tracking-wider text-gray-700" />
            <div class="relative mt-1">
                <x-text-input id="email" class="block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-sm py-2.5 px-3" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="nama@email.com" />
            </div>
            <x-input-error :messages="$errors->get('email')" class="mt-1 text-xs" />
        </div>

        <!-- Password -->
        <div>
            <x-input-label for="password" :value="__('Kata Sandi')" class="text-xs font-semibold uppercase tracking-wider text-gray-700" />
            <div class="relative mt-1">
                <x-text-input id="password" class="block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-sm py-2.5 px-3"
                                type="password"
                                name="password"
                                required autocomplete="new-password"
                                placeholder="••••••••" />
            </div>
            <x-input-error :messages="$errors->get('password')" class="mt-1 text-xs" />
        </div>

        <!-- Confirm Password -->
        <div>
            <x-input-label for="password_confirmation" :value="__('Konfirmasi Kata Sandi')" class="text-xs font-semibold uppercase tracking-wider text-gray-700" />
            <div class="relative mt-1">
                <x-text-input id="password_confirmation" class="block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-sm py-2.5 px-3"
                                type="password"
                                name="password_confirmation" required autocomplete="new-password"
                                placeholder="••••••••" />
            </div>
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-1 text-xs" />
        </div>

        <!-- Actions -->
        <div class="pt-2 space-y-3">
            <x-primary-button class="w-full justify-center py-2.5 text-sm font-semibold rounded-lg shadow-md transition duration-150 ease-in-out">
                {{ __('Daftar Sekarang') }}
            </x-primary-button>

            <div class="text-center text-sm">
                <span class="text-gray-500">Sudah punya akun?</span>
                <a class="ml-1 font-medium text-indigo-600 hover:text-indigo-500 underline decoration-indigo-200 underline-offset-4 transition" href="{{ route('login') }}">
                    {{ __('Masuk di sini') }}
                </a>
            </div>
        </div>
    </form>
</x-guest-layout>