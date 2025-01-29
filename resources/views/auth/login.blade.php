@extends('layouts.web')

@section('head')
<title>Login</title>
@endsection

@section('content')
    <div class="container py-4">
        <x-auth-session-status class="" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <label for="email" />Email</label>
                <input id="email" class="" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                @if($errors->get('email'))
                @foreach($errors->get('email') as $err)
                {{ $err }}
                @endforeach
                @endif
            </div>

            <div class="">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class=""
                                type="password"
                                name="password"
                                required autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" class="" />
            </div>

            <div class="">
                <label for="remember_me" class="">
                    <input id="remember_me" type="checkbox" class="" name="remember">
                    <span class="">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="">
                @if (Route::has('password.request'))
                    <a class="" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-primary-button class="btn btn-primary">
                    {{ __('Log in') }}
                </x-primary-button>
            </div>
        </form>

    </div>
@endsection