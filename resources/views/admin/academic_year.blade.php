@extends('layouts.admin')

@section('head')
<title>Academic Year</title>
@endsection

@section('content')

<h1>Academic Year</h1>
@if(!isset($academicyear))
<div>
    <form action="/admin/academic_year/save" method="post">
    @csrf
        <div class="row p-3 g-4">
            
            <div class="col-6 mb-3">
                <div class="form-floating">
                    <input type="text" class="form-control" placeholder="AY Title" name="title" id="title">
                    <label for="title">Enter Academic Year Title</label>   
                </div>
                @if($errors->get('title'))
                @foreach($errors->get('title') as $err)
                {{ $err }}
                @endforeach
                @endif
            </div>
            
            <div class="col-6 mb-3">
                <div class="form-floating">
                    <input type="text" class="form-control" placeholder="AY Alias Name" name="alias" id="alias">
                    <label for="alias">Enter Academic Year Alias</label>   
                </div>
                @if($errors->get('alias'))
                @foreach($errors->get('alias') as $err)
                {{ $err }}
                @endforeach
                @endif
            </div>

            <div class="col-6 mb-3">
                <div class="form-floating">
                    <input type="date" class="form-control" placeholder="AY Start Date" name="from" id="from">
                    <label for="from">AY Start Date</label>   
                </div>
                @if($errors->get('from'))
                @foreach($errors->get('from') as $err)
                {{ $err }}
                @endforeach
                @endif
            </div>

            <div class="col-6 mb-3">
                <div class="form-floating">
                    <input type="date" class="form-control" placeholder="AY End Date" name="to" id="to">
                    <label for="to">AY End Date</label>   
                </div>
                @if($errors->get('to'))
                @foreach($errors->get('to') as $err)
                {{ $err }}
                @endforeach
                @endif
            </div>
        
            <div class="col-6">
                <input type="submit" class="btn btn-primary" value="Save Academic Year">
            </div>

            
        </div>
    </form>
</div>
@endif


@if(isset($academicyear))
<div>
    <form action="/admin/academic_year/update" method="post">
        @csrf
        <input type="text" name="id" id="id" value="{{ $academicyear->id }}">

        <input type="text" name="title" id="title" value="{{$academicyear->title}}">
        @if($errors->get('title'))
        @foreach($errors->get('title') as $err)
        {{ $err }}
        @endforeach
        @endif
        <input type="text" name="alias" id="alias" value="{{$academicyear->alias}}">
        @if($errors->get('alias'))
        @foreach($errors->get('alias') as $err)
        {{ $err }}
        @endforeach
        @endif
        <input type="date" name="from" id="from" value="{{$academicyear->from}}">
        @if($errors->get('from'))
        @foreach($errors->get('from') as $err)
        {{ $err }}
        @endforeach
        @endif
        <input type="date" name="to" id="to" value="{{$academicyear->to}}">
        @if($errors->get('to'))
        @foreach($errors->get('to') as $err)
        {{ $err }}
        @endforeach
        @endif
        <input type="submit" value="Update Academic Year">
    </form>

    <form action="/admin/academic_year/delete" method="post">
        @csrf
        <input type="text" name="id" id="id" value="{{ $academicyear->id }}">

        <input type="text" name="title" id="title" value="{{ $academicyear->title }}">
        @if($errors->get('title'))
        @foreach($errors->get('title') as $err)
        {{ $err }}
        @endforeach
        @endif
        <input type="text" name="alias" id="alias" value="{{ $academicyear->alias }}">
        @if($errors->get('alias'))
        @foreach($errors->get('alias') as $err)
        {{ $err }}
        @endforeach
        @endif
        <input type="date" name="from" id="from" value="{{ $academicyear->from }}">
        @if($errors->get('from'))
        @foreach($errors->get('from') as $err)
        {{ $err }}
        @endforeach
        @endif
        <input type="date" name="to" id="to" value="{{ $academicyear->to }}">
        @if($errors->get('to'))
        @foreach($errors->get('to') as $err)
        {{ $err }}
        @endforeach
        @endif
        <input type="submit" value="Delete Academic Year">
    </form>
</div>
@endif



<div>
    <table class="table">
      <thead>
        <tr>
            <th scope="col" class="" style="width:80px;">#</th>
            <th scope="col">Academic Year</th>
            <th scope="col">Alias</th>
            <th scope="col">From</th>
            <th scope="col">To</th>
            <th scope="col" style="width:120px;">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($academicyears as $acyear)
        <tr>
            <th scope="row">{{ $acyear->id }}</th>
            <td>{{ $acyear->title }}</td>
            <td>{{ $acyear->alias }}</td>
            <td>{{ $acyear->from }}</td>
            <td>{{ $acyear->to }}</td>
            <td><a href="/admin/academic_year?id={{$acyear->id}}">Edit / Delete</a></td>
        </tr>
        @endforeach
      </tbody>
    </table>

    @if($academicyears)
    {{ $academicyears->links() }}
    @endif
</div>


@endsection