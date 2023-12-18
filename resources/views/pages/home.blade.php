@extends('layouts.app')
@section('title',"Salem")
@use(App\Enums\ItemsNavEnum)
@push("head")
<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
@endpush
@section('body')
<x-commun.navbar :activepage="ItemsNavEnum::HOME" />
<div class="pt-20"></div>

<x-blocks.home.hero />

<x-blocks.home.voting-program />

<x-blocks.home.salem-for-humanity />

<x-blocks.home.salem-tweets />

<section id="testimonies" class="h-screen">
    <div class="relative w-full ">


        <div id="default-carousel" class="w-[70vw] mx-auto" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-56 overflow-hidden rounded-lg md:h-80">
                <x-icons.pattern class="absolute left-0 z-50" />
                <!-- Item 1 -->
                <div class="hidden py-10 duration-700 ease-in-out bg-salem-dark-blue-500" data-carousel-item>
                    <div class="relative flex flex-col items-center gap-4 ">
                        <img class="w-24 h-24 rounded-full" src="{{Vite::asset('resources/images/image.png')}}" alt="">
                        <x-icons.quote class="absolute top-20" />
                        <p class="mt-10 text-lg text-center text-white px-28 line-clamp-2">
                            “هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص
                            العربى،
                            حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى
                            يولدها
                            التطبيق..”
                        </p>
                    </div>

                </div>
                <!-- Item 2 -->
                <div class="hidden py-10 duration-700 ease-in-out bg-salem-dark-blue-500" data-carousel-item>
                    <div class="relative flex flex-col items-center gap-4 ">
                        <img class="w-24 h-24 rounded-full" src="{{Vite::asset('resources/images/image.png')}}" alt="">
                        <x-icons.quote class="absolute top-20" />
                        <p class="mt-10 text-lg text-center text-white px-28 line-clamp-2">
                            “هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص
                            العربى،
                            حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى
                            يولدها
                            التطبيق..”
                        </p>
                    </div>
                </div>
                <!-- Item 3 -->
                <div class="hidden py-10 duration-700 ease-in-out bg-salem-dark-blue-500" data-carousel-item>
                    <div class="relative flex flex-col items-center gap-4 ">
                        <img class="w-24 h-24 rounded-full" src="{{Vite::asset('resources/images/image.png')}}" alt="">
                        <x-icons.quote class="absolute top-20" />
                        <p class="mt-10 text-lg text-center text-white px-28 line-clamp-2">
                            “هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص
                            العربى،
                            حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى
                            يولدها
                            التطبيق..”
                        </p>
                    </div>
                </div>
                <!-- Item 4 -->
                <div class="hidden py-10 duration-700 ease-in-out bg-salem-dark-blue-500" data-carousel-item>
                    <div class="relative flex flex-col items-center gap-4 ">
                        <img class="w-24 h-24 rounded-full" src="{{Vite::asset('resources/images/image.png')}}" alt="">
                        <x-icons.quote class="absolute top-20" />
                        <p class="mt-10 text-lg text-center text-white px-28 line-clamp-2">
                            “هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص
                            العربى،
                            حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى
                            يولدها
                            التطبيق..”
                        </p>
                    </div>
                </div>
                <!-- Item 5 -->
                <div class="hidden py-10 duration-700 ease-in-out bg-salem-dark-blue-500" data-carousel-item>
                    <div class="relative flex flex-col items-center gap-4 ">
                        <img class="w-24 h-24 rounded-full" src="{{Vite::asset('resources/images/image.png')}}" alt="">
                        <x-icons.quote class="absolute top-20" />
                        <p class="mt-10 text-lg text-center text-white px-28 line-clamp-2">
                            “هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص
                            العربى،
                            حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى
                            يولدها
                            التطبيق..”
                        </p>
                    </div>
                </div>
            </div>
            <!-- Slider indicators -->
            {{-- <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2 rtl:space-x-reverse">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                    data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                    data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                    data-carousel-slide-to="2"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                    data-carousel-slide-to="3"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                    data-carousel-slide-to="4"></button>
            </div> --}}
            <!-- Slider controls -->
            <button type="button"
                class="absolute top-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer start-0 group focus:outline-none"
                data-carousel-prev>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-salem-dark-blue-500">
                    <x-icons.chevron-right class="stroke-white" />
                </span>
            </button>
            <button type="button"
                class="absolute top-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer end-0 group focus:outline-none"
                data-carousel-next>
                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-salem-dark-blue-500">
                    <x-icons.chevron-left class="stroke-white" />
                </span>

            </button>
        </div>


    </div>
</section>


<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>



@endsection