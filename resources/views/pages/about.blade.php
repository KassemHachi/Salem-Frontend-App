@extends('layouts.app')
@section('title',"Salem")
@use(App\Enums\ItemsNavEnum)

@section('body')
<x-commun.navbar :activepage="ItemsNavEnum::SALEM" />
<div class="pt-24 lg:pt-20"></div>
<section class="relative min-h-[600px] bg-cover" style="background: url('')">
    <img src="{{Vite::asset('resources/images/salem-hero-image-2.jpg')}}" alt=""
        class="absolute object-cover w-full h-full blur-[1px]">
    <div class="absolute inset-0 z-[1] bg-salem-yellow-200/50"></div>

</section>

<article>

</article>

<x-commun.footer />

@endsection