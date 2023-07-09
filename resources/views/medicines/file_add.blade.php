<x-app-layout>
    <x-slot name="header">
    <span class="text-xl  text-transparent bg-clip-text bg-gradient-to-r to-emerald-500 from-gray-500">
            {{ __('Početna - Lijekovi - Dodaj fajl') }}
</span>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-2">
                <form action="/process" enctype="multipart/form-data" method="POST">
                    @csrf
                    <input type="hidden" value = "{{$id}}" name="id">
                    <p>
                        <label for="file">
                            <input type="file" name="file" id="file">
                        </label>
                    </p>
                    <x-button class="ml-4 inline-flex items-center px-4 py-2 bg-gray-500 hover:bg-gray-500 shadow hover:shadow-gray-900 focus:bg-gray-500 active:bg-gray-500 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 border border-transparent rounded-md 
                                font-semibold text-xs text-white uppercase float-right m-2">Učitaj
                    </x-button>
                </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>