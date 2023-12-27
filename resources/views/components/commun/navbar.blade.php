<header class="fixed w-full bg-white shadow  h-[100px] z-50 flex" x-cloak x-data="{menudropdown:false}">
    <nav class="relative flex items-center justify-between w-full px-10 py-4 mx-auto lg:px-20" aria-label="Global">
        <div class="flex lg:flex-1">
            <a href="{{route('home')}}" class="">
                <x-commun.logo class="h-10 fill-salem-yellow-500" />
            </a>
        </div>
        <div class="flex lg:hidden">
            <button @click="menudropdown = !menudropdown" type="button"
                class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                    aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>
            <div x-show="menudropdown" x-transition.duration.300ms
                class="absolute flex items-start justify-between  inset-0 px-10 py-6 w-[100vw] h-screen bg-white">

                <div class="">
                    <!-- Current: "bg-indigo-50 border-indigo-500 text-indigo-700", Default: "border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700" -->

                    @foreach ($itemsNav as $item)
                    <a href="{{$item['url']}}"
                        class="block py-2 pl-3 pr-4 text-lg   {{$item['name'] == $activePage ? 'text-salem-yellow-500 font-bold': 'text-salem-dark-blue-500 font-normal'}} ">
                        {{$item["title"]}}
                    </a>
                    @endforeach
                    <a href="#"
                        class="flex items-center gap-2 px-3 py-2 text-lg font-semibold leading-6 transition-all duration-150 ease-linear border-2 rounded-lg w-fit group hover:bg-salem-dark-blue-500 hover:text-white border-salem-dark-blue-500 text-salem-dark-blue-500">
                        لتصويت الغرفة التجارية
                        <x-icons.arrow-left class="fill-salem-dark-blue-500 group-hover:fill-white" />
                    </a>
                </div>
                <button class="p-3" @click="menudropdown=false">
                    <svg class="w-6 h-6 " fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>

            </div>
        </div>
        <div class="hidden lg:flex lg:gap-x-12">

            @foreach ($itemsNav as $item)

            <a href="{{$item['url']}}"
                class="text-lg  leading-6 hover:text-salem-yellow-500 transition-all duration-150 ease-linear {{$item['name'] == $activePage ? 'text-salem-yellow-500 font-bold ': 'text-salem-dark-blue-500 font-normal'}}">{{$item["title"]}}</a>
            @endforeach
            <div x-data="{dropMenu:false}" class="relative">
                <button @click="dropMenu=!dropMenu" type="button"
                    class="flex items-center text-lg leading-6 text-salem-dark-blue-500 gap-x-1" aria-expanded="false">
                    عنوان
                    <x-icons.chevron-down class="stroke-salem-dark-blue-500" />
                </button>


                <div x-show="dropMenu" @click.outside="dropMenu=false" x-transition
                    class="absolute z-10 w-screen max-w-md mt-3 overflow-hidden bg-white shadow-lg -left-8 top-full rounded-3xl ring-1 ring-gray-900/5">
                    <div class="p-4">
                        <div class="relative flex p-4 text-sm leading-6 rounded-lg group gap-x-6 hover:bg-gray-50">

                            <div class="flex-auto">
                                <a href="#" class="block font-semibold text-gray-900">
                                    عنوان فرعي
                                    <span class="absolute inset-0"></span>
                                </a>
                                <p class="mt-1 text-gray-600">
                                    هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد
                                    النص العربى
                                </p>
                            </div>

                        </div>
                        <div class="relative flex p-4 text-sm leading-6 rounded-lg group gap-x-6 hover:bg-gray-50">

                            <div class="flex-auto">
                                <a href="#" class="block font-semibold text-gray-900">
                                    عنوان فرعي
                                    <span class="absolute inset-0"></span>
                                </a>
                                <p class="mt-1 text-gray-600">
                                    هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد
                                    النص العربى
                                </p>
                            </div>

                        </div>
                        <div class="relative flex p-4 text-sm leading-6 rounded-lg group gap-x-6 hover:bg-gray-50">

                            <div class="flex-auto">
                                <a href="#" class="block font-semibold text-gray-900">
                                    عنوان فرعي
                                    <span class="absolute inset-0"></span>
                                </a>
                                <p class="mt-1 text-gray-600">
                                    هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد
                                    النص العربى
                                </p>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
            {{--
            <div x-data="{dropMenu:false}" class="relative">
                <button @click="dropMenu=!dropMenu" type="button"
                    class="flex items-center text-sm font-semibold leading-6 text-gray-900 gap-x-1"
                    aria-expanded="false">
                    Company
                    <x-icons.chevron-down />
                </button>


                <div x-show="dropMenu" @click.outside="dropMenu=false" x-transition
                    class="absolute z-10 p-4 mt-3 bg-white shadow-lg -left-8 top-full w-96 rounded-3xl ring-1 ring-gray-900/5">
                    <div class="relative p-4 rounded-lg hover:bg-gray-50">
                        <a href="#" class="block text-sm font-semibold leading-6 text-gray-900">
                            About us
                            <span class="absolute inset-0"></span>
                        </a>
                        <p class="mt-1 text-sm leading-6 text-gray-600">Learn more about our company values and
                            mission
                            to empower others</p>
                    </div>
                    <div class="relative p-4 rounded-lg hover:bg-gray-50">
                        <a href="#" class="block text-sm font-semibold leading-6 text-gray-900">
                            Careers
                            <span class="absolute inset-0"></span>
                        </a>
                        <p class="mt-1 text-sm leading-6 text-gray-600">Looking for you next career opportunity? See
                            all
                            of our open positions</p>
                    </div>
                    <div class="relative p-4 rounded-lg hover:bg-gray-50">
                        <a href="#" class="block text-sm font-semibold leading-6 text-gray-900">
                            Support
                            <span class="absolute inset-0"></span>
                        </a>
                        <p class="mt-1 text-sm leading-6 text-gray-600">Get in touch with our dedicated support team
                            or
                            reach out on our community forums</p>
                    </div>
                    <div class="relative p-4 rounded-lg hover:bg-gray-50">
                        <a href="#" class="block text-sm font-semibold leading-6 text-gray-900">
                            Blog
                            <span class="absolute inset-0"></span>
                        </a>
                        <p class="mt-1 text-sm leading-6 text-gray-600">Read our latest announcements and get
                            perspectives from our team</p>
                    </div>
                </div>
            </div> --}}
        </div>
        <div class="hidden mx-10 lg:flex lg:flex-1 lg:justify-end">
            <a href="#"
                class="flex items-center gap-2 px-3 py-2 text-lg font-semibold leading-6 transition-all duration-150 ease-linear border-2 rounded-lg group hover:bg-salem-dark-blue-500 hover:text-white border-salem-dark-blue-500 text-salem-dark-blue-500">
                <p class="w-20 truncate xl:w-full"> لتصويت الغرفة التجارية
                </p>
                <x-icons.arrow-left class="fill-salem-dark-blue-500 group-hover:fill-white" />
            </a>
        </div>
    </nav>

</header>
<div class="pt-24 lg:pt-20"></div>