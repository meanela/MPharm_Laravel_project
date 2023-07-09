<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
        
            <x-authentication-card-logo />
        
        </x-slot>
        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-label for="email" value="{{ __('E-pošta') }}" />
                <x-input id="email" class="block mt-1 w-full bg-gray-100 focus:outline-none border-emerald-500 focus:border-emerald-500 focus:ring-0 focus:border-2" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Šifra') }}" />
                <x-input id="password" class="block mt-1 w-full bg-gray-100 focus:outline-none border-emerald-500 focus:border-emerald-500 focus:ring-0 focus:border-2" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-input type="checkbox" class="bg-gray-100 text-emerald-500 focus:ring-0 focus:border-emerald-500 focus:border-2" id="remember_me" name="remember"  />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Zapamti me') }}</span>
                </label>
            </div>

            <div class="flex items-center mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-emerald-500" href="{{ route('password.request') }}">
                        {{ __('Zaboravili ste svoju šifru?') }}
                    </a>
                    
                    
                @endif

            <div class="ml-5">
            @if (Route::has('password.request'))
            <a class="underline text-sm text-gray-600 hover:text-emerald-500" href="{{ route('register') }}">
                        {{ __('Nemate račun?') }}
                    </a>
                    @endif

                <x-button class="ml-7 bg-emerald-500 shadow hover:shadow-emerald-900">
                    {{ __('Prijava') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
