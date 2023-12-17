<header class="fixed w-full bg-white shadow  h-[100px]">
    <nav class="flex items-center justify-between py-4 mx-auto lg:px-20" aria-label="Global">
        <div class="flex lg:flex-1">
            <a href="#" class="">
                <x-commun.logo class="h-10" />
            </a>
        </div>
        <div class="flex lg:hidden">
            <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                    aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>
        </div>
        <div class="hidden lg:flex lg:gap-x-12">
            {{-- <div x-data="{dropMenu:false}" class="relative">
                <button @click="dropMenu=!dropMenu" type="button"
                    class="flex items-center text-sm font-semibold leading-6 text-gray-900 gap-x-1"
                    aria-expanded="false">
                    الرئيسية
                    <x-icons.chevron-down />
                </button>


                <div x-show="dropMenu" @click.outside="dropMenu=false" x-transition
                    class="absolute z-10 w-screen max-w-md mt-3 overflow-hidden bg-white shadow-lg -left-8 top-full rounded-3xl ring-1 ring-gray-900/5">
                    <div class="p-4">
                        <div class="relative flex p-4 text-sm leading-6 rounded-lg group gap-x-6 hover:bg-gray-50">
                            <div
                                class="flex items-center justify-center flex-none mt-1 rounded-lg h-11 w-11 bg-gray-50 group-hover:bg-white">
                                <svg class="w-6 h-6 text-gray-600 group-hover:text-indigo-600" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M10.5 6a7.5 7.5 0 107.5 7.5h-7.5V6z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M13.5 10.5H21A7.5 7.5 0 0013.5 3v7.5z" />
                                </svg>
                            </div>
                            <div class="flex-auto">
                                <a href="#" class="block font-semibold text-gray-900">
                                    Analytics
                                    <span class="absolute inset-0"></span>
                                </a>
                                <p class="mt-1 text-gray-600">Get a better understanding of your traffic</p>
                            </div>
                        </div>
                        <div class="relative flex p-4 text-sm leading-6 rounded-lg group gap-x-6 hover:bg-gray-50">
                            <div
                                class="flex items-center justify-center flex-none mt-1 rounded-lg h-11 w-11 bg-gray-50 group-hover:bg-white">
                                <svg class="w-6 h-6 text-gray-600 group-hover:text-indigo-600" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15.042 21.672L13.684 16.6m0 0l-2.51 2.225.569-9.47 5.227 7.917-3.286-.672zM12 2.25V4.5m5.834.166l-1.591 1.591M20.25 10.5H18M7.757 14.743l-1.59 1.59M6 10.5H3.75m4.007-4.243l-1.59-1.59" />
                                </svg>
                            </div>
                            <div class="flex-auto">
                                <a href="#" class="block font-semibold text-gray-900">
                                    Engagement
                                    <span class="absolute inset-0"></span>
                                </a>
                                <p class="mt-1 text-gray-600">Speak directly to your customers</p>
                            </div>
                        </div>
                        <div class="relative flex p-4 text-sm leading-6 rounded-lg group gap-x-6 hover:bg-gray-50">
                            <div
                                class="flex items-center justify-center flex-none mt-1 rounded-lg h-11 w-11 bg-gray-50 group-hover:bg-white">
                                <svg class="w-6 h-6 text-gray-600 group-hover:text-indigo-600" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M7.864 4.243A7.5 7.5 0 0119.5 10.5c0 2.92-.556 5.709-1.568 8.268M5.742 6.364A7.465 7.465 0 004.5 10.5a7.464 7.464 0 01-1.15 3.993m1.989 3.559A11.209 11.209 0 008.25 10.5a3.75 3.75 0 117.5 0c0 .527-.021 1.049-.064 1.565M12 10.5a14.94 14.94 0 01-3.6 9.75m6.633-4.596a18.666 18.666 0 01-2.485 5.33" />
                                </svg>
                            </div>
                            <div class="flex-auto">
                                <a href="#" class="block font-semibold text-gray-900">
                                    Security
                                    <span class="absolute inset-0"></span>
                                </a>
                                <p class="mt-1 text-gray-600">Your customers’ data will be safe and secure</p>
                            </div>
                        </div>
                        <div class="relative flex p-4 text-sm leading-6 rounded-lg group gap-x-6 hover:bg-gray-50">
                            <div
                                class="flex items-center justify-center flex-none mt-1 rounded-lg h-11 w-11 bg-gray-50 group-hover:bg-white">
                                <svg class="w-6 h-6 text-gray-600 group-hover:text-indigo-600" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M13.5 16.875h3.375m0 0h3.375m-3.375 0V13.5m0 3.375v3.375M6 10.5h2.25a2.25 2.25 0 002.25-2.25V6a2.25 2.25 0 00-2.25-2.25H6A2.25 2.25 0 003.75 6v2.25A2.25 2.25 0 006 10.5zm0 9.75h2.25A2.25 2.25 0 0010.5 18v-2.25a2.25 2.25 0 00-2.25-2.25H6a2.25 2.25 0 00-2.25 2.25V18A2.25 2.25 0 006 20.25zm9.75-9.75H18a2.25 2.25 0 002.25-2.25V6A2.25 2.25 0 0018 3.75h-2.25A2.25 2.25 0 0013.5 6v2.25a2.25 2.25 0 002.25 2.25z" />
                                </svg>
                            </div>
                            <div class="flex-auto">
                                <a href="#" class="block font-semibold text-gray-900">
                                    Integrations
                                    <span class="absolute inset-0"></span>
                                </a>
                                <p class="mt-1 text-gray-600">Connect with third-party tools</p>
                            </div>
                        </div>
                        <div class="relative flex p-4 text-sm leading-6 rounded-lg group gap-x-6 hover:bg-gray-50">
                            <div
                                class="flex items-center justify-center flex-none mt-1 rounded-lg h-11 w-11 bg-gray-50 group-hover:bg-white">
                                <svg class="w-6 h-6 text-gray-600 group-hover:text-indigo-600" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
                                </svg>
                            </div>
                            <div class="flex-auto">
                                <a href="#" class="block font-semibold text-gray-900">
                                    Automations
                                    <span class="absolute inset-0"></span>
                                </a>
                                <p class="mt-1 text-gray-600">Build strategic funnels that will convert</p>
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 divide-x divide-gray-900/5 bg-gray-50">
                        <a href="#"
                            class="flex items-center justify-center gap-x-2.5 p-3 text-sm font-semibold leading-6 text-gray-900 hover:bg-gray-100">
                            <svg class="flex-none w-5 h-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M2 10a8 8 0 1116 0 8 8 0 01-16 0zm6.39-2.908a.75.75 0 01.766.027l3.5 2.25a.75.75 0 010 1.262l-3.5 2.25A.75.75 0 018 12.25v-4.5a.75.75 0 01.39-.658z"
                                    clip-rule="evenodd" />
                            </svg>
                            Watch demo
                        </a>
                        <a href="#"
                            class="flex items-center justify-center gap-x-2.5 p-3 text-sm font-semibold leading-6 text-gray-900 hover:bg-gray-100">
                            <svg class="flex-none w-5 h-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                                aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M2 3.5A1.5 1.5 0 013.5 2h1.148a1.5 1.5 0 011.465 1.175l.716 3.223a1.5 1.5 0 01-1.052 1.767l-.933.267c-.41.117-.643.555-.48.95a11.542 11.542 0 006.254 6.254c.395.163.833-.07.95-.48l.267-.933a1.5 1.5 0 011.767-1.052l3.223.716A1.5 1.5 0 0118 15.352V16.5a1.5 1.5 0 01-1.5 1.5H15c-1.149 0-2.263-.15-3.326-.43A13.022 13.022 0 012.43 8.326 13.019 13.019 0 012 5V3.5z"
                                    clip-rule="evenodd" />
                            </svg>
                            Contact sales
                        </a>
                    </div>
                </div>
            </div> --}}
            @foreach ($itemsNav as $item)

            <a href="{{$item['url']}}"
                class="text-sm font-semibold leading-6 hover:text-salem-yellow-500 transition-all duration-150 ease-linear {{$item['name'] == $activePage ? 'text-salem-yellow-500': 'text-salem-dark-blue-500'}}">{{$item["title"]}}</a>
            @endforeach

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
        <div class="hidden lg:flex lg:flex-1 lg:justify-end">
            <a href="#"
                class="flex items-center gap-2 px-3 py-2 text-sm font-semibold leading-6 transition-all duration-150 ease-linear border-2 rounded-lg group hover:bg-salem-dark-blue-500 hover:text-white border-salem-dark-blue-500 text-salem-dark-blue-500">
                لتصويت الغرفة التجارية
                <x-icons.arrow-left class="fill-salem-dark-blue-500 group-hover:fill-white" />
            </a>
        </div>
    </nav>

</header>