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

        
<div class="container-fluid">
    <div class="card shadow-sm px-2">
        <div class="card-header">Nursery Admission</div>
        <div class="card-body">
            <p>Academic Year 2025-2026 (AY 2025-26)</p>
            <p>Online Application Date: 27-02-2025 to 27-03-2025</p>
            <p>Application fee: Rs: 200/-</p>
            <p>Nursery - 30 seats</p>
        </div>
        <div class="card-footer">
            <a href="#" class="btn btn-primary">View Applications</a>
        </div>
    </div>
</div>
 
<div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col" class="" style="width:80px;">#</th>
                <th scope="col" style="width:350px;"> Name  </th>
                <th scope="col" style="width:100px;"> Gender  </th>
                <th scope="col" style="width:100px;"> DOB  </th>
                <th scope="col" style="width:100px;"> Religion  </th>
                <th scope="col" style="width:150px;"> Mother Tongue  </th>
                <th scope="col" style="width:250px;"> Siblings  </th>
                <th scope="col" style="width:250px;"> Address  </th>
                <th scope="col"> Contact Number  </th>
            </tr>
        </thead>
        @foreach($applications as $app)
            <tr>
                <td>{{$app->id}}</td>
                <td> {{$app->students_name}} {{$app->fathers_name}} {{$app->surname}} {{$app->mothers_name}}   </td>
                <td> {{$app->gender}}  </td>
                <td> {{$app->date_of_birth}}  </td>
                <td> {{$app->religion}}  </td>
                <td> {{$app->mother_tongue}}  </td>
                <td>
                @foreach($app->application_siblings as $appsib)
                {{$appsib->name}} <br>
                 {{$appsib->school_college}} / Grade {{$appsib->grade}} 
                 <br> <br>
                @endforeach
                </td>
                <td> {{$app->address}} {{$app->city}}  </td>
                <td> {{$app->primary_contact_number}}  </td>
            </tr>
        @endforeach
    </table>
</div>


<!-- <div class="row">
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
</div> -->

</div>
@endif

@endsection