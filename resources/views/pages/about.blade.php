@extends('layouts.app')
@section('title',"Salem")
@use(App\Enums\ItemsNavEnum)

@section('body')
<x-commun.navbar :activepage="ItemsNavEnum::SALEM" />
<x-blocks.simple-page.hero title="سالم بن علي بن بغيّه العجمي"
    imageurl="{{Vite::asset('resources/images/salem-hero-image-2.jpg')}}" />

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