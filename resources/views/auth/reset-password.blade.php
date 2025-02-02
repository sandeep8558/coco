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
            <form method="POST" action="{{ route('password.store') }}">
            @csrf
            <div class="row g-4">
                <!-- Password Reset Token -->
                <input type="hidden" name="token" value="{{ $request->route('token') }}">

                <!-- Email Address -->
                <!-- <div>
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div> -->
                <div class="col-12">
                    <div class="form-floating">
                        <input type="email" class="form-control" id="email" name="email" :value="old('email')" placeholder="email" required autofocus autocomplete="username">
                        <label for="email">Email address</label>
                    </div>
                    @if($errors->get('email'))
                    @foreach($errors->get('email') as $err)
                    <div class="small text-danger mt-1">{{$err}}</div>
                    @endforeach
                    @endif
                </div>

                <!-- Password -->
                <!-- <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" />
                    <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div> -->
                <div class="col-12">
                    <div class="form-floating">
                        <input type="password" class="form-control" id="password" name="password" required placeholder="Password"  autocomplete="new-password">
                        <label for="password">Password</label>
                    </div>
                    @if($errors->get('password'))
                    @foreach($errors->get('password') as $err)
                    <div class="small text-danger mt-1">{{$err}}</div>
                    @endforeach
                    @endif
                </div>

                <!-- Confirm Password -->
                <!-- <div class="mt-4">
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                    <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                        type="password"
                                        name="password_confirmation" required autocomplete="new-password" />

                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div> -->
                <div class="col-12">
                    <div class="form-floating">
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Password"   required autocomplete="new-password">
                        <label for="password_confirmation">Confirm Password</label>
                    </div>
                    @if($errors->get('password_confirmation'))
                    @foreach($errors->get('password_confirmation') as $err)
                    <div class="small text-danger mt-1">{{$err}}</div>
                    @endforeach
                    @endif
                </div>

                <!-- <div class="flex items-center justify-end mt-4">
                    <x-primary-button>
                        {{ __('Reset Password') }}
                    </x-primary-button>
                </div> -->
                <div class="col-12">
                    <input type="submit" class="btn btn-primary" value="Reset Password">
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection