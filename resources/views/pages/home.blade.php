@extends('layouts.app')
@section('title',"Salem")
@use(App\Enums\ItemsNavEnum)
@section('body')
<x-commun.navbar :activepage="ItemsNavEnum::HOME" />
<div class="pt-20"></div>

<x-blocks.home.hero />

<x-blocks.home.voting-program />

<x-blocks.home.salem-for-humanity />

<section id="tweets" class="p-20">
    <div class="grid grid-cols-4 ">
        <div
            class="relative col-span-1 overflow-hidden rounded-lg shadow-2xl cursor-pointer group shadow-salem-yellow-100 h-96">
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
                <h2 class="text-2xl font-semibold text-salem-dark-blue-500">سالم بن بغيّه العجمي </h2>
                <div class="flex items-center justify-end gap-1" style="direction: ltr">
                    <x-icons.user-square />
                    <a class=" text-salem-yellow-500" href="#twtter_user">{{"@alajmi_info"}}</a>
                </div>
                <p style="" class="text-sm text-salem-dark-blue-300 line-clamp-5">
                    استقبل رئيس مجلس الادراة رجل الأعمال / سالم بن علي آل بغية العجمي. واطلع العجمي " على
                    منجزات الجمعية ومسيرتها في خدمة الأسر الأشد حاجة " ومطلعاًً على اهم مشاريع الجمعية وخاصة "مشروع
                    تقديم الدعم القانوني والاستشاري وحوكمة مشاريع اللجنة النسائية للتنمية المجتمعية…
                </p>
                <div class="flex gap-3 mt-6 flex-start">
                    <div class="flex items-center gap-1">
                        <x-icons.heart />
                        <span class="text-base">522</span>
                    </div>
                    <div class="flex items-center gap-1">
                        <x-icons.retweet />
                        <span class="text-base">113</span>
                    </div>
                </div>

            </div>
            <div
                class="absolute z-20 flex items-center transition-all duration-500  gap-2 left-3 group-hover:left-[calc(50%-3.5rem)] bottom-3 group-hover:bottom-[calc(50%-2rem)]">
                <span
                    class="text-base font-medium transition-all duration-500 text-salem-dark-blue-500 group-hover:text-white">التغريدة</span>
                <div
                    class="px-4 py-3 transition-all duration-500 rounded-full bg-salem-yellow-500 group-hover:bg-white">
                    <x-icons.chevron-left
                        class="transition-all duration-500 stroke-white group-hover:stroke-salem-yellow-500" />
                </div>

            </div>
        </div>
    </div>
</section>

@endsection