@extends('layouts.admin')

@section('head')
<title>Application</title>
@endsection

@section('content')

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
        @foreach($notice->applications as $app)
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

@endsection