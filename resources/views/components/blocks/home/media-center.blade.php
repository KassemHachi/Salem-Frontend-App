<section id="media-center" class="py-20">
    <div class="flex justify-between px-20 mb-10">

        <div class="flex gap-2">
            <a href="#"
                class="flex items-center gap-2 px-3 text-sm font-semibold text-white transition-all duration-150 ease-linear rounded-lg bg-salem-dark-blue-500 hover:bg-salem-dark-blue-600">

                الكل
            </a>
            <a href="#"
                class="flex items-center gap-2 px-3 text-sm font-semibold transition-all duration-150 ease-linear border-2 rounded-lg group hover:bg-salem-dark-blue-500 hover:text-white border-salem-dark-blue-500 text-salem-dark-blue-500">
                الأخبار
            </a>
            <a href="#"
                class="flex items-center gap-2 px-3 text-sm font-semibold transition-all duration-150 ease-linear border-2 rounded-lg group hover:bg-salem-dark-blue-500 hover:text-white border-salem-dark-blue-500 text-salem-dark-blue-500">
                مكتبة الصور
            </a>
            <a href="#"
                class="flex items-center gap-2 px-3 text-sm font-semibold transition-all duration-150 ease-linear border-2 rounded-lg group hover:bg-salem-dark-blue-500 hover:text-white border-salem-dark-blue-500 text-salem-dark-blue-500">
                الفيديوهات
            </a>


        </div>
        <h1 class="text-5xl font-semibold w-fit text-salem-dark-blue-500 text-start">
            المركز الإعلامي
        </h1>

        <a href="#"
            class="flex items-center gap-2 px-3 text-sm font-semibold text-white transition-all duration-150 ease-linear rounded-lg bg-salem-dark-blue-500 hover:bg-salem-dark-blue-600">

            عرض الجميع
        </a>

    </div>
    <div class="grid grid-cols-1 gap-10 px-20 md:grid-cols-2 lg:grid-cols-3 ">
        <x-commun.media-center-card />
        <x-commun.media-center-card />
        <x-commun.media-center-card />
        <x-commun.media-center-card />
        <x-commun.media-center-card />
        <x-commun.media-center-video-card />
        <x-commun.media-center-video-card />
        <x-commun.media-center-video-card />
    </div>

</section>