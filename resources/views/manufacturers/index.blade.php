<x-app-layout>
    <x-slot name="header">
        <span class="text-xl  text-transparent bg-clip-text bg-gradient-to-r to-emerald-500 from-gray-500">
            {{ __('Početna - Proizvođači') }}</span>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="p-2">
            <div class="mb-2 text-center"><span class="text-2xl text-transparent bg-clip-text bg-gradient-to-r to-emerald-500 from-gray-500">Lista proizvođača</span></div>
            <hr>
            <div class="mb-8"></div>
                @foreach($manufacturers as $manufacturer)
                <p class="p-2">{{$loop->iteration}}. {{$manufacturer->name}} - {{$manufacturer->country}}</p>
                @endforeach
            </div>

            <hr/>
                <div class="mt-2 mb-2 bg-white text-center"><p><span class="text-center text-transparent bg-clip-text bg-gradient-to-r to-emerald-500 from-gray-500">Copyright 2023 © Apoteka MPharm</span></p>
                <p><span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-500 from-gray-500">Design by <a class="underline" href="mailto:minela.prosic.mp@gmail.com">Minela Prošić</span></p>
                </div>
        </div>
    </div>
</div>
</x-app-layout>
