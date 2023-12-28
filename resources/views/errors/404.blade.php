@extends('layouts.app')
@section('title',"سالم عن قرب")
@use(App\Enums\ItemsNavEnum)

@section('body')
<x-commun.navbar />
<x-blocks.simple-page.hero title="الصفحة غير موجودة 404!" imageurl="{{asset('images/salem-hero-image-2.jpg')}}" />

<article class="min-h-fit  lg:min-h-screen px-10 lg:px-20 py-[3.75rem]">

    <h3 class="text-[25px] font-semibold text-salem-dark-blue-500" data-aos-once="true" data-aos="fade-up"
        data-aos-delay="0" data-aos-duration="500">

        عذرا لم يتم العثور على الصفحة

    </h3>
    <p class="text-base text-[#333] mt-4" data-aos-once="true" data-aos="fade-up" data-aos-delay="0"
        data-aos-duration="500">
        عذراً، لم يتم العثور على الصفحة التي تبحث عنها. قد يكون هناك خطأ في الرابط أو قد تكون الصفحة غير متاحة حاليًا.
        يُرجى التحقق من الرابط المدخل أو المحاولة مرة أخرى في وقت لاحق. في حال استمرار المشكلة، يمكنك الاتصال بفريق
        الدعم الفني للمساعدة. نعتذر عن أي إزعاج قد يسببه هذا الأمر ونشكرك على صبرك وتفهمك.
    </p>
    <a data-aos-once="true" data-aos="fade-up" data-aos-delay="0" data-aos-duration="500"
        class="text-base underline text-salem-yellow-500" href="{{route('home')}}">عودة الى الصفحة الرئيسية</a>
</article>

<x-commun.footer />

@endsection