@extends('layouts.admin')

@section('head')
<title>Documents</title>
@endsection

@section('content')
<h1>Documents</h1>

@if(!isset($document))
<div>
    <form action="/admin/documents/save" method="post">
        @csrf
        <div class="form-floating">
            <input type="text" class="form-control" name="document" id="document">
            <label for="document">Enter Document Name</label> 
            @if($errors->get('document'))
            @foreach($errors->get('document') as $err)
            {{$err}}
            @endforeach
            @endif
            <input type="submit" class="btn btn-primary" value="Save Document">
        </div>
        
    </form>
</div>
@endif


@if(isset($document))
<div>
    <form action="/admin/documents/update" method="post">
        @csrf
        <input type="text" name="id" id="id" value="{{ $document->id }}">
        <input type="text" name="document" id="document" value="{{ $document->document }}">
        @if($errors->get('document'))
        @foreach($errors->get('document') as $err)
        {{ $err }}
        @endforeach
        @endif
        <input type="submit" value="Update Document">
    </form>

    <form action="/admin/documents/delete" method="post">
        @csrf
        <input type="text" name="id" id="id" value="{{ $document->id }}">
        <input type="text" name="document" id="document" value="{{ $document->document }}">
        @if($errors->get('document'))
        @foreach($errors->get('document') as $err)
        {{ $err }}
        @endforeach
        @endif
        <input type="submit" value="Delete Document">
    </form>
</div>
@endif


<div>
    <table class="table">
      <thead>
        <tr>
            <th scope="col" class="" style="width:80px;">#</th>
            <th scope="col">Document</th>
            <th scope="col" style="width:120px;">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($documents as $doc)
        <tr>
            <th scope="row">{{ $doc->id }}</th>
            <td>{{ $doc->document }}</td>
            <td><a href="/admin/documents?id={{$doc->id}}">Edit / Delete</a></td>
        </tr>
        @endforeach
      </tbody>
    </table>

    @if($documents)
    {{ $documents->links() }}
    @endif
</div>





@endsection