@extends('layouts.admin')

@section('head')
<title>Application</title>
@endsection

@section('content')
<h1>Application</h1>

@if(isset($applications))
<div class="">
    <form action="/admin/application/save" method="post">
        @csrf

<div class="row">
    <div class="col-12">
        <div class="form-floating">
            <select name="id" class="form-control" id="id">
                    <option value="">Select Application</option>
                @if(isset($applications))
                    @foreach($applications as $app)
                    <option value="{{$app->id}}">
                        {{$app->id}}
                    </option>
                    @endforeach
                @endif
                </select>
                <label for="application_id">Select Application</label> 
                @if($errors->get('application_id'))
                @foreach($errors->get('application_id') as $err)
                {{$err}}
                @endforeach
                @endif
        </div>
    </div>
    
    <div class="col-12">
        <div class="form-floating">
            <select name="id" class="form-control" id="id">
                    <option value="">Select Application</option>
                @if(isset($applications))
                    @foreach($applications as $app)
                    <option value="{{$app->id}}">
                        {{$app->user_id}}
                    </option>
                    @endforeach
                @endif
                </select>
                <label for="application_id">Select Application</label> 
                @if($errors->get('application_id'))
                @foreach($errors->get('application_id') as $err)
                {{$err}}
                @endforeach
                @endif
        </div>
    </div>
</div>






@else
hii


</div>
@endif

@endsection