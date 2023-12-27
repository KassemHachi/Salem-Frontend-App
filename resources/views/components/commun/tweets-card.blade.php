<div data-aos="zoom-in" data-aos-once="true" {{$attributes}}
    class="relative col-span-1 overflow-hidden border rounded-lg shadow-2xl cursor-pointer border-slate-600/20 group shadow-salem-yellow-100 h-96">
    <x-icons.x-twitter class="absolute z-10 left-4 top-4" />
    <div
        class="absolute z-20 w-full h-full transition-all duration-150 ease-linear opacity-0 bg-salem-yellow-500 group-hover:opacity-95">
    </div>

    <div class="relative h-40">
        <div class="absolute inset-0 z-10 bg-gradient-to-t from-white to-salem-yellow-500/20">
        </div>
        <img class="object-cover object-top w-full h-40 "
            src="{{Vite::asset('resources/images/salem-profile-picture-twitter.jpg')}}" alt="سالم العجيمي">

    </div>

    <div class="h-full px-4 bg-white">
        <x-ui.heading.six>
            سالم بن بغيّه العجمي
        </x-ui.heading.six>
        <div class="flex items-center justify-end gap-1" style="direction: ltr">
            <x-icons.user-square />
            <a class="text-base text-salem-yellow-500" href="#twtter_user">{{"@alajmi_info"}}</a>
        </div>
        <p style="" class="text-base text-salem-dark-blue-300 line-clamp-4">
            {{$tweet}}
        </p>
        <div class="flex gap-3 mt-4 flex-start">
            <div class="flex items-center gap-1">
                <x-icons.heart />
                <span class="text-base">{{$likes}}</span>
            </div>
            <div class="flex items-center gap-1">
                <x-icons.retweet />
                <span class="text-base">{{$retweets}}</span>
            </div>
        </div>

    </div>
    <div
        class="absolute z-20 flex items-center transition-all duration-500  gap-2 left-3 group-hover:left-[calc(50%-3.5rem)] bottom-3 group-hover:bottom-[calc(50%-2rem)]">
        <span
            class="text-[20px] font-semibold transition-all duration-500 text-salem-dark-blue-500 group-hover:text-white">التغريدة</span>
        <div class="px-4 py-3 transition-all duration-500 rounded-full bg-salem-yellow-500 group-hover:bg-white">
            <x-icons.chevron-left
                class="transition-all duration-500 stroke-white group-hover:stroke-salem-yellow-500" />
        </div>

    </div>
</div>