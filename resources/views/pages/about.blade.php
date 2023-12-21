@extends('layouts.app')
@section('title',"Salem")
@use(App\Enums\ItemsNavEnum)

@section('body')
<x-commun.navbar :activepage="ItemsNavEnum::SALEM" />
<div class="pt-24 lg:pt-20"></div>
<section class="relative min-h-[24rem] lg:min-h-[589px] bg-cover" style="background: url('')">

    <img src="{{Vite::asset('resources/images/salem-hero-image.jpg')}}" alt=""
        class="absolute object-cover w-full h-full blur-[1px]">
    <div class="absolute inset-0 z-0 bg-white/70"></div>
    <div class="absolute top-0 z-10 flex items-center h-full px-10 lg:px-20 start-0">
        <h2 class="text-[45px] font-semibold text-salem-dark-blue-500" data-aos="fade-up" data-aos-delay="0"
            data-aos-duration="500">
            سالم بن علي بن بغيّه العجمي
        </h2>
    </div>
    <svg class=" absolute right-0 z-[1] -top-[10%] h-60 lg:h-96" viewBox="0 0 174 475" fill="none"
        xmlns="http://www.w3.org/2000/svg">
        <rect width="307.664" height="386.872" rx="20"
            transform="matrix(-0.707107 -0.707107 -0.707107 0.707107 483.591 209.547)" fill="#C1A661" />
    </svg>
    <x-icons.palatte-element class="absolute right-0 top-[15%] z-[1] h-60 lg:h-96 w-fit" />


</section>

<article class="min-h-fit lg:min-h-screen px-10 lg:px-20 py-[3.75rem]">

    <h3 class="text-[25px] font-semibold text-salem-dark-blue-500" data-aos-once="true" data-aos="fade-up"
        data-aos-delay="0" data-aos-duration="500">

        من هو سالم بن علي بن بغيّه العجمي:

    </h3>
    <p class="text-base text-[#333]" data-aos-once="true" data-aos="fade-up" data-aos-delay="0" data-aos-duration="500">
        <br> رجل الاعمال / الاستاذ سالم بن علي بن بغيّه العجمي من مواليد مدينة نجران عام 1972 م – المملكة العربية
        السعودية
        <br> نشأ وترعرع في قبيلة يام اذ يعد الابن الخامس للشيخ علي بن سعيد آل بغيّه العجمي حصل على شهادة الدبلوم في
        المحاسبة
        و عدة دورات متخصصة في مجال ادارة الاعمال
        <br> بدأ الاستاذ / سالم بن علي بن بغيّه العجمي أعماله التجارية في مدينة
        <br> الرياض منذ العام 1990 م و مارس الاعمال و المشاريع التجارية المختلفة حتى اصبح احد كبار رجال الاعمال على
        مستوى
        المملكة
    </p>
</article>

<x-commun.footer />

@endsection