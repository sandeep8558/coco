@extends('layouts.web')

@section('head')
<title>ABCD</title>
@endsection

@section('content')
    <div class="container-fluid h-full p-0 m-0">
        <div class="row h-100 align-items-center justify-content-center">
            <div class="col-11 col-md-8 col-xl-6 col-xxl-5">
                <div class="container text-center mb-4 mt-5">
                    <h2>Coco Preschool</h2>
                    <div class="mx-auto" style="width:100px;">
                        <h1> <i class="bi bi-person-plus-fill"></i></h1> 
                    </div>
                </div>
                <div class="container shadow rounded px-4 py-5 mb-4">
                    <div class="row text-center align-items-center">
                        <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <!-- Name -->
                        <div>
                            <x-input-label for="name" :value="__('Name')" />
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>
                        <!-- Email Address -->
                        <div class="mt-4">
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                        <!-- Password -->
                        <div class="mt-4">
                            <x-input-label for="password" :value="__('Password')" />

                            <x-text-input id="password" class="block mt-1 w-full"
                                            type="password"
                                            name="password"
                                            required autocomplete="new-password" />

                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>
                        <!-- Confirm Password -->
                        <div class="mt-4">
                            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                            type="password"
                                            name="password_confirmation" required autocomplete="new-password" />

                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <input type="submit" class="btn btn-primary ms-3" value="Register">
                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                                {{ __('Already registered?') }}
                            </a>

                            <!-- <x-primary-button class="ms-4">
                                {{ __('Register') }}
                            </x-primary-button> -->
                        </div>
                        </form>
                    </div>    
                </div>
            </div>
        </div>    
    </div>
@endsection