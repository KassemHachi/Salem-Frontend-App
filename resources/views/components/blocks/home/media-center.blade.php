<section id="media-center" class="py-20">
    <div class="grid px-3 mb-10 md:px-10 lg:px-20 md:grid-cols-1 lg:grid-cols-3">
        <div class="col-span-1">
            <div class="flex justify-between w-full gap-2 lg:justify-start lg:w-fit">
                <a href="#"
                    class="px-2 py-2 text-lg font-medium text-white truncate transition-all duration-150 ease-linear rounded-lg lg:px-3 bg-salem-dark-blue-500 hover:bg-salem-dark-blue-600">
                    الكل
                </a>
                <a href="#"
                    class="px-2 py-2 text-lg font-medium truncate transition-all duration-150 ease-linear border-2 rounded-lg lg:px-3 hover:bg-salem-dark-blue-500 hover:text-white border-salem-dark-blue-500 text-salem-dark-blue-500">
                    الأخبار
                </a>
                <a href="#"
                    class="px-2 py-2 text-lg font-medium truncate transition-all duration-150 ease-linear border-2 rounded-lg lg:px-3 hover:bg-salem-dark-blue-500 hover:text-white border-salem-dark-blue-500 text-salem-dark-blue-500">
                    مكتبة الصور
                </a>
                <a href="#"
                    class="px-2 py-2 text-lg font-medium truncate transition-all duration-150 ease-linear border-2 rounded-lg lg:px-3 hover:bg-salem-dark-blue-500 hover:text-white border-salem-dark-blue-500 text-salem-dark-blue-500">
                    الفيديوهات

                </a>

                <a href="{{route('media-center')}}"
                    class="px-2 py-2 text-lg font-medium text-white truncate transition-all duration-150 ease-linear border-2 rounded-lg lg:px-3 lg:hidden border-salem-dark-blue-500 text-end w-fit bg-salem-dark-blue-500 hover:bg-salem-dark-blue-600">

                    <p class="truncate"> عرض الجميع </p>
                </a>
            </div>
        </div>

        <h1 class="mt-10 text-5xl font-semibold text-center lg:mt-0 text-salem-dark-blue-500 " data-aos="fade-up"
            data-aos-once="true" data-aos-delay="0" data-aos-duration="500">
            المركز الإعلامي
        </h1>

        <div class="hidden col-span-1 lg:inline-block ">
            <a href="{{route('media-center')}}"
                class="float-left px-3 py-2 text-lg font-medium text-white transition-all duration-150 ease-linear border-2 rounded-lg border-salem-dark-blue-500 text-end w-fit bg-salem-dark-blue-500 hover:bg-salem-dark-blue-600">

                عرض الجميع
            </a>
        </div>

    </div>
    <div class="grid grid-cols-1 gap-5 px-10 lg:gap-10 lg:px-20 md:grid-cols-2 lg:grid-cols-3 ">

        <x-commun.media-center-card imgsrc="{{Vite::asset('resources/images/salem-hero-image.jpg')}}"
            imgalt=" في اطار تعزيز التواصل و التعاون" title=" في اطار تعزيز التواصل و التعاون" datetime="06 سبتمبر 2023"
            description=" زيارة الدكتور سالم بن علي آل بغية العجمي الى الهيئة
    العامة
    للعقار
    من اجل تعزيز" />
        <x-commun.media-center-card imgsrc="{{Vite::asset('resources/images/salem-hero-image.jpg')}}"
            imgalt=" في اطار تعزيز التواصل و التعاون" title=" في اطار تعزيز التواصل و التعاون" datetime="06 سبتمبر 2023"
            description=" زيارة الدكتور سالم بن علي آل بغية العجمي الى الهيئة
        العامة
        للعقار
        من اجل تعزيز" />
        <x-commun.media-center-card imgsrc="{{Vite::asset('resources/images/salem-hero-image.jpg')}}"
            imgalt=" في اطار تعزيز التواصل و التعاون" title=" في اطار تعزيز التواصل و التعاون" datetime="06 سبتمبر 2023"
            description=" زيارة الدكتور سالم بن علي آل بغية العجمي الى الهيئة
        العامة
        للعقار
        من اجل تعزيز" />
        <x-commun.media-center-card imgsrc="{{Vite::asset('resources/images/salem-hero-image.jpg')}}"
            imgalt=" في اطار تعزيز التواصل و التعاون" title=" في اطار تعزيز التواصل و التعاون" datetime="06 سبتمبر 2023"
            description=" زيارة الدكتور سالم بن علي آل بغية العجمي الى الهيئة
        العامة
        للعقار
        من اجل تعزيز" />
        <x-commun.media-center-card imgsrc="{{Vite::asset('resources/images/salem-hero-image.jpg')}}"
            imgalt=" في اطار تعزيز التواصل و التعاون" title=" في اطار تعزيز التواصل و التعاون" datetime="06 سبتمبر 2023"
            description=" زيارة الدكتور سالم بن علي آل بغية العجمي الى الهيئة
        العامة
        للعقار
        من اجل تعزيز" />
        <x-commun.media-center-video-card />
        <x-commun.media-center-video-card />
        <x-commun.media-center-video-card />
    </div>

</section>