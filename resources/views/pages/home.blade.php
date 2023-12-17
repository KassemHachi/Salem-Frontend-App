@extends('layouts.app')
@section('title',"Salem")
@use(App\Enums\ItemsNavEnum)
@section('body')
<x-commun.navbar :activepage="ItemsNavEnum::HOME" />
<div class="pt-20"></div>

<x-blocks.home.hero />


@endsection