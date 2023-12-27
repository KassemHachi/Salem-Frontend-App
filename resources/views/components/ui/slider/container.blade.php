<div id="heroSlider" class="relative w-full" data-te-carousel-init data-te-ride="carousel">
    <!--Carousel indicators-->
    <style>
        #indicators-hero button[data-te-carousel-active] {
            background-color: rgb(193 166 97)
        }
    </style>
    <div class="absolute flex flex-col items-center gap-5  bottom-2 z-[2] start-[calc(50%-18px)] ">
        {{-- Indicators button and the number of slides is required to dupliacte the buttons to match number of slides
        --}}
        <x-ui.slider.indicators :slides="$slides" />

        <x-icons.chevron-down class="w-8 h-8 stroke-white animate-bounce me-0.5" />
    </div>



    <!--Carousel items-->
    <div class="relative w-full overflow-hidden after:clear-both after:block after:content-['']">
        {{$slot}}

    </div>


</div>