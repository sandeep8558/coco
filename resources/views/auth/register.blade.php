@extends('layouts.web')

@section('head')
<title>ABCD</title>
@endsection

@section('content')
    <div class="row h-100 justify-content-center align-items-center py-6">
        
        <div class="col-11 col-md-8 col-lg-6 col-xl-5 col-xxl-3">

            <div class="container text-center mb-4 mt-5">
                <h2>Coco Preschool</h2>
                <div class="mx-auto" style="width:100px;">
                    <h1> <i class="bi bi-person-fill-lock"></i> </h1> 
                </div>
            </div>

            <div class="container">

                <form method="POST" action="{{ route('register') }}">
                @csrf
                    <div class="row g-4">
                        <!-- Name -->
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="name" name="name" :value="old('name')" placeholder="name" required autofocus autocomplete="name">
                                <label for="name">Name</label>
                            </div>
                            @if($errors->get('name'))
                            @foreach($errors->get('name') as $err)
                            <div class="small text-danger mt-1">{{$err}}</div>
                            @endforeach
                            @endif
                        </div>
                
                        <!-- Email Address -->
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="email" name="email" :value="old('email')" placeholder="email"  required autofocus autocomplete="username">
                                <label for="email">Email address</label>
                            </div>
                            @if($errors->get('email'))
                            @foreach($errors->get('email') as $err)
                            <div class="small text-danger mt-1">{{$err}}</div>
                            @endforeach
                            @endif
                        </div>

                        <!-- Password -->       
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password"  required autocomplete="new-password">
                                <label for="password">Password</label>
                            </div>
                            @if($errors->get('password'))
                            @foreach($errors->get('password') as $err)
                            <div class="small text-danger mt-1">{{$err}}</div>
                            @endforeach
                            @endif
                        </div>

                        <!-- Confirm Password -->
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="password_confirmation"  required autocomplete="new-password">
                                <label for="password_confirmation">Password</label>
                            </div>
                            @if($errors->get('password_confirmation'))
                                @foreach($errors->get('password_confirmation') as $err)
                                <div class="small text-danger mt-1">{{$err}}</div>
                                @endforeach
                            @endif
                        </div>
                        

                        <div class="flex items-center justify-end mt-4">
                            <input type="submit" class="btn btn-primary ms-3" value="Register">
                            @if (Route::has('login'))
                                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                                    {{ __('Already registered?') }}
                            </a>
                            @endif
                        </div>
                    </div> 
                </form>  
            </div>
        </div>    
    </div>
@endsection