<x-app-layout>
    <x-slot name="header">
    <span class="text-xl  text-transparent bg-clip-text bg-gradient-to-r to-emerald-500 from-gray-500">
            {{ __('Početna - Lijekovi - Uredi') }}
</span>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-2">
                    @foreach($medicines as $medicine)
                    <form method="POST" action="{{ route('update_medicine') }}">
                        @csrf
                        <input type="hidden" name="id" value="{{$medicine->id}}"/>
                        <div>
                            <x-label for="name" value="{{ __('Naziv') }}" />
                            <x-input id="name" class="block mt-1 w-full bg-gray-100" type="text" name="name" value="{{$medicine->name}}" required autofocus />
                        </div> 
                        <div class="mt-4">
                            <x-label for="category" value="{{ __('Kategorija') }}" />
                            <x-input id="category" class="block mt-1 w-full bg-gray-100" type="text" name="category" value="{{$medicine->category}}" required autofocus />
                        </div>
                        <div class="mt-4">
                            <x-label for="description" value="{{ __('Opis') }}" />
                            <x-input id="description" class="block mt-1 w-full bg-gray-100" type="text" name="description" value="{{$medicine->description}}" required autofocus />
                        </div>
                        <div class="mt-4">
                            <x-label for="price" value="{{ __('Cijena') }}" />
                            <x-input id="price" class="block mt-1 w-full bg-gray-100" type="number" step="0.01" name="price" value="{{$medicine->price}}" required autofocus />
                        </div> 
                        <div class="mt-4">
                            <x-label for="manufacturer" value="{{ __('Proizvođač') }}" />
                            <select id="manufacturer" name="manufacturer" class="form-select block w-full mt-1 bg-gray-100 border-emerald-500 focus:border-emerald-500 
                            focus:ring focus:ring-emerald-500 focus:ring-opacity-50 rounded-md shadow-sm">
                                <option selected="true" disabled="disabled">Odaberi</option>
                                @foreach($manufacturers as $manufacturer)
                                <option class="hover:bg-emerald-500" value="{{$manufacturer->id}}" 
                                @if($medicine->manufacturer == $manufacturer->id) selected 
                                @endif>{{$manufacturer->name}}</option>
                                @endforeach
                            </select> 
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            <x-button class="ml-4">
                                {{ __('Spremi') }}
                            </x-button>
                        </div>
                    </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>