<section id="tweets" class="p-10 lg:p-20 bg-[#fbf7f3]">
    <h1 class="my-20 text-5xl font-semibold text-center lg:mt-0 text-salem-dark-blue-500 " data-aos="fade-up"
        data-aos-once="true" data-aos-delay="0" data-aos-duration="500">
        آخر التغريدات
    </h1>
    <div class="grid grid-cols-1 gap-5 lg:grid-cols-2 xl:grid-cols-4">
        <x-commun.tweets-card data-aos-delay="0" data-aos-duration="200" />
        <x-commun.tweets-card data-aos-delay="30" data-aos-duration="400" />
        <x-commun.tweets-card data-aos-delay="60" data-aos-duration="800" />
        <x-commun.tweets-card data-aos-delay="90" data-aos-duration="1000" />
    </div>
</section>