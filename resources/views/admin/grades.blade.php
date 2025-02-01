@extends('layouts.admin')

@section('head')
<title>Grades</title>
@endsection

@section('content')

    <!-- <div class="container-fluid bg-dark">
        <div class="container text-light">
                <h4>Grades</h4>
        </div>
    </div> -->

   
        @if(!isset($grade))
        <div class="container-fluid mt-3">
            <div class="row">
                <div class="col-12">
                    <h4 class="fw-bold">Grades Manager</h4>
                </div>
                <div class="col-12">
                    <form action="/admin/grades/save" method="post">
                        @csrf
                        <div class="form-floating">
                            <input type="text" class="form-control" name="grade" id="grade">
                            <label for="grade">Enter Grade</label> 
                            @if($errors->get('grade'))
                                @foreach($errors->get('grade') as $err)
                                {{ $err }}
                                @endforeach
                            @endif
                            <input type="submit" class="btn btn-primary mt-3" value="Save Grade">
                        </div>        
                    </form>
                </div>
            </div>
        </div>
        @endif

   
    <div class="container-fluid mt-3">
        <div class="row">
            @if(isset($grade))
            <div class="col-12 d-flex"> 
            <form action="/admin/grades/update" method="post">
            @csrf
                <input type="hidden" name="id" id="id" value="{{ $grade->id }}">  
                <input type="text" name="grade" id="grade" value="{{ $grade->grade }}">
                @if($errors->get('grade'))
                @foreach($errors->get('grade') as $err)
                {{ $err }}
                @endforeach
                @endif
                <input type="submit" class="btn btn-primary mt-5" value="Update Grade"> 
            
            </form> 
        </div>
           

            <form action="/admin/grades/delete" method="post">
                @csrf
                <input type="hidden" name="id" id="id" value="{{ $grade->id }}">
                <input type="text" name="grade" id="grade" value="{{ $grade->grade }}">
                @if($errors->get('grade'))
                    @foreach($errors->get('grade') as $err)
                    {{ $err }}
                    @endforeach
                @endif
                <input type="submit" class="btn btn-primary mt-5" value="Delete Grade">
            </form>
        
        @endif
    </div>

<div class="p-3">
    <table class="table table-light table-stripped">
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
                <td class=""><a href="/admin/grades?id={{$gr->id}}">Edit / Delete</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>

    @if($grades)
    {{ $grades->links() }}
    @endif
</div>



@endsection