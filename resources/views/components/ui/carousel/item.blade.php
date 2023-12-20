@if ($active==true)
<div class="relative float-left bg-salem-dark-blue-500  -mr-[100%] w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
    data-te-carousel-item data-te-carousel-active style="backface-visibility: hidden">
    <x-icons.pattern class="absolute left-0 z-20" />
    <div class="py-5 text-center text-white md:block">
        <div class="relative flex flex-col items-center justify-center">
            <img class="w-24 h-24 rounded-full" src="{{$imgsrc}}" alt="">
            <x-icons.quote class="absolute top-20" />
            <p class="px-16 mt-10 text-[25px] font-normal text-center text-white lg:px-28 line-clamp-2">
                “
                {{$description}}
                ”
            </p>
        </div>

    </div>
</div>
@else
<div class="relative float-left   -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
    data-te-carousel-item style="backface-visibility: hidden">
    <x-icons.pattern class="absolute left-0 z-20" />
    <div class="py-5 text-center text-white md:block">
        <div class="relative flex flex-col items-center justify-center">
            <img class="w-24 h-24 rounded-full" src="{{$imgsrc}}" alt="">
            <x-icons.quote class="absolute top-20" />
            <p class="px-16 mt-10 text-[25px] font-normal text-center text-white lg:px-28 line-clamp-2">
                “
                {{$description}}
                ”
            </p>
        </div>

    </div>
</div>
@endif