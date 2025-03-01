@extends('layouts.admin')

@section('head')
<title>Application</title>
@endsection

@section('content')
<h1>Application</h1>

<div class="">

    @foreach($admission_notices as $notice)
    <div class="container-fluid">
        <div class="card shadow-sm px-2">
            <div class="card-header">{{ $notice->notification_title }}</div>
            <div class="card-body">
                <p>{{ $notice->academic_year->title }} ({{ $notice->academic_year->alias }})</p>
                <p>Online Application Date: {{ $notice->start_date }} to {{ $notice->end_date }}</p>
                <p>Application fee: Rs: {{$notice->application_fee}}/-</p>
                @foreach($notice->admission_notice_grade_seats as $seat)
                <p>{{ $seat->grade->grade }} - {{ $seat->seats }} seats</p>
                @endforeach
            </div>
            <div class="card-footer">
                <a href="/admin/notice/{{$notice->id}}/applications" class="btn btn-primary">View Applications</a>
            </div>
        </div>
    </div>
    @endforeach
    
    

</div>

@endsection