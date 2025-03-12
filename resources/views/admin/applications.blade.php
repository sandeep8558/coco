@extends('layouts.admin')

@section('head')
<title>Application</title>
@endsection

@section('content')

<!-- <div>
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
</div> -->
<div class="m-4">
    <div class="row">
        <div class="col-8">
            <select class="form-select" aria-label="Default select example">
                <option selected>Select Applications</option>
                <option value="all" id="all">All</option>
                <option value="success" id="success">Successful</option>
                <option value="failed" id="failed">Failed</option>
            </select>
       </div>
       <div class="col-4">
            <button class="btn btn-primary btn-md" type="submit">Go</button>
       </div>
    </div>

</div>


<div class="">
    <div class="row p-3 gy-3">
        @foreach($notice->applications as $noticeapp)
            <div class="col-sm-12 col-lg-6">
                <div class="card shadow">
                    <div class="card-header {{ ($noticeapp->order_status=='Success')? 'text-bg-success' : 'text-bg-danger'}} d-flex justify-content-between">
                        <div class="">
                        <h5> {{$noticeapp->students_name}} {{$noticeapp->fathers_name}} {{$noticeapp->surname}} {{$noticeapp->mothers_name}}</h5>
                        </div>
                        <div class=""><h3><i class="bi bi-calendar-date-fill"></i> </h3></div>
                    </div>
                    <div class="card-body mx-0 my-0 px-3 py-3">
                    <div> <p>Application Id:  {{$noticeapp->id}}</p> </div>
                    <div> <p>DOB:  {{$noticeapp->date_of_birth}}</p> </div>
                    <div> <p>Gender:  {{$noticeapp->gender}}</p> </div>
                    <div> <p>Contact No:  {{$noticeapp->primary_contact_number}}</p> </div>
                    <div class="col-6 mb-3"> 
                    <div class="input-group">
                        <!-- <div class="input-group-prepend">
                            <span class="bi bi-calendar"></span> 
                        </div> -->
                        <label for="">Appointment Date : </label>
                        <input type="date" class="form-control" id="datepicker">
                    </div>
                         
                    </div>
               
                    </div>
                    <div class="card-footer d-flex gap-1 justify-content-between">  
                        <a href="/admin/applications/{{$noticeapp->id}}" class="btn btn-primary">View Application</a>
                        <!-- <a href="/admin/notice/{{$notice->id}}/applications" class="btn btn-primary">Download Application</a> -->
                        <a href="/online_application/download/application/{{$noticeapp->id}}" target="__blank" class="btn btn-primary">Download</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>


@endsection