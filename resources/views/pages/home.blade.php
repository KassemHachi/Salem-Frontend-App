@extends('layouts.app')
@section('title',"Salem")
@use(App\Enums\ItemsNavEnum)

@section('body')
<x-commun.navbar :activepage="ItemsNavEnum::HOME" />
<div class="pt-20"></div>

<x-blocks.home.hero />

<x-blocks.home.voting-program />

<x-blocks.home.salem-for-humanity />

<x-blocks.home.salem-tweets />

<x-blocks.home.testimonies />

<x-blocks.home.media-center />


<x-blocks.home.contact-us />

<footer class="relative bg-salem-dark-blue-500 overflow-hidden h-[26rem] z-0 px-20">
    <div class="flex gap-20 pt-28">
        <div class="w-full">
            <x-commun.logo class="h-20 fill-white" />
            <p class="font-normal text-white">
                رجل الاعمال / الاستاذ سالم بن علي بن بغيّه العجمي من مواليد مدينة نجران عام 1972 م بالمملكة العربية
                السعودية
            </p>
        </div>
        <div class="flex flex-col justify-between w-full gap-3">
            <h3 class="text-lg font-medium text-white">
                روابط سريعة
            </h3>
            <ul class="grid grid-cols-4 gap-4 text-white">
                <a href="#">
                    <li>الرئيسية</li>
                </a>
                <a href="#">
                    <li>سالم عن قرب</li>
                </a>
                <a href="#">
                    <li>الأعمال والإنجازات</li>
                </a>
                <a href="#">
                    <li>البرنامج الإنتخابي</li>
                </a>
                <a href="#">
                    <li>تواصل معنا</li>
                </a>
                <a href="">
                    <li>سياسية الخصوصية</li>
                </a>
                <a href="#">
                    <li>الأسئلة الشائعة</li>
                </a>
                <a href="#">
                    <li>الدعم الفني</li>
                </a>










            </ul>
        </div>

    </div>
    <hr class="my-10 border-white/40">
    <div class="flex justify-between">
        <div class="flex items-center gap-5 ">
            <h1 class="text-white">حقوق التأليف والنشر © 2024 سالم العجمي - جميع الحقوق محفوظة | تصميم و تطوير</h1>
            <x-commun.soitc-logo class="pb-1" />
        </div>
        <div class="flex gap-8">
            <a href="#instagram">
                <x-icons.instagram class="fill-white" />
            </a>
            <a href="#facebook">
                <x-icons.facebook class="fill-white" />
            </a>
            <a href="#twitter">
                <x-icons.twitter class="fill-white" />
            </a>
            <a href="#youtube">
                <x-icons.youtube class="fill-white" />
            </a>
        </div>
    </div>
    <svg class=" absolute right-0 -z-[1] -top-1/4 h-80" viewBox="0 0 174 475" fill="none"
        xmlns="http://www.w3.org/2000/svg">
        <rect width="307.664" height="386.872" rx="20"
            transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 483.591 209.547)" fill="#C1A661" />
    </svg>
    <x-icons.palatte-element class="absolute right-0 bottom-0 -z-[1] h-80 w-fit" />
</footer>
@endsection