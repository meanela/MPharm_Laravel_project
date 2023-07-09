<x-form-section submit="updatePassword">
    <x-slot name="title">
        {{ __('Promijenite šifru') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Osigurajte da vaš račun koristi dugu, nasumično odabranu šifru kako biste ostali sigurni.') }}
    </x-slot>

    <x-slot name="form">
        <div class="col-span-6 sm:col-span-4">
            <x-label for="current_password" value="{{ __('Trenutna šifra') }}" />
            <x-input id="current_password" type="password" class="mt-1 block w-full bg-gray-100" wire:model.defer="state.current_password" autocomplete="current-password" />
            <x-input-error for="current_password" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-label for="password" value="{{ __('Nova šifra') }}" />
            <x-input id="password" type="password" class="mt-1 block w-full bg-gray-100" wire:model.defer="state.password" autocomplete="new-password" />
            <x-input-error for="password" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-label for="password_confirmation" value="{{ __('Potvrdi šifru') }}" />
            <x-input id="password_confirmation" type="password" class="mt-1 block w-full bg-gray-100" wire:model.defer="state.password_confirmation" autocomplete="new-password" />
            <x-input-error for="password_confirmation" class="mt-2" />
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-action-message class="mr-3" on="saved">
            {{ __('Sačuvano.') }}
        </x-action-message>

        <x-button class="bg-emerald-500 shadow hover:shadow-emerald-900">
            {{ __('Sačuvaj') }}
        </x-button>
    </x-slot>
</x-form-section>
