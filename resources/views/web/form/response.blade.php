@extends('layouts.web')

@section('head')
<title>Coco School</title>
@endsection

@section('content')
    
    <div class="container bg-light mt-5 py-4 shadow">
        <h1 class="mb-3">Payment Status</h1>
        <div>
          <h5> Application Number: {{ $data["order_id"] }}</h5> 
          <h5>Application Status: {{ $data["order_status"] }} </h5>  
          <h5> Tracking ID: {{ $data["tracking_id"] }}</h5>  
          <h5>Bank Reference Number: {{ $data["bank_ref_no"] }} </h5>  
          <h5 class="mt-3"><a class="btn btn-voilet" href="/dashboard"> Dashboard </a> </h5>   
        </div>
    </div>

    <!-- https://cocoschool.in/payment/status/6 -->
@endsection
