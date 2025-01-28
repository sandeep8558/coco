@extends('layouts.web')

@section('head')
<title>Coco School</title>
@endsection

@section('content')
    
    <div class="container py-4">
        <h1>Payment Status</h1>
        <div>
            Application Number: {{ $data["order_id"] }}
        </div>
        <div>
            Order Status: {{ $data["order_status"] }}
        </div>
        <div>
            Tracking ID: {{ $data["tracking_id"] }}
        </div>
        <div>
            Bank Reference Number: {{ $data["bank_ref_no"] }}
        </div>
        <div>
            <a href="/dashboard">Go to dashboard to see application</a>
        </div>
    </div>


@endsection
