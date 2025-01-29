@extends('layouts.web')

@section('head')
<title>Student</title>
@endsection

@section('content')
<div class="container">

    <h1>Student</h1>

    {{ $applications }}

    <br><br><br><br>

    @foreach($applications as $appli)
    {{$appli->surname}}
    @endforeach

    <div>
        
    </div>

</div>
@endsection