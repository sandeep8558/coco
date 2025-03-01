@extends('layouts.admin')

@section('head')
<title>Documents</title>
@endsection

@section('content')

@if(!isset($document))
<div class="container-fluid mt-3">
    <div class="row">
        <div class="col-12">
            <h4 class="fw-bold">Documents Manager</h4>
        </div>
        <div class="col-12">


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
                    <input type="submit" class="btn btn-primary mt-3" value="Save Document">
                </div>
            </form>
        </div>
    </div>
</div>
@endif

 <div class="container-fluid mt-3">
        <div class="row">           
            @if(isset($document))
            <div class="col-12 d-flex"> 
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
            </div>

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
     
        @endif
        </div>  
</div>  


<div class="p-3">
    <table class="table table-light table-stripped">
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