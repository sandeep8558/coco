@extends('layouts.web')

@section('head')
<title>Coco Preschool - Online Admission</title>
@endsection

@section('content')
    
    <div class="container py-4">
        <h1>Online Application Form</h1>
    </div>

    @if(!Auth::check())
    <div class="container">
        Please <a href="/login">Login</a> or <a href="/register">Register</a> to fill online admission form.
    </div>
    @endif

    @if(Auth::check())
    <div class="container">

        <form action="{{$path}}" method="post" enctype="multipart/form-data">

            @csrf

            <input type="hidden" name="step" id="step" value="{{$step+1}}">

            <!-- Selection of course -->
            @if($step == 1)
            @include("web.form.step1")
            @endif
    
            @if($step == 2)
            @include("web.form.step2")
            @endif
    
            @if($step == 3)
            @include("web.form.step3")
            @endif
    
            @if($step == 4)
            @include("web.form.step4")
            @endif
    
            @if($step == 5)
            @include("web.form.step5")
            @endif

            @if($step == 6)
            @include("web.form.step6")
            @endif

            @if($step == 7)
            @include("web.form.step7")
            @endif

            @if($step == 8)
            @include("web.form.step8")
            @endif

            @if($step == 9)
            @include("web.form.step9")
            @endif

            @if($step == 10)
            @include("web.form.step10")
            @endif

            @if($step == 11)
            @include("web.form.step11")
            @endif

            @if($step == 12)
            @include("web.form.step12")
            @endif

            @if($step > 1)
            <?php
                $prev = $step-1;

                if((session('parentguardian') == 'parent' && session('singleparent') == 'No')){

                    if($step == 5){
                        $prev = 4;
                    }

                    if($step == 6){
                        $prev = 5;
                    }

                    if($step == 8){
                        $prev = 6;
                    }

                } else if((session('parentguardian') == 'parent' && session('singleparent') == 'Yes' && session('singlewho') == 'Mother')){

                    if($step == 5){
                        $prev = 4;
                    }

                    if($step == 8){
                        $prev = 5;
                    }

                } else if((session('parentguardian') == 'parent' && session('singleparent') == 'Yes' && session('singlewho') == 'Father')){

                    if($step == 6){
                        $prev = 4;
                    }

                    if($step == 8){
                        $prev = 6;
                    }

                } else if(session('parentguardian') == 'guardian') {

                    if($step == 7){
                        $prev = 4;
                    }

                }
            ?>
            @if($step < 12)
            <a class="btn btn-voilet" href="/online_application/{{$id}}?step={{ $prev }}">Previous {{$step-1}}</a>
            @endif
            @endif

            @if($step < 12)
            <input class="btn btn-voilet" type="submit" value="Next">
            @endif

        </form>

        

        @if($step == 12)
            <a class="btn btn-voilet" href="/online_application/{{$id}}?step={{ $prev }}">Previous {{$step-1}}</a>
            @include('web.form.payment')
        @endif


    </div>
    @endif

@endsection