<x-guest-layout>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-pink-50/60">
        
        <!-- Logo & Title Brand -->
        <div class="text-center mb-6">
            <h1 class="text-3xl font-extrabold text-rose-950 font-serif tracking-wide flex items-center justify-center space-x-2">
                <span>💄</span>
                <span>Maison de Clarissa</span>
            </h1>
            <p class="text-rose-700 text-xs mt-1">Sistem Manajemen Stok Skincare & Kosmetik</p>
        </div>

        <!-- Card Form Login -->
        <div class="w-full sm:max-w-md px-8 py-8 bg-white shadow-md border border-rose-100 rounded-3xl">
            
            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}" class="space-y-5">
                @csrf

                <!-- Email Address -->
                <div>
                    <label for="email" class="block font-semibold text-xs text-rose-900 uppercase tracking-wider mb-1">Email</label>
                    <input id="email" class="block w-full rounded-2xl border-rose-200 focus:border-rose-400 focus:ring focus:ring-rose-200 focus:ring-opacity-50 text-sm p-3 bg-pink-50/20" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div>
                    <label for="password" class="block font-semibold text-xs text-rose-900 uppercase tracking-wider mb-1">Password</label>
                    <input id="password" class="block w-full rounded-2xl border-rose-200 focus:border-rose-400 focus:ring focus:ring-rose-200 focus:ring-opacity-50 text-sm p-3 bg-pink-50/20" type="password" name="password" required autocomplete="current-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Remember Me & Forgot Password -->
                <div class="flex items-center justify-between text-xs">
                    <label for="remember_me" class="inline-flex items-center text-gray-600">
                        <input id="remember_me" type="checkbox" class="rounded border-rose-300 text-rose-600 shadow-sm focus:ring-rose-400" name="remember">
                        <span class="ms-2">Ingat saya</span>
                    </label>

                    @if (Route::has('password.request'))
                        <a class="text-rose-700 hover:text-rose-900 font-medium transition" href="{{ route('password.request') }}">
                            Lupa password?
                        </a>
                    @endif
                </div>

                <!-- Button Login -->
                <div class="pt-2">
                    <button type="submit" class="w-full bg-rose-600 hover:bg-rose-700 text-white font-bold py-3 px-4 rounded-2xl shadow-sm text-sm transition duration-200">
                        Masuk ke Akun
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>