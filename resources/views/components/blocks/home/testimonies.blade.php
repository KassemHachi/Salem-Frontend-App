<section id="testimonies" class="py-20 bg-[#fbf7f3]">
    <x-ui.heading.two data-aos="fade-up" data-aos-once="true" data-aos-delay="0" data-aos-duration="500"
        class="my-20 text-center lg:mt-0 ">
        ماذا قالو عن سالم
    </x-ui.heading.two>
    <div class="relative w-full ">
        <x-ui.carousel.container>
            <div
                class="relative rounded-lg bg-salem-dark-blue-500 overflow-hidden h-full after:clear-both after:block after:content-['']">

                <x-ui.carousel.item :active="true" description="
                هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص
                العربى،
                حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى
                يولدها
                " imgsrc="{{asset('images/image.png')}}" />

                <x-ui.carousel.item description="
            هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص
            العربى،
            حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى
            يولدها
            " imgsrc="{{asset('images/image.png')}}" />


                <x-ui.carousel.item description="
            هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص
            العربى،
            حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى
            يولدها
            " imgsrc="{{asset('images/image.png')}}" />
            </div>
            <x-ui.carousel.previous-button />
            <x-ui.carousel.next-button />

        </x-ui.carousel.container>

    </div>
</section>
<script type="text/javascript" src="../node_modules/tw-elements/dist/js/tw-elements.umd.min.js"></script>