@extends('layouts.app')
@section('title',"صفحة الرئيسية")
@use(App\Enums\ItemsNavEnum)

@section('body')
<x-commun.navbar :activepage="ItemsNavEnum::HOME" />


<x-blocks.home.hero />

<x-blocks.home.voting-program />

<x-blocks.home.salem-for-humanity />

<x-blocks.home.salem-tweets />

<x-blocks.home.testimonies />

<x-blocks.home.media-center />


<x-blocks.home.contact-us />

<x-commun.footer />

@endsection