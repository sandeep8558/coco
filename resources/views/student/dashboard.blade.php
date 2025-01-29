@extends('layouts.web')

@section('head')
<title>Student</title>
@endsection

@section('content')
<div class="container">

    <h1 class="m-0 py-4">Student Dashbaord</h1>

</div>
<div class="container">

    <div class="row g-4">
        @foreach($applications as $appli)
        <div class="col-12">
                <div class="card">
                <div class="card-header m-0 p-0 {{ ($appli->order_status=='Success')? 'text-bg-success' : 'text-bg-danger'}}">
                        @if($appli->order_status == 'Success')
                        <h3 class="text-center mt-3">
                        Application submitted successfully</h3>
                        @else
                        <h3 class="text-center mt-3">
                        Application Pending For Payment</h3>
                        @endif 
                       
                        
                   
                </div>
                <div class="card-body">
                    <h5>Application ID : {{$appli->id}} </h5>
                    <h5>Student Name : 
                    {{$appli->surname}}  {{$appli->students_name}} {{$appli->fathers_name}} {{$appli->mothers_name}}
                    </h5>
                    <h5>Admission for Grade : {{$appli->grade->grade}} </h5>
                    <h5>DOB : {{$appli->date_of_birth}} </h5>
                    <h5>Contact Number : {{$appli->primary_contact_number}} </h5>
                </div>
                <div class="card-footer">
                  <h5>Tracking ID :{{$appli->tracking_id}} </h5>
                  <h5>Bank Reference Number :{{$appli->bank_ref_no}} </h5>
                  <h5>Application Status :{{$appli->order_status}} </h5>
                  
                 
                </div>
            </div>

        </div>
        @endforeach
        
    
    </div>
</div>
@endsection