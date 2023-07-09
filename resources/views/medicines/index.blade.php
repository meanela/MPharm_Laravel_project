<x-app-layout>
    <x-slot name="header">
    <span class="text-xl  text-transparent bg-clip-text bg-gradient-to-r to-emerald-500 from-gray-500">
            {{ __('Početna - Lijekovi') }}
</span>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="\add_medicine" class="m-2 p-2 text-xl text-gray-500 flex items-center justify-end">Dodaj lijek</a>      
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-2">
                    <div class="text-center mb-2"><span class="text-2xl text-center text-transparent bg-clip-text bg-gradient-to-r to-gray-500 via-emerald-500 from-red-500">Lista lijekova</span></div>
                        <hr>
                        <div class="mb-8"></div>
                     @foreach ($medicines as $medicine)
                    <div class="flex none">
                        <div class="flex-auto"><p class="p-2">{{$loop->iteration}}. {{ $medicine->name }} - {{ $medicine->description }} - {{ $medicine->price }} KM</div>
                        <div class="flex-none">
                            <form method="POST" action="{{ route('delete_medicine') }}">
                            @csrf
                            <input type="hidden" name="id" value="{{$medicine->id}}">
                            <div class="p-2">
                                <button class='shadow hover:shadow-red-900 inline-flex items-center px-4 py-2 bg-red-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 focus:bg-red-500 active:bg-red-500 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition ease-in-out duration-150'>
                                    {{ __('Obriši') }}
                                </button>
                            </div>
                            </form>
                        </div>
                        <div class="flex-none">
                            <form method="POST" action="{{ route('edit_medicine') }}">
                            @csrf
                            <input type="hidden" name="id" value="{{$medicine->id}}">
                            <div class="p-2">
                                <x-button class="bg-emerald-500 shadow hover:shadow-emerald-900">
                                    {{ __('Uredi') }}
                                </x-button>
                            </div>
                            </form>
                        </div>
                        <div class="flex-none">
                            <form method="POST" action="{{ route('file_add') }}">
                            @csrf
                            <input type="hidden" name="id" value="{{$medicine->id}}">
                            <div class="p-2">
                                <x-button class="shadow hover:shadow-gray-900 inline-flex items-center px-4 py-2 bg-gray-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-500 focus:bg-gray-500 active:bg-gray-500 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                    {{ __('Dodaj fajl') }}
                                </x-button>
                            </div>
                            </form>
                        </div>
                    </div>
                    @endforeach
                </div>

                <hr/>
                <div class="bg-white text-center mt-2 mb-2"><p><span class="text-center text-transparent bg-clip-text bg-gradient-to-r to-gray-500 via-emerald-500 from-red-500">Copyright 2023 © Apoteka MPharm</span></p>
                <p><span class="text-transparent bg-clip-text bg-gradient-to-r from-red-500 via-emerald-500 to-gray-500">Design by <a class="underline" href="mailto:minela.prosic.mp@gmail.com">Minela Prošić</span></p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
