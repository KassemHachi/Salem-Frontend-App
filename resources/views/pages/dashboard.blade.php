@extends('layouts.app')
@section('title',"لوحة التحكم")
@section('body')


<div class="flex h-screen ">
    <aside class="hidden lg:flex w-[20vw] bg-salem-dark-blue-500 py-10 flex-col items-center">
        <a class="" href="{{route('home')}}">
            <x-commun.logo class="h-16 fill-white w-fit"></x-commun.logo>
        </a>
        <ul class="flex flex-col justify-start w-full py-28">
            <li class="flex items-center gap-2 px-10 py-5 text-white cursor-pointer hover:bg-white/25">

                <x-jam-home class="w-5 h-5" />
                صفحة الرئيسية
            </li>
            <li class="flex items-center gap-2 px-10 py-5 text-white cursor-pointer hover:bg-white/25">
                <x-jam-dashboard class="w-5 h-5" />
                نظرة عامة
            </li>
            <li class="flex items-center gap-2 px-10 py-5 text-white cursor-pointer hover:bg-white/25">
                <x-tabler-playlist-add class="w-5 h-5" />
                انشاء مقال
            </li>
            <li class="flex items-center gap-2 px-10 py-5 text-white cursor-pointer hover:bg-white/25">
                <x-go-gear-16 class="w-5 h-5" />
                الإعدادت
            </li>


        </ul>
    </aside>
    <main class="w-full pb-10 overflow-y-auto bg-gray-50">
        <div style="" class="flex items-center justify-between h-24 px-10 py-2 bg-white shadow lg:px-20 lg:justify-end">
            <x-commun.logo class="h-10 lg:hidden fill-salem-yellow-500 w-fit"></x-commun.logo>
            <div x-data="{menudropdowndmin:false}" class="flex lg:hidden">
                <button @click="menudropdowndmin = !menudropdowndmin" type="button"
                    class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
                <div x-show="menudropdowndmin" x-transition.duration.300ms
                    class="absolute flex items-start justify-between  inset-0 px-10 py-6 w-[100vw] h-screen bg-white">

                    <div class="w-full">
                        <!-- Current: "bg-indigo-50 border-indigo-500 text-indigo-700", Default: "border-transparent text-gray-500 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-700" -->


                        <a href="#"
                            class="flex w-full gap-2 py-2 pl-3 pr-4 text-lg font-normal text-salem-dark-blue-500 ">
                            <x-jam-home class="w-5 h-5" />
                            الصفحة الرئيسية
                        </a>
                        <a href="#"
                            class="flex w-full gap-2 py-2 pl-3 pr-4 text-lg font-normal text-salem-dark-blue-500 ">
                            <x-jam-dashboard class="w-5 h-5" />
                            نظرة عامة

                        </a>
                        <a href="#"
                            class="flex w-full gap-2 py-2 pl-3 pr-4 text-lg font-normal text-salem-dark-blue-500 ">
                            <x-tabler-playlist-add class="w-5 h-5" />
                            انشاء مقال
                        </a>
                        <a href="#"
                            class="flex w-full gap-2 py-2 pl-3 pr-4 text-lg font-normal text-salem-dark-blue-500 ">
                            <x-go-gear-16 class="w-5 h-5" />
                            الإعدادت

                        </a>
                        <hr class="my-2">
                        <a href="#"
                            class="flex w-full gap-2 py-2 pl-3 pr-4 text-lg font-normal text-salem-dark-blue-500 ">
                            <x-feathericon-user />
                            حسابي

                        </a>
                        <a href="#"
                            class="flex w-full gap-2 py-2 pl-3 pr-4 text-lg font-normal text-salem-dark-blue-500 ">
                            <x-go-gear-16 class="w-5 h-5" />
                            إعدادات الحساب

                        </a>
                        <a href="#"
                            class="flex w-full gap-2 py-2 pl-3 pr-4 text-lg font-normal text-salem-dark-blue-500 ">
                            <x-tabler-logout />
                            خروج

                        </a>


                    </div>

                    <button class="p-3" @click="menudropdowndmin=false">
                        <svg class="w-6 h-6 " fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>

                </div>
            </div>
            <div class="hidden gap-2 md:ml-4 lg:flex md:flex-shrink-0 md:items-center">
                <button type="button" class="relative p-1 bg-white rounded-full text-salem-dark-blue-500 ">
                    <span class="absolute -inset-1.5"></span>
                    <span class="sr-only">View notifications</span>
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                    </svg>
                </button>

                <!-- Profile dropdown -->
                <div x-data="{dropdownMenu:false}" class="relative ml-3">
                    <div>
                        <button @click="dropdownMenu=!dropdownMenu" type="button"
                            class="relative flex text-sm bg-white rounded-full " id="user-menu-button"
                            aria-expanded="false" aria-haspopup="true">
                            <span class="absolute -inset-1.5"></span>
                            <span class="sr-only">Open user menu</span>
                            <img class="w-8 h-8 rounded-full"
                                src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                alt="">
                        </button>
                    </div>

                    <!--
                    Dropdown menu, show/hide based on menu state.

                    Entering: "transition ease-out duration-200"
                      From: "transform opacity-0 scale-95"
                      To: "transform opacity-100 scale-100"
                    Leaving: "transition ease-in duration-75"
                      From: "transform opacity-100 scale-100"
                      To: "transform opacity-0 scale-95"
                  -->
                    <div x-show="dropdownMenu" @click.outside="dropdownMenu=false"
                        class="absolute left-0 z-10 w-48 py-1 mt-2 origin-top-left bg-white rounded-md shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                        role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                        <!-- Active: "bg-gray-100", Not Active: "" -->
                        <a href="#"
                            class="flex gap-2 px-4 py-2 text-base transition-all duration-150 ease-linear text-salem-dark-blue-500 hover:bg-gray-100"
                            role="menuitem" tabindex="-1" id="user-menu-item-0">
                            <x-feathericon-user />
                            حسابي
                        </a>
                        <a href="#"
                            class="flex gap-2 px-4 py-2 text-base transition-all duration-150 ease-linear text-salem-dark-blue-500 hover:bg-gray-100"
                            role="menuitem" tabindex="-1" id="user-menu-item-1">
                            <x-go-gear-16 class="w-5 h-5" />
                            إعدادات الحساب
                        </a>
                        <a href="#"
                            class="flex gap-2 px-4 py-2 text-base transition-all duration-150 ease-linear border-t text-salem-dark-blue-500 hover:bg-gray-100"
                            role="menuitem" tabindex="-1" id="user-menu-item-2">
                            <x-tabler-logout />
                            خروج
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1 gap-5 px-10 mt-10 lg:px-20 sm:grid-cols-2 lg:grid-cols-3">
            <!-- Card -->
            <div class="overflow-hidden bg-white rounded-lg shadow">
                <div class="p-5">
                    <div class="flex items-center">

                        <div class="flex-1 w-0 ml-5">
                            <dl>
                                <dt class="text-lg font-medium text-gray-500 truncate">
                                    عدد المقالات
                                </dt>
                                <dd>
                                    <div class="text-xl font-medium text-gray-900">
                                        50
                                    </div>
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>

            </div>
            <!-- Card -->
            <div class="overflow-hidden bg-white rounded-lg shadow">
                <div class="p-5">
                    <div class="flex items-center">

                        <div class="flex-1 w-0 ml-5">
                            <dl>
                                <dt class="text-lg font-medium text-gray-500 truncate">
                                    عدد الزوار
                                </dt>
                                <dd>
                                    <div class="text-xl font-medium text-gray-900">
                                        1000
                                    </div>
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>

            </div>
            <!-- Card -->
            <div class="overflow-hidden bg-white rounded-lg shadow">
                <div class="p-5">
                    <div class="flex items-center">

                        <div class="flex-1 w-0 ml-5">
                            <dl>
                                <dt class="text-lg font-medium text-gray-500 truncate">
                                    عدد المستخدمين
                                </dt>
                                <dd>
                                    <div class="text-xl font-medium text-gray-900">10</div>
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>

            </div>

            <!-- More items... -->
        </div>

        <div class="px-10 mt-10 sm:px-6 lg:px-20">
            <div class="flex items-center justify-between">
                <div class="">
                    <h1 class="text-[45px] font-semibold leading-6 text-salem-dark-blue-500">المقالات</h1>

                </div>
                <div class="mt-4 sm:mt-0">
                    <button type="button"
                        class="block px-3 py-2 text-lg font-medium text-center text-white rounded-md shadow-sm !bg-salem-dark-blue-500 hover:!bg-salem-yellow-500 duration-200 transition-all ease-in-out">
                        انشاء مقال
                    </button>
                </div>
            </div>
            <div class="flow-root mt-8">
                <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                        <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-300">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col"
                                            class="py-3.5 pl-4 pr-3 text-right text-xl font-semibold text-salem-dark-blue-500 sm:pl-6">
                                            العنوان</th>

                                        <th scope="col"
                                            class="px-3 py-3.5 text-right text-xl font-semibold text-salem-dark-blue-500">
                                            تاريخ الانشاء
                                        </th>
                                        <th scope="col"
                                            class="px-3 py-3.5 text-right text-xl font-semibold text-salem-dark-blue-500">
                                            تاريخ آخر تعديل
                                        </th>
                                        <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                                            <span class="sr-only">Edit</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">

                                    <tr>
                                        <td
                                            class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 whitespace-nowrap sm:pl-6">
                                            في إطار تعزيز التواصل و التعاون
                                        </td>
                                        <td class="px-3 py-4 text-base text-gray-500 whitespace-nowrap">
                                            06 سبتمبر 2023
                                        </td>
                                        <td class="px-3 py-4 text-base text-gray-500 whitespace-nowrap">
                                            06 سبتمبر 2023
                                        </td>
                                        <td
                                            class="relative py-4 pl-3 pr-4 text-base font-medium text-right whitespace-nowrap sm:pr-6">
                                            <a href="#" class="text-salem-yellow-500 hover:text-salem-yellow-600">
                                                تعديل
                                                <span class="sr-only">, Lindsay Walton</span></a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td
                                            class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 whitespace-nowrap sm:pl-6">
                                            في إطار تعزيز التواصل و التعاون
                                        </td>
                                        <td class="px-3 py-4 text-base text-gray-500 whitespace-nowrap">
                                            05 اكتوبر 2023
                                        </td>
                                        <td class="px-3 py-4 text-base text-gray-500 whitespace-nowrap">
                                            10 اكتوبر 2023
                                        </td>
                                        <td
                                            class="relative py-4 pl-3 pr-4 text-base font-medium text-right whitespace-nowrap sm:pr-6">
                                            <a href="#" class="text-salem-yellow-500 hover:text-salem-yellow-600">
                                                تعديل
                                                <span class="sr-only">, Lindsay Walton</span></a>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td
                                            class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 whitespace-nowrap sm:pl-6">
                                            في إطار تعزيز التواصل و التعاون
                                        </td>
                                        <td class="px-3 py-4 text-base text-gray-500 whitespace-nowrap">
                                            11 سبتمبر 2023
                                        </td>
                                        <td class="px-3 py-4 text-base text-gray-500 whitespace-nowrap">
                                            12 سبتمبر 2023
                                        </td>
                                        <td
                                            class="relative py-4 pl-3 pr-4 text-base font-medium text-right whitespace-nowrap sm:pr-6">
                                            <a href="#" class="text-salem-yellow-500 hover:text-salem-yellow-600">
                                                تعديل
                                                <span class="sr-only">, Lindsay Walton</span></a>
                                        </td>
                                    </tr>


                                    <tr>
                                        <td
                                            class="py-4 pl-4 pr-3 text-base font-medium text-gray-900 whitespace-nowrap sm:pl-6">
                                            في إطار تعزيز التواصل و التعاون
                                        </td>
                                        <td class="px-3 py-4 text-base text-gray-500 whitespace-nowrap">
                                            06 سبتمبر 2023
                                        </td>
                                        <td class="px-3 py-4 text-base text-gray-500 whitespace-nowrap">
                                            09 سبتمبر 2023
                                        </td>
                                        <td
                                            class="relative py-4 pl-3 pr-4 text-base font-medium text-right whitespace-nowrap sm:pr-6">
                                            <a href="#" class="text-salem-yellow-500 hover:text-salem-yellow-600">
                                                تعديل
                                                <span class="sr-only">, Lindsay Walton</span></a>
                                        </td>
                                    </tr>



                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="px-4 mt-10 lg:px-20">
            <form action="">
                <div class="w-full">
                    <label for="title" class="text-lg leading-8">
                        عنوان المقال
                    </label>
                    <input type="text" name="title" id="title" autocomplete="title" required
                        class="block w-full px-4 py-3 placeholder-gray-500 border-gray-300 rounded-md shadow-sm focus:border-salem-dark-blue-500 focus:ring-salem-dark-blue-500"
                        placeholder="">
                </div>
                <div class="w-full mt-5">
                    <label for="list" class="block text-lg leading-8 text-gray-900">
                        قائمة
                    </label>
                    <select id="list" name="list"
                        class="block w-full py-3 pr-8 text-base font-medium border-0 rounded-md text-salem-dark-blue-500 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-salem-dark-blue-500 sm:text-sm sm:leading-6">
                        <option>
                            عنصر 1
                        </option>
                        <option>
                            عنصر 2
                        </option>
                        <option>
                            عنصر 3
                        </option>
                        <option>
                            عنصر 4
                        </option>
                    </select>
                </div>
                <div class="w-full mt-5">
                    <label for="message" class="text-lg leading-8">
                        محتوى المقال
                    </label>
                    <textarea id="message" name="message" rows="4"
                        class="block w-full px-4 py-3 placeholder-gray-500 border-gray-300 rounded-md shadow-sm focus:border-salem-dark-blue-500 focus:ring-salem-dark-blue-500"
                        placeholder=""></textarea>
                </div>
                <div class="w-full mt-5">
                    <button type="button"
                        class="block px-3 py-2 text-lg font-medium text-center text-white rounded-md shadow-sm !bg-salem-dark-blue-500 hover:!bg-salem-yellow-500 duration-200 transition-all ease-in-out">
                        انشاء مقال
                    </button>
                </div>
            </form>
        </div>
    </main>
</div>
@endsection