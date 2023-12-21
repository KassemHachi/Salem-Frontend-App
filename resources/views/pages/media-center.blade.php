@extends('layouts.app')
@section('title',"سالم عن قرب")
@use(App\Enums\ItemsNavEnum)

@section('body')
<x-commun.navbar :activepage="ItemsNavEnum::MEDIA_CENTER" />
<x-blocks.simple-page.hero title="مركز الإعلام" imageurl="{{Vite::asset('resources/images/salem-hero-image-2.jpg')}}" />

<main class="min-h-fit lg:min-h-screen px-10 lg:px-20 py-[3.75rem]">
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

            </div>
        </div>


    </div>
    <div class="grid grid-cols-1 gap-5 px-10 lg:gap-10 lg:px-20 md:grid-cols-2 lg:grid-cols-3 ">
        <x-commun.media-center-card />
        <x-commun.media-center-card />
        <x-commun.media-center-card />
        <x-commun.media-center-card />
        <x-commun.media-center-card />
        <x-commun.media-center-video-card />
        <x-commun.media-center-video-card />
        <x-commun.media-center-video-card />
    </div>
</main>

<x-commun.footer />

@endsection