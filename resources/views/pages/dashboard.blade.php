@extends('layouts.app')
@section('title',"لوحة التحكم")
@section('body')


<div class="flex h-screen ">
    <aside class="w-[20vw] bg-salem-dark-blue-500 py-10 flex flex-col items-center">
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
    <main class="w-full bg-gray-50">
        <div style="" class="flex items-center justify-end h-24 px-20 py-2 bg-white shadow">

            <div class="hidden gap-2 md:ml-4 md:flex md:flex-shrink-0 md:items-center">
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
                            class="block px-4 py-2 text-base text-gray-700 transition-all duration-150 ease-linear hover:bg-gray-100"
                            role="menuitem" tabindex="-1" id="user-menu-item-0">حسابي</a>
                        <a href="#"
                            class="block px-4 py-2 text-base text-gray-700 transition-all duration-150 ease-linear hover:bg-gray-100"
                            role="menuitem" tabindex="-1" id="user-menu-item-1">الإعدادات</a>
                        <a href="#"
                            class="block px-4 py-2 text-base text-gray-700 transition-all duration-150 ease-linear border-t hover:bg-gray-100"
                            role="menuitem" tabindex="-1" id="user-menu-item-2">خروج</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1 gap-5 px-20 mt-10 sm:grid-cols-2 lg:grid-cols-3">
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

        <div class="px-4 mt-10 sm:px-6 lg:px-20">
            <div class="sm:flex sm:items-center">
                <div class="sm:flex-auto">
                    <h1 class="text-[45px] font-semibold leading-6 text-salem-dark-blue-500">المقالات</h1>

                </div>
                <div class="mt-4 sm:mt-0 sm:flex-none">
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
    </main>
</div>
@endsection