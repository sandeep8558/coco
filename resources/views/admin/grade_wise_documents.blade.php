@extends('layouts.admin')

@section('head')
<title>Grade Wise Documents</title>
@endsection

@section('content')
<h1>Grade Wise Documents</h1>

@if(!isset($grade_wise_document))
<div class="">
    <form action="/admin/grade_wise_documents/save" method="post">
        @csrf
    
        <div class="form-floating">
                <select name="grade_id" class="form-control" id="grade_id">
                    <option value="">Select Grade</option>
                @if(isset($grades))
                    @foreach($grades as $gr)
                    <option value="{{$gr->id}}">
                        {{$gr->grade}}
                    </option>
                    @endforeach
                @endif
                </select>
                <label for="grade_id">Select Grade</label> 
                @if($errors->get('grade_id'))
                @foreach($errors->get('grade_id') as $err)
                {{$err}}
                @endforeach
                @endif
        
        </div>
     
        <div class="form-floating">
            <select name="document_id" class="form-control" id="document_id">
                <option value="">Select Document</option>
                @if(isset($documents))
                    @foreach($documents as $docu)
                    <option value="{{$docu->id}}">
                        {{$docu->document}}
                    </option>
                    @endforeach
                @endif
            </select>
            <label for="document_id">Select Document</label> 
            @if($errors->get('document_id'))
            @foreach($errors->get('document_id') as $err)
            {{$err}}
            @endforeach
            @endif
        </div>

        <input type="submit" class="btn btn-primary" value="Save Gradewise Documents">
    </form>
</div>
@endif

@if(isset($grade_wise_document))
<div>
    <form action="/admin/grade_wise_documents/update" method="post">
        @csrf
        <input type="text" name="id" id="id" value="{{ $grade_wise_document->id }}">
        <select name="grade_id" id="grade_id">
            <option value="">Select Grade</option>
        @if(isset($grades))
            @foreach($grades as $gr)
            <option {{ $grade_wise_document->grade_id == $gr->id ? 'selected' : '' }} value="{{$gr->id}}">
                {{$gr->grade}} {{$grade_wise_document->grade_id}} {{$gr->id}}
            </option>
            @endforeach
        @endif
        </select>
        @if($errors->get('grade_id'))
        @foreach($errors->get('grade_id') as $err)
        {{$err}}
        @endforeach
        @endif
        
        <select name="document_id" id="document_id">
            <option value="">Select Document</option>
            @if(isset($documents))
                @foreach($documents as $docu)
                <option {{ $grade_wise_document->document_id == $docu->id ? 'selected' : '' }} value="{{$docu->id}}">
                    {{$docu->document}}

                </option>
                @endforeach
            @endif
        </select>
        @if($errors->get('document_id'))
        @foreach($errors->get('document_id') as $err)
        {{$err}}
        @endforeach
        @endif
        <input type="submit" value="Update Document">
    </form>



    <form action="/admin/grade_wise_documents/delete" method="post">
        @csrf
        <input type="text" name="id" id="id" value="{{ $grade_wise_document->id }}">
        <input type="text" name="grade_id" id="grade_id" value="{{ $grade_wise_document->grade_id }}">
        <input type="text" name="document_id" id="document_id" value="{{ $grade_wise_document->document_id }}">
        <input type="submit" value="Delete Document">
    </form>
</div>
@endif







<div>
    <table class="table">
      <thead>
        <tr>
            <th scope="col" class="" style="width:80px;">#</th>
            <th scope="col">Grade</th>
            <th scope="col">Document</th>
            <th scope="col" style="width:120px;">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($grade_wise_documents as $grwisedoc)
        <tr>
            <th scope="row">{{ $grwisedoc->id }}</th>
            <td>{{ $grwisedoc->grade_id }}</td>
            <td>{{ $grwisedoc->document_id }}</td>
            <td><a href="/admin/grade_wise_documents?id={{$grwisedoc->id}}">Edit / Delete</a></td>
        </tr>
        @endforeach
      </tbody>
    </table>

    @if($grade_wise_documents)
    {{ $grade_wise_documents->links() }}
    @endif
</div>

@endsection