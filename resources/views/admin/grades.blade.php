@extends('layouts.admin')

@section('head')
<title>Grades</title>
@endsection

@section('content')
<h1>Grades</h1>

@if(!isset($grade))
<div>
    <form action="/admin/grades/save" method="post">
        @csrf
        <input type="text" name="grade" id="grade">
        @if($errors->get('grade'))
        @foreach($errors->get('grade') as $err)
        {{ $err }}
        @endforeach
        @endif
        <input type="submit" value="Save Grade">
    </form>
</div>
@endif

@if(isset($grade))
<div>
    <form action="/admin/grades/update" method="post">
        @csrf
        <input type="text" name="id" id="id" value="{{ $grade->id }}">
        <input type="text" name="grade" id="grade" value="{{ $grade->grade }}">
        @if($errors->get('grade'))
        @foreach($errors->get('grade') as $err)
        {{ $err }}
        @endforeach
        @endif
        <input type="submit" value="Update Grade">
    </form>
    <form action="/admin/grades/delete" method="post">
        @csrf
        <input type="text" name="id" id="id" value="{{ $grade->id }}">
        <input type="text" name="grade" id="grade" value="{{ $grade->grade }}">
        @if($errors->get('grade'))
        @foreach($errors->get('grade') as $err)
        {{ $err }}
        @endforeach
        @endif
        <input type="submit" value="Delete Grade">
    </form>
</div>
@endif

<div>
    <table class="table">
      <thead>
        <tr>
            <th scope="col" class="" style="width:80px;">#</th>
            <th scope="col">Grade</th>
            <th scope="col" style="width:120px;">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($grades as $gr)
        <tr>
            <th scope="row">{{ $gr->id }}</th>
            <td>{{ $gr->grade }}</td>
            <td><a href="/admin/grades?id={{$gr->id}}">Edit / Delete</a></td>
        </tr>
        @endforeach
      </tbody>
    </table>

    @if($grades)
    {{ $grades->links() }}
    @endif
</div>

@endsection