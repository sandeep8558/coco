@extends('layouts.web')

@section('head')
<title>Login</title>
@endsection

@section('content')
<div class="container-fluid m-0 p-0 h-full">
    <div class="row h-100 justify-content-center align-items-center">
    
        <div class="col-11 col-md-8 col-xl-6 col-xxl-5">
            <div class="container text-center mb-4 mt-5">
                <h2>Coco Preschool</h2>
                <div class="mx-auto" style="width:100px;">
                   <h1> <i class="bi bi-person-fill-lock"></i> </h1> 
                   
                </div>

            </div>
            <div class="container shadow rounded px-4 py-5 mb-4">
            <div class="row text-center align-items-center justify-content-center">
                <x-auth-session-status class="mb-4" :status="session('status')" />
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                        <!-- Email Address -->
                        <div class="col-12 mb-4">
                  
                                <x-input-label for="email" :value="__('Email')" />
                                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                     
                        </div>
                    
                        <!-- Password -->
                        <div class="col-12 mb-4">
                            <x-input-label for="password" :value="__('Password')" />
                    
                            <x-text-input id="password" class="block mt-1 w-full"
                                            type="password"
                                            name="password"
                                            required autocomplete="current-password" />
                    
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>
                    
                        <!-- Remember Me -->
                        <div class="col-12 block mt-4">
                            <label for="remember_me" class="inline-flex items-center">
                                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                            </label>
                        </div>
                    
                        <div class="col-12 flex items-center justify-end mt-4">
                            <input type="submit" class="btn btn-primary ms-3" value="Login">
                            @if (Route::has('password.request'))
                                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                            @endif
                    
                            <!-- <x-primary-button class="btn ms-3">
                                {{ __('Log in') }}
                             </x-primary-button> -->
                             
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



@endsection