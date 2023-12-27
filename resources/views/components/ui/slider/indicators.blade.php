<div id="indicators-hero" class="flex flex-row-reverse justify-center gap-3 p-0 list-none " data-te-carousel-indicators>

    @for ($i = 0; $i < $slides ; $i++) <button type="button" {{$i==$slides-1? 'data-te-carousel-active' :''}}
        data-te-target="#heroSlider" data-te-slide-to="{{$i}}"
        class="w-2.5 h-2.5 rounded-full  cursor-pointer border-0 order-solid bg-white/80 active:bg-salem-yellow-500 bg-clip-padding p-0 -indent-[999px]  transition-colors duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
        aria-label="Slide {{$i}}"></button>

        @endfor


</div>