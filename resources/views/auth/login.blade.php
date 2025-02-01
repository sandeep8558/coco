@extends('layouts.web')

@section('head')
<title>Login</title>
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

            <x-auth-session-status class="" :status="session('status')" />
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="row g-4">

                    <div class="col-12">
                        <div class="form-floating">
                            <input type="email" class="form-control" id="email" name="email" :value="old('email')" placeholder="email"  autofocus autocomplete="username">
                            <label for="email">Email address</label>
                        </div>
                        @if($errors->get('email'))
                        @foreach($errors->get('email') as $err)
                        <div class="small text-danger mt-1">{{$err}}</div>
                        @endforeach
                        @endif
                    </div>

                    <div class="col-12">
                        <div class="form-floating">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password"  autocomplete="current-password">
                            <label for="password">Password</label>
                        </div>
                        @if($errors->get('password'))
                        @foreach($errors->get('password') as $err)
                        <div class="small text-danger mt-1">{{$err}}</div>
                        @endforeach
                        @endif
                    </div>
                
                    <div class="col-12">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                            <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                    </div>
                
                    <div class="col-12">
                        <input type="submit" class="btn btn-primary" value="Login">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
                    </div>

                </div>
            </form>
        </div>

    </div>
</div>



@endsection