@extends('layouts.app')
@section('title',"سالم عن قرب")
@use(App\Enums\ItemsNavEnum)

@section('body')
<x-commun.navbar :activepage="ItemsNavEnum::ACHIEVEMENTS" />

<x-blocks.simple-page.hero title="الأعمال والإنجازات"
    imageurl="{{Vite::asset('resources/images/salem-hero-image-2.jpg')}}" />

<article class="min-h-fit lg:min-h-screen px-10 lg:px-20 py-[3.75rem]">

    <h3 class="text-[25px] font-semibold text-salem-dark-blue-500" data-aos-once="true" data-aos="fade-up"
        data-aos-delay="0" data-aos-duration="500">

        أعمال و إنجازات سالم بن علي بن بغيّه العجمي:

    </h3>
    <p class="text-base text-[#333]" data-aos-once="true" data-aos="fade-up" data-aos-delay="0" data-aos-duration="500">
        - يعتبر من اكبر الخبرات لرجال الاعمال في مجال تحصيل الديون لدى جهات التمويل حيث يشغل منصب العضو المنتدب لشركة
        مرسوم لتحصيل الديون و تعتبر احدى اكبر شركات التحصيل على مستوى المملكة ، كما ان سالم العجمي يملك العديد من
        الشركات في عدة مجالات مختلفة منها المقاولات ، التجارة الالكترونية ، الأدوات الطبية ، تجارة السيارات ، العقارات
        وتجارة التجزئة وعدة مجالات أخرى .
    </p>
    <p class="text-base text-[#333]" data-aos-once="true" data-aos="fade-up" data-aos-delay="0" data-aos-duration="500">
        اشتهر سالم العجمي بالدور المجتمعي والقبلي باعتباره احد وجهاء قبيلة يام ودوره البارز في عقد اتفاقيات الصلح والعفو
        بين افراد القبيلة والقبائل المجاورة
    </p>
    <p class="text-base text-[#333]" data-aos-once="true" data-aos="fade-up" data-aos-delay="0" data-aos-duration="500">
        - كما اشتهر سالم العجمي بدعمه للأنشطة الرياضية المحلية في مدينة نجران حيث يعتبر العضو الذهبي لنادي نجران الرياضي
        ونادي الاخدود الرياضي وايضأ رعاية للمناسبات الرياضات الأخرى كان اخرها رعاية الحفل الختامي لمهرجان الفروسية في
        نجران .
    </p>
    <p class="text-base text-[#333]" data-aos-once="true" data-aos="fade-up" data-aos-delay="0" data-aos-duration="500">
        - كما اشتهر سالم العجمي بدعم الجمعيات الخيرية والاعمال الإنسانية كما يعتبر عضو فعال ونشط في عدد من الجمعيات
        الخيرية أهمها : جمعية شآبيب رحمة و جمعية احسان القانونية وجمعية كفاءة .
    </p>
</article>

<x-commun.footer />

@endsection