<section id="hero-section" class="relative z-0 flex items-center overflow-hidden">
    <div id="heroSlider" class="relative w-full" data-te-carousel-init data-te-ride="carousel">
        <!--Carousel indicators-->
        <style>
            #indicators-hero button[data-te-carousel-active] {
                background-color: rgb(193 166 97)
            }
        </style>
        <div class="absolute flex flex-col items-center gap-5  bottom-2 z-[2] start-[calc(50%-18px)] ">
            <div id="indicators-hero" class="flex justify-center gap-3 p-0 list-none " data-te-carousel-indicators>
                <button type="button" data-te-target="#heroSlider" data-te-slide-to="2"
                    class="  w-2.5 h-2.5 rounded-full  cursor-pointer border-0 order-solid bg-white/80 active:bg-salem-yellow-500 bg-clip-padding p-0 -indent-[999px]  transition-colors duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
                    aria-label="Slide 3"></button>

                <button type="button" data-te-target="#heroSlider" data-te-slide-to="1"
                    class="  w-2.5 h-2.5 rounded-full  cursor-pointer border-0 order-solid bg-white/80 active:bg-salem-yellow-500 bg-clip-padding p-0 -indent-[999px]  transition-colors duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
                    aria-label="Slide 2"></button>
                <button type="button" data-te-target="#heroSlider" data-te-slide-to="0" data-te-carousel-active
                    class="  w-2.5 h-2.5 rounded-full  cursor-pointer border-0 order-solid bg-white/80 active:bg-salem-yellow-500 bg-clip-padding p-0 -indent-[999px]  transition-colors duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
                    aria-current="true" aria-label="Slide 1"></button>
            </div>

            <x-icons.chevron-down class="w-8 h-8 stroke-white animate-bounce me-0.5" />
        </div>



        <!--Carousel items-->
        <div class="relative w-full overflow-hidden after:clear-both after:block after:content-['']">
            <!--First item-->
            <div class="relative float-left h-80 lg:h-full -mr-[100%] w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
                data-te-carousel-active data-te-carousel-item style="backface-visibility: hidden">
                <div class="absolute z-0 w-full h-full bg-salem-dark-blue-600/90"></div>
                <img src="{{Vite::asset('resources/images/salem-hero-image-2.jpg')}}" class="object-cover w-full h-full"
                    alt="سالم بن علي بن بغيّه العجمي" />
                <div
                    class="absolute w-3/4 lg:w-1/2 inset-x-5 lg:inset-x-[5rem] bottom-[15%]  lg:bottom-[20%]  py-5 text-center text-white md:block">
                    <h1 class="text-[3.125rem] font-semibold text-start text-salem-yellow-500" data-aos="fade-up"
                        data-aos-delay="0" data-aos-duration="500">
                        سالم بن علي بن بغيّه العجمي
                    </h1>
                    <p class="mt-10  text-[1.25rem] text-white text-start line-clamp-2 " data-aos="fade-up"
                        data-aos-delay="10" data-aos-duration="700">
                        رجل الاعمال / الاستاذ سالم بن علي بن بغيّه العجمي من مواليد مدينة نجران عام 1972 م
                        بالمملكة العربية السعودية، نشأ وترعرع في قبيلة يام اذ يعد الابن الخامس علي بن سعيد

                    </p>
                    <a href="#"
                        class="block text-lg h-10 px-3 py-1.5 mt-5  font-medium transition-all duration-150 ease-linear border-2 rounded-lg cursor-pointer w-fit hover:bg-salem-yellow-500 hover:text-white border-salem-yellow-500 text-salem-yellow-500">

                        سالم عن قرب
                    </a>
                </div>
            </div>
            <!--Second item-->
            <div class="relative float-left h-80 lg:h-full -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
                data-te-carousel-item style="backface-visibility: hidden">
                <div class="absolute z-0 w-full h-full bg-salem-dark-blue-600/90"></div>
                <img src="{{Vite::asset('resources/images/salem-hero-image.jpg')}}" class="object-cover w-full h-full"
                    alt="سالم بن علي بن بغيّه العجمي" />
                <div
                    class="absolute w-3/4 lg:w-1/2 inset-x-5 lg:inset-x-[5rem] bottom-[15%]  lg:bottom-[20%]  py-5 text-center text-white md:block">
                    <h1 class="text-[3.125rem] font-semibold text-start text-salem-yellow-500" data-aos="fade-up"
                        data-aos-delay="0" data-aos-duration="500">
                        سالم بن علي بن بغيّه العجمي
                    </h1>
                    <p class="mt-10  text-[1.25rem] text-white text-start line-clamp-2 " data-aos="fade-up"
                        data-aos-delay="10" data-aos-duration="700">
                        رجل الاعمال / الاستاذ سالم بن علي بن بغيّه العجمي من مواليد مدينة نجران عام 1972 م
                        بالمملكة العربية السعودية، نشأ وترعرع في قبيلة يام اذ يعد الابن الخامس علي بن سعيد

                    </p>
                    <a href="#"
                        class="block text-lg h-10 px-3 py-1.5 mt-5  font-medium transition-all duration-150 ease-linear border-2 rounded-lg cursor-pointer w-fit hover:bg-salem-yellow-500 hover:text-white border-salem-yellow-500 text-salem-yellow-500">

                        سالم عن قرب
                    </a>
                </div>
            </div>
            <!--Third item-->
            <div class="relative float-left h-80 lg:h-full -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none"
                data-te-carousel-item style="backface-visibility: hidden">
                <div class="absolute z-0 w-full h-full bg-salem-dark-blue-600/90"></div>
                <img src="{{Vite::asset('resources/images/salem-hero-image.jpg')}}" class="object-cover w-full h-full"
                    alt="سالم بن علي بن بغيّه العجمي" />
                <div
                    class="absolute w-3/4 lg:w-1/2 inset-x-5 lg:inset-x-[5rem] bottom-[15%]  lg:bottom-[20%]  py-5 text-center text-white md:block">
                    <h1 class="text-[3.125rem] font-semibold text-start text-salem-yellow-500" data-aos="fade-up"
                        data-aos-delay="0" data-aos-duration="500">
                        سالم بن علي بن بغيّه العجمي
                    </h1>
                    <p class="mt-10 text-[1.25rem] text-white text-start line-clamp-2 " data-aos="fade-up"
                        data-aos-delay="10" data-aos-duration="700">
                        رجل الاعمال / الاستاذ سالم بن علي بن بغيّه العجمي من مواليد مدينة نجران عام 1972 م
                        بالمملكة العربية السعودية، نشأ وترعرع في قبيلة يام اذ يعد الابن الخامس علي بن سعيد

                    </p>
                    <a href="#"
                        class="block text-lg h-10 px-3 py-1.5 mt-5  font-medium transition-all duration-150 ease-linear border-2 rounded-lg cursor-pointer w-fit hover:bg-salem-yellow-500 hover:text-white border-salem-yellow-500 text-salem-yellow-500">

                        سالم عن قرب
                    </a>
                </div>
            </div>
        </div>


    </div>

    {{-- <div class="w-1/2 z-[1] ps-20">
        <h1 class="text-[3.5rem] font-semibold text-salem-yellow-500">
            سالم بن علي بن بغيّه العجمي
        </h1>
        <p class="mt-10 text-[1.25rem] text-white line-clamp-2 ">
            رجل الاعمال / الاستاذ سالم بن علي بن بغيّه العجمي من مواليد مدينة نجران عام 1972 م
            بالمملكة العربية السعودية، نشأ وترعرع في قبيلة يام اذ يعد الابن الخامس علي بن سعيد

        </p>
        <a href="#"
            class="block h-12 px-3 py-2 mt-5 text-base font-semibold transition-all duration-150 ease-linear border-2 rounded-lg cursor-pointer w-fit hover:bg-salem-yellow-500 hover:text-white border-salem-yellow-500 text-salem-yellow-500">

            سالم عن قرب
        </a>
    </div>
    <div class="absolute z-0 w-full h-full bg-salem-dark-blue-600/90"></div>
    <img class="absolute z-[-1] h-fit" src="{{Vite::asset('resources/images/salem-hero-image.jpg')}}" alt="">
    --}}

</section>