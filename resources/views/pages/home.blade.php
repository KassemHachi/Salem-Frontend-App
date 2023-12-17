@extends('layouts.app')
@section('title',"Salem")
@use(App\Enums\ItemsNavEnum)
@section('body')
<x-commun.navbar :activepage="ItemsNavEnum::HOME" />
<div class="pt-20"></div>

<x-blocks.home.hero />

<x-blocks.home.voting-program />

<section id="salem-for-humanity" class="relative h-screen px-20 overflow-hidden">
    <div class="w-1/2 h-full pt-20 ">
        <h1 class="text-5xl font-semibold text-white text-start">
            سالم للإنسانية</h1>
        <h2 class="mt-2 text-[1.75rem] font-semibold text-white">
            العنوان
        </h2>
        <p class="mt-2 text-2xl font-medium text-white">
            رجل الاعمال الاستاذ / سالم العجمي العديد من المساهمات المجتمعية و الانسانية من خلال دعمه المستمر للمناشط
            المجتمعية و للجمعيات الخيرية و قضايا الصلح و التسامح و غيرها من انشطة البر و الاحسان.
        </p>
        <a href="#"
            class="block px-3 py-1 mt-5 text-base font-normal text-white transition-all duration-150 ease-linear border-2 border-white rounded-lg cursor-pointer hover:border-salem-yellow-500 w-fit hover:bg-salem-yellow-500 hover:text-white">
            المزيد
        </a>
    </div>
    <img src="{{Vite::asset('resources/images/salem-for-humanity-image.jpg')}}" class="absolute inset-0 z-[-2]" alt="">
    <div
        class="absolute inset-0 z-[-1] bg-gradient-to-t from-salem-yellow-500/70 via-salem-yellow-500/0 to-salem-yellow-500/0">
    </div>
    <div class="absolute inset-0 z-[-2] bg-salem-dark-blue-500/50"></div>

</section>

@endsection