@extends('layouts.web')

@section('head')
<title>Coco Preschool</title>
@endsection

@section('content')
@include ('web.home.slider')
@include ('web.home.about')
@include ('web.home.facilities')
@include ('web.home.program')
@include ('web.home.gallery')
@include ('web.home.contact')
@endsection

