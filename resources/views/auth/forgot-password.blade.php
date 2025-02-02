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

        <div class="col-12 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <!-- Email Address -->
            <div class="row g-4">
                <div class="col-12">           

                    <!-- <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" /> -->
                    
                    <div class="form-floating">
                        <input type="email" class="form-control" id="email" name="email" :value="old('email')" placeholder="email"  autofocus required autocomplete="username">
                        <label for="email">Email address</label>
                    </div>
                        @if($errors->get('email'))
                            @foreach($errors->get('email') as $err)
                            <div class="small text-danger mt-1">{{$err}}</div>
                            @endforeach
                        @endif
                </div>

                <div class="col-12">
                    <input type="submit" class="btn btn-primary" value="Email Password Reset Link">
                </div>

                    <!-- <div class="flex items-center justify-end mt-4">
                        <x-primary-button>
                            {{ __('Email Password Reset Link') }}
                        </x-primary-button>
                    </div> -->
            
            </div>
        </form>
    </div>
</div>
@endsection