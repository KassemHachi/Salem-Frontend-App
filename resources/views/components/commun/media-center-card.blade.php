<div {{$attributes}} data-aos="zoom-in" data-aos-once="true" data-aos-delay="20" data-aos-duration="500"
    class="relative z-0 flex items-end justify-start w-full col-span-1 overflow-hidden bg-center bg-cover rounded-md group md:first:col-span-2 h-96">
    <div class="z-[1] w-4/5 ps-6 pb-6 group-hover:hidden transition-all duration-300 ease-in-out">
        <div class="flex items-center gap-2">
            <x-icons.calendar class="w-4 h-4 stroke-white" />
            <h3 class="text-base text-white ">
                {{$datetime}}
            </h3>
        </div>
        <h1 class="text-4xl font-semibold text-white truncate">
            {{$title}}
        </h1>
        <p class="w-full text-xl text-white truncate">
            {{$description}}
        </p>
    </div>
    <div class="absolute inset-0 w-full h-full">
        <img class="object-cover w-full h-full transition-all duration-300 ease-in-out scale-110 group-hover:scale-100"
            src="{{$imgSrc}}" alt="{{$imgAlt}}">
    </div>
    <div
        class="absolute inset-0 z-0 transition-all duration-300 ease-in-out bg-gradient-to-t from-salem-dark-blue-500 via-black/40 to-black/20 group-hover:hidden">
    </div>
    <a href="#">
        <div
            class="absolute inset-0 z-0 transition-all duration-300 ease-in-out opacity-0 bg-salem-dark-blue-500/90 group-hover:opacity-100 ">
        </div>
    </a>

    <a href="#"
        class="absolute top-[48%] start-[40%] z-10 opacity-0  px-3 py-2 text-lg font-medium transition-all duration-300 ease-linear bg-white rounded-lg cursor-pointer group-hover:opacity-100  w-fit text-salem-dark-blue-500">
        إقرأ المزيد
    </a>
</div>