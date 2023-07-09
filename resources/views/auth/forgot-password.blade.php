<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <div class="mb-4 text-sm text-gray-600 text-justify">
            {{ __('Zaboravili ste šifru? Nema problema. Samo nam ukucajte svoju adresu e-pošte i mi ćemo vam e-poštom poslati link za poništavanje lozinke koji će vam omogućiti da odaberete novu.') }}
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-label for="email" value="{{ __('E-pošta') }}" />
                <x-input id="email" class="block mt-1 w-full bg-gray-100" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button class="bg-emerald-500 shadow hover:shadow-emerald-900">
                    {{ __('Pošalji') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>
