@extends('layouts.admin')

@section('head')
<title>Admin Dashboard</title>
@endsection

@section('content')
<h1>Admin Dashboard</h1>

<div class="container-fluid">
    <div class="row g-4">
        <div class="col-6">
            <div class="shadow rounded-3 p-4"> 
            <h1>
                {{$count = \DB::table('Applications')->where('order_status','=','Success')->count();}}
                </h1>
                <h5>Total Applications</h5>
            </div>
        </div>
        <div class="col-6">
            <div class="shadow rounded-3 p-4">
                <h1> {{
                    $Admission_Notice = DB::table('Applications')
                    ->groupBy('admission_notice_id')
                    ->count();
               }}  </h1>
                <h5> Nursery Applications </h5>
            </div>
        </div>
    </div>
</div>
@endsection