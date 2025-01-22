@extends('layouts.web')

@section('head')
<title>Coco Preschool</title>
@endsection

@section('content')
<div data-bs-spy="scroll"  data-bs-smooth-scroll="true">
    @include ('web.home.slider')
    @include ('web.home.about')
    @include ('web.home.facilities')
    @include ('web.home.program')
    @include ('web.home.gallery')
    @include ('web.home.contact')
</div>
@endsection

