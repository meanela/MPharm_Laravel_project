<x-app-layout>
    <x-slot name="header">
    <span class="text-xl  text-transparent bg-clip-text bg-gradient-to-r to-emerald-500 from-gray-500">
            {{ __('Početna') }}
</span>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg text-center">
        <div class="mb-2 mt-2"><span class="text-2xl text-transparent bg-clip-text bg-gradient-to-r to-emerald-500 from-gray-500">
            {{ __('Dobro došli u online apoteku MPharm!') }}
        </span></div>
        <hr/>

                <div class="mt-4">
                    <div><x-weather-widget :currentWeather="$currentWeather"/></div>
                </div>

        <p class="text-justify mt-4 mb-4 mr-4 ml-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum vel mauris interdum, porttitor velit eu, eleifend velit. Mauris ex nulla, eleifend at lacus vitae, eleifend gravida orci. Duis sapien augue, euismod quis vulputate vel, tristique sit amet massa. Aliquam ipsum nulla, luctus congue ornare id, consectetur suscipit ipsum. Nulla auctor tortor at augue posuere, ac iaculis elit molestie. Fusce nisl dolor, vehicula nec mollis viverra, commodo malesuada turpis. Donec sagittis urna nec magna luctus, nec viverra justo sollicitudin. Sed eros tortor, euismod in tincidunt ac, dictum convallis nisi. Donec erat est, feugiat quis auctor at, maximus vel orci. Sed vulputate vulputate imperdiet. Fusce euismod leo sed magna facilisis porttitor. Phasellus id diam et tellus egestas pharetra. Vivamus et vestibulum tellus, id tristique magna. Aenean aliquam placerat nisl nec gravida.

        <p class="text-justify mt-4 mb-4 mr-4 ml-4">Nullam a tellus ut sapien feugiat scelerisque nec sed elit. Nam tincidunt eu arcu id bibendum. Donec ante orci, consectetur quis consectetur sed, facilisis at augue. Duis at aliquam magna. Fusce vitae erat hendrerit, gravida turpis in, facilisis erat. Cras eget mi quis eros viverra finibus. Praesent vel fermentum ante. Nulla facilisi. Suspendisse id sollicitudin velit, vitae condimentum mi. Vivamus pharetra mattis congue. Maecenas in finibus enim, id scelerisque odio.

        <p class="text-justify mt-4 mb-4 mr-4 ml-4">Duis turpis felis, faucibus sit amet vulputate et, viverra nec libero. Ut auctor vehicula turpis eget commodo. Donec at felis a dui eleifend finibus. Aliquam erat eros, dignissim sit amet sem vitae, pulvinar sodales mi. Fusce iaculis erat velit, vitae malesuada ligula auctor vitae. Aliquam id nulla velit. Praesent interdum sollicitudin enim at blandit. Quisque bibendum erat a varius cursus. Nulla lacinia et eros sit amet faucibus. Integer condimentum tincidunt quam ac malesuada. Proin porttitor orci in malesuada pellentesque.

        <p class="text-justify mt-4 mb-4 mr-4 ml-4">Fusce tempor odio a nulla pellentesque sollicitudin. Donec tincidunt tincidunt leo vitae interdum. Duis facilisis nisl metus, at iaculis tellus dapibus vestibulum. Sed dolor est, suscipit porta vehicula vel, luctus sed leo. Suspendisse tempus interdum diam, a vestibulum dolor fermentum non. Nunc lacinia dui lectus, ut vulputate diam venenatis vitae. Nullam justo libero, pellentesque vel luctus nec, vestibulum vitae justo. Suspendisse et magna varius, scelerisque leo non, faucibus ex. Phasellus quis nunc ornare, efficitur tortor vel, elementum orci. Quisque at fermentum enim. Suspendisse dignissim magna nec mauris tincidunt eleifend.

        <p class="text-justify mt-4 mb-4 mr-4 ml-4">Duis ut laoreet mauris, ut tincidunt odio. Curabitur bibendum justo est, et venenatis neque pulvinar non. Fusce rhoncus eu diam a laoreet. Sed tincidunt non mi vel volutpat. Mauris luctus vehicula erat, et tempor felis vulputate non. Nulla aliquet, risus at lacinia ultricies, risus nunc malesuada urna, id efficitur ipsum elit eget dui. Curabitur placerat arcu nibh, commodo condimentum ex dictum sit amet. Aliquam gravida orci a ante suscipit maximus. Mauris lacinia felis sem, nec lacinia eros dapibus ac. Fusce consequat metus vitae dui varius ultrices. Pellentesque egestas, ipsum ac auctor dictum, velit risus tincidunt velit, ac imperdiet arcu lectus efficitur nisi. </p>

        <hr/>
        <div class="mt-2 mb-2 bg-white items-center"><p><span class="text-center text-transparent bg-clip-text bg-gradient-to-r to-emerald-500 from-gray-500">Copyright 2023 © Apoteka MPharm</span></p>
        <p><span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-500 from-gray-500">Design by <a class="underline" href="mailto:minela.prosic.mp@gmail.com">Minela Prošić</span></p>
        </div>
        </div>


        
    </div>



    
</x-app-layout>
