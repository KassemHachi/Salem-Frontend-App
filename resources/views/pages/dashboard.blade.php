@extends('layouts.app')
@section('title',"صفحة الرئيسية")
@section('body')


<div class="flex h-screen ">
    <aside style="width: 20vw ; padding-top: .5rem" class=" h-full bg-salem-dark-blue-500">
        <x-commun.logo class="fill-white mx-auto"></x-commun.logo>
        <div class="mt-10">
            <ul class="text-white w-full">
                <a href="#">
                    <li style="padding-top: 1rem;padding-bottom: 1rem" class="hover:!bg-white/30  px-5 text-xl w-full">
                        نظرة عامة
                    </li>
                </a>

                <a href="#">
                    <li style="padding-top: 1rem;padding-bottom: 1rem" class="hover:!bg-white/30  px-5 text-xl w-full">
                        مقالات
                    </li>
                </a>
            </ul>
        </div>
    </aside>
    <main class="w-full bg-gray-50">
        <div style="padding-inline-start: 2rem;padding-top: 1rem" class="h-20 bg-white shadow flex">
            <div class="">
                <h2 class="text-2xl font-semibold">
                    مرحبا بك مجددا !
                </h2>
            </div>
        </div>
        <div class="mt-10 px-10 grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">
            <!-- Card -->
            <div class="overflow-hidden rounded-lg bg-white shadow">
                <div class="p-5">
                    <div class="flex items-center">

                        <div class="ml-5 w-0 flex-1">
                            <dl>
                                <dt class="truncate text-sm font-medium text-gray-500">
                                    عدد المقالات
                                </dt>
                                <dd>
                                    <div class="text-lg font-medium text-gray-900">
                                        50
                                    </div>
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 px-5 py-3">
                    <div class="text-sm">
                        <a href="#" class="font-medium text-cyan-700 hover:text-cyan-900">View all</a>
                    </div>
                </div>
            </div>
            <!-- Card -->
            <div class="overflow-hidden rounded-lg bg-white shadow">
                <div class="p-5">
                    <div class="flex items-center">

                        <div class="ml-5 w-0 flex-1">
                            <dl>
                                <dt class="truncate text-sm font-medium text-gray-500">
                                    عدد الزوار
                                </dt>
                                <dd>
                                    <div class="text-lg font-medium text-gray-900">
                                        1000
                                    </div>
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 px-5 py-3">
                    <div class="text-sm">
                        <a href="#" class="font-medium text-cyan-700 hover:text-cyan-900">View all</a>
                    </div>
                </div>
            </div>
            <!-- Card -->
            <div class="overflow-hidden rounded-lg bg-white shadow">
                <div class="p-5">
                    <div class="flex items-center">

                        <div class="ml-5 w-0 flex-1">
                            <dl>
                                <dt class="truncate text-sm font-medium text-gray-500">
                                    عدد المستخدمين
                                </dt>
                                <dd>
                                    <div class="text-lg font-medium text-gray-900">10</div>
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 px-5 py-3">
                    <div class="text-sm">
                        <a href="#" class="font-medium text-cyan-700 hover:text-cyan-900">View all</a>
                    </div>
                </div>
            </div>

            <!-- More items... -->
        </div>
    </main>
</div>
@endsection