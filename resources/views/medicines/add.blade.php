<x-app-layout>
    <x-slot name="header">
    <span class="text-xl  text-transparent bg-clip-text bg-gradient-to-r to-emerald-500 from-gray-500">
            {{ __('Početna - Lijekovi - Dodavanje') }}
</span>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-2">
                    <form method="POST" action="{{ route('store_medicine') }}">
                        @csrf
                        <div>
                            <x-label for="name" value="{{ __('Naziv') }}" />
                            <x-input id="name" class="block mt-1 w-full bg-gray-100" type="text" name="name" :value="old('name')" required autofocus />
                        </div>
                        
                        <div class="mt-4">
                            <x-label for="category" value="{{ __('Kategorija') }}" />
                            <select id="category" name="category" class="form-select block w-full mt-1 bg-gray-100 border-emerald-500 focus:border-emerald-500 
                            focus:ring focus:ring-emerald-500 focus:ring-opacity-50 rounded-md shadow-sm">
                                <option selected="true" disabled="disabled">Odaberi</option>
                                
                                <option class="hover:bg-emerald-500">BRp</option>
                                <option class="hover:bg-emerald-500">Rp</option>
                                
                            </select>
                        </div>

                        <div class="mt-4">
                            <x-label for="description" value="{{ __('Opis') }}" />
                            <x-input id="description" class="block mt-1 w-full bg-gray-100" type="text" name="description" required autofocus />
                        </div>

                        <div class="mt-4">
                            <x-label for="price" value="{{ __('Cijena') }}" />
                            <x-input id="price" class="block mt-1 w-full bg-gray-100" type="number" name="price" step="0.01" required autofocus />
                        </div>
                       
                        <div class="mt-4">
                            <x-label for="manufacturer" value="{{ __('Proizvođač') }}" />
                            <select id="manufacturer" name="manufacturer" class="form-select block w-full mt-1 bg-gray-100 border-emerald-500 focus:border-emerald-500 
                            focus:ring focus:ring-emerald-500 focus:ring-opacity-50 rounded-md shadow-sm">
                                <option selected="true" disabled="disabled">Odaberi</option>
                                @foreach($manufacturers as $manufacturer)
                                <option class="hover:bg-emerald-500" value="{{$manufacturer->id}}">{{$manufacturer->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            <x-button class="ml-7 bg-emerald-500 shadow hover:shadow-emerald-900">
                                {{ __('Spremi') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>