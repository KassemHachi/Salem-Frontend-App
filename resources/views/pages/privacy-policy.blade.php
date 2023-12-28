@extends('layouts.app')
@section('title',"سالم عن قرب")
@use(App\Enums\ItemsNavEnum)

@section('body')
<x-commun.navbar :activepage="ItemsNavEnum::SALEM" />
<x-blocks.simple-page.hero title="سياسة الخصوصية" imageurl="{{asset('images/salem-hero-image-2.jpg')}}" />

<article class="min-h-fit lg:min-h-screen px-10 lg:px-20 py-[3.75rem]">
    <h3 class="text-[25px] font-semibold text-salem-dark-blue-500" data-aos-once="true" data-aos="fade-up"
        data-aos-delay="0" data-aos-duration="500">

        سياسة الخصوصية لموقع سالم:

    </h3>
    <p class="text-base text-[#333]" data-aos-once="true" data-aos="fade-up" data-aos-delay="0" data-aos-duration="500">
        تم آخر تحديث: <br>
        نحن في موقع سالم نولي أهمية كبيرة لحماية خصوصية زوارنا ومستخدمي موقعنا الإلكتروني. تعرض هذه السياسة كيفية جمعنا
        واستخدامنا وحماية معلوماتك الشخصية. باستخدام موقعنا، فإنك توافق على شروط هذه السياسة.
    </p>
    <br>
    <h4 class="text-[20px] font-semibold text-salem-dark-blue-500" data-aos-once="true" data-aos="fade-up"
        data-aos-delay="0" data-aos-duration="500">

        1. المعلومات التي نقوم بجمعها:


    </h4>

    <p class="text-base text-[#333]" data-aos-once="true" data-aos="fade-up" data-aos-delay="0" data-aos-duration="500">
        <strong>معلومات شخصية:</strong> <br>
        نقوم بجمع المعلومات التي تقدمها لنا عند التسجيل أو عند استخدامك لخدماتنا، مثل الاسم وعنوان البريد الإلكتروني.
    </p>
    <p class="text-base text-[#333]" data-aos-once="true" data-aos="fade-up" data-aos-delay="0" data-aos-duration="500">
        <strong>معلومات تلقائية:</strong> <br>
        نقوم بجمع معلومات تلقائية عند استخدامك للموقع، مثل عنوان IP ونوع المتصفح ونظام التشغيل.
    </p>
    <br>
    <h4 class="text-[20px] font-semibold text-salem-dark-blue-500" data-aos-once="true" data-aos="fade-up"
        data-aos-delay="0" data-aos-duration="500">

        2. كيف نستخدم المعلومات:


    </h4>

    <p class="text-base text-[#333]" data-aos-once="true" data-aos="fade-up" data-aos-delay="0" data-aos-duration="500">

        نستخدم المعلومات لتحسين تجربتك على الموقع، وتخصيص المحتوى والإعلانات، وتحليل الاستخدامات والأنماط.
    </p>
    <br>
    <h4 class="text-[20px] font-semibold text-salem-dark-blue-500" data-aos-once="true" data-aos="fade-up"
        data-aos-delay="0" data-aos-duration="500">

        3. مشاركة المعلومات:


    </h4>

    <p class="text-base text-[#333]" data-aos-once="true" data-aos="fade-up" data-aos-delay="0" data-aos-duration="500">

        نحن لا نبيع أو نشارك معلوماتك الشخصية مع أطراف ثالثة دون موافقتك، إلا في حالات محددة تتطلبها القوانين.
    </p>

    <br>
    <h4 class="text-[20px] font-semibold text-salem-dark-blue-500" data-aos-once="true" data-aos="fade-up"
        data-aos-delay="0" data-aos-duration="500">

        4. حماية المعلومات:

    </h4>

    <p class="text-base text-[#333]" data-aos-once="true" data-aos="fade-up" data-aos-delay="0" data-aos-duration="500">
        نتخذ إجراءات أمان لحماية معلوماتك الشخصية وتأمينها ضد الوصول غير المصرح به أو الاستخدام أو التغيير.
    </p>
    <br>
    <h4 class="text-[20px] font-semibold text-salem-dark-blue-500" data-aos-once="true" data-aos="fade-up"
        data-aos-delay="0" data-aos-duration="500">

        5. روابط إلى مواقع أخرى:

    </h4>

    <p class="text-base text-[#333]" data-aos-once="true" data-aos="fade-up" data-aos-delay="0" data-aos-duration="500">
        قد يحتوي موقعنا على روابط إلى مواقع أخرى. نحن غير مسؤولين عن ممارسات الخصوصية على تلك المواقع.

    </p>
    <br>
    <h4 class="text-[20px] font-semibold text-salem-dark-blue-500" data-aos-once="true" data-aos="fade-up"
        data-aos-delay="0" data-aos-duration="500">

        6. تغييرات في سياسة الخصوصية:

    </h4>

    <p class="text-base text-[#333]" data-aos-once="true" data-aos="fade-up" data-aos-delay="0" data-aos-duration="500">
        نحتفظ بحقنا في تحديث أو تغيير هذه السياسة في أي وقت. يتم نشر أي تغييرات على هذه الصفحة.

        للاتصال بنا بشأن أسئلة الخصوصية
        <a href="/#contact-us">اضغط هنا</a>
        .
    </p>

</article>

<x-commun.footer />

@endsection