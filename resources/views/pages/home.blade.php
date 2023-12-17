@extends('layouts.app')
@section('title',"Salem")
@use(App\Enums\ItemsNavEnum)
@section('body')
<x-commun.navbar :activepage="ItemsNavEnum::HOME" />
<div class="pt-20"></div>
<section id="hero-section" class="relative overflow-hidden h-[42rem] -z-10 flex items-center">
    <div class="absolute z-0 w-full h-full bg-salem-dark-blue-600/90"></div>
    <img class="absolute z-[-1] h-fit" src="{{Vite::asset('resources/images/salem-hero-image.jpg')}}" alt="">

    <div class="w-2/5 z-[1] ps-20">
        <h1 class="text-[3.5rem] font-semibold text-salem-yellow-500">
            سالم بن علي بن بغيّه العجمي
        </h1>
        <p class="pt-10 text-[1.25rem] text-white line-clamp-2 ">
            رجل الاعمال / الاستاذ سالم بن علي بن بغيّه العجمي من مواليد مدينة نجران عام 1972 م
            بالمملكة العربية السعودية، نشأ وترعرع في قبيلة يام اذ يعد الابن الخامس علي بن سعيد

        </p>
    </div>
</section>


@endsection