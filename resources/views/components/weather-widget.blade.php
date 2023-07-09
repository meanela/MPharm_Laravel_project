<div class="bg-white items-center">
    <div class="relative items-center">
        
        <div class="flex items-center justify-between px-24">
            <div class="flex items-center ml-10">
                <div>
                <span class="text-5xl  text-transparent bg-clip-text bg-gradient-to-r to-emerald-500 from-gray-500">{{round($currentWeather['main']['temp'])}}&#176;C </span>
                    <div class="text-gray-500">Osjećaj kao {{round($currentWeather['main']['feels_like'])}}&#176;C </div>
                </div>
            <div class="ml-60">
            <span class="text-3xl  text-transparent bg-clip-text bg-gradient-to-r to-emerald-500 from-gray-500">{{ ucfirst($currentWeather['weather'][0]['description'])}}</span>
                <div class="text-gray-500">Bihać, Bosna i Hercegovina</div>
            </div>
        </div>
        <div><img src="http://openweathermap.org/img/wn/{{ $currentWeather ['weather'][0]['icon'] }}@4x.png" alt="icon"></div>
    </div>
</div>
</div>

