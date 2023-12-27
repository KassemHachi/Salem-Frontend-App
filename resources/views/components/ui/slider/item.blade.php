<div {{$attributes}}
    class="relative float-left h-80 lg:h-full -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
    data-te-carousel-item style="backface-visibility: hidden">
    <div class="absolute z-0 w-full h-full bg-salem-dark-blue-600/90"></div>
    <img src="{{Vite::asset('resources/images/salem-hero-image.jpg')}}" class="object-cover w-full h-full"
        alt="سالم بن علي بن بغيّه العجمي" />
    <div
        class="absolute w-3/4 lg:w-1/2 inset-x-5 lg:inset-x-[5rem] bottom-[15%]  lg:bottom-[20%]  py-5 text-center text-white md:block">
        {{$slot}}
    </div>
</div>