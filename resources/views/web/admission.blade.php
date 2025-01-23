@extends('layouts.web')

@section('head')
<title>Coco Preschool - Online Admission</title>
@endsection

@section('content')
    <div class="container py-4">
        <h1>Admission</h1>
    </div>

    @foreach($admission_notices as $notice)
    <div class="container shadow p-4 rounded">
        <h4 class="mb-0">{{$notice->notification_title}}</h4>
        <p class="mb-2">{{ $notice->academic_year->title }} ({{ $notice->academic_year->alias }})</p>
        Online Application Date: {{ date('d-m-Y', strtotime($notice->start_date)) }} to {{ date('d-m-Y', strtotime($notice->end_date)) }} <br>
        Application fee: Rs: {{ $notice->application_fee }}/-

        @foreach($notice->admission_notice_grade_seats as $angs)
        <div>{{ $angs->grade->grade }} - {{ $angs->seats }} seats</div>
        @endforeach
        <a class="btn btn-primary mt-2" href="/online_application/{{$notice->id}}">Apply Online</a>
    </div>
    @endforeach


@endsection
