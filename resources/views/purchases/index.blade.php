<x-app-layout>
    <x-slot name="header">
    <span class="text-xl  text-transparent bg-clip-text bg-gradient-to-r to-emerald-500 from-gray-500">
            {{ __('Početna - Kupovine') }}
</span>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="grid grid-cols-4 gap-4 p-4 justify-items-center">

                    <div class="text-justify mr-6 ml-6">
                        <span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-500 from-gray-500">Upit 1:</span>
                        <h1 class="mb-2">Ispisati lijekove koji se najčešće kupuju.</h1>
                        
                        <hr/>
                        @foreach($most_common_medicines as $most_common_medicine) 
                        <p class="mt-2 mb-2">{{$loop->iteration}}. {{$most_common_medicine->name}} - {{$most_common_medicine->brojac}}</p>
                        @endforeach
                        
                    </div>
                    
                    <div class="text-justify mr-6">
                    <span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-500 from-gray-500">Upit 2:</span>
                        <h1 class="mb-2">Ispisati proizvođače čiji se lijekovi najčešće kupuju.</h1>
                        <hr/>
                        @foreach($most_common_manufacturers as $most_common_manufacturer) 
                        <p class="mt-2 mb-2">{{$loop->iteration}}. {{$most_common_manufacturer->name}} - {{$most_common_manufacturer->brojac}}</p>
                        @endforeach
                        
                    </div>

                    <div class="text-justify mr-6">
                    <span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-500 from-gray-500">Upit 3:</span>
                        <h1 class="mb-2">Ispisati broj kupovina odrađenih u periodu od 01.07.2023. do 31.07.2023.</h1>
                        <hr/>
                        <p class="mt-2 mb-2">{{$number_of_purchases}}</p>
                        
                    </div>

                    <div class="text-justify mr-6">
                    <span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-500 from-gray-500">Upit 4:</span>
                        <h1 class="mb-2">Ispisati imena kupaca koji su kupili lijek turske proizvodnje u periodu od 01.07.2023. do 31.07.2023.</h1>
                        <hr/>
                        @foreach($turkish_medicine_buyers as $turkish_medicine_buyer)
                        <p class="mt-2 mb-2">{{$loop->iteration}}. {{$turkish_medicine_buyer->customer_name}}</p>
                        @endforeach
                        
                    </div>

                    <div class="text-justify mr-6 ml-6">
                    <span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-500 from-gray-500">Upit 5:</span>
                        <h1 class="mb-2">Ispisati imena najčešće kupljenih lijekova bosanske proizvodnje.</h1>
                        <hr/>
                        @foreach($most_common_bih_medicines as $most_common_bih_medicine)
                        <p class="mt-2 mb-2">{{$loop->iteration}}. {{$most_common_bih_medicine->name}} - {{$most_common_bih_medicine->brojac}}</p>
                        @endforeach
                        
                    </div>

                    <div class="text-justify mr-6">
                    <span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-500 from-gray-500">Upit 6:</span>
                        <h1 class="mb-2">Ispisati ukupnu količinu kupljenih lijekova bez recepta.</h1>
                        <hr/>
                        <p class="mt-2 mb-2">{{$number_of_brp_medicines}}</p>
                    </div>

                    <div class="text-justify mr-6">
                    <span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-500 from-gray-500">Upit 7:</span>
                        <h1 class="mb-2">Ispisati imena kupaca starijih od 50 koji su kupili više od 3 pakovanja lijeka hrvatskog proizvođača.</h1>
                        <hr/>
                        @foreach($older_customers as $older_customer)
                        <p class="mt-2 mb-2">{{$loop->iteration}}. {{$older_customer->customer_name}}</p>
                        @endforeach
                        
                    </div>

                    <div class="text-justify mr-6">
                    <span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-500 from-gray-500">Upit 8:</span>
                        <h1 class="mb-2">Ispisati imena kupaca koji su kupili lijekove skuplje od 5KM na recept.</h1>
                        <hr/>
                        @foreach($rp_medicines as $rp_medicine)
                        <p class="mt-2 mb-2">{{$loop->iteration}}. {{$rp_medicine->customer_name}}</p>
                        @endforeach
                        
                    </div>

                    
                </div>

                <hr/>
                <div class="mt-2 mb-2 bg-white text-center"><p><span class="text-center text-transparent bg-clip-text bg-gradient-to-r to-emerald-500 from-gray-500">Copyright 2023 © Apoteka MPharm</span></p>
                <p><span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-500 from-gray-500">Design by <a class="underline" href="mailto:minela.prosic.mp@gmail.com">Minela Prošić</span></p>
                </div>
              
            </div>
        </div>
    </div>
</x-app-layout>