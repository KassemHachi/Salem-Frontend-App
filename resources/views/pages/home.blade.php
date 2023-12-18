@extends('layouts.app')
@section('title',"Salem")
@use(App\Enums\ItemsNavEnum)
@push("head")
<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
@endpush
@section('body')
<x-commun.navbar :activepage="ItemsNavEnum::HOME" />
<div class="pt-20"></div>

<x-blocks.home.hero />

<x-blocks.home.voting-program />

<x-blocks.home.salem-for-humanity />

<x-blocks.home.salem-tweets />

<x-blocks.home.testimonies />

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>



@endsection