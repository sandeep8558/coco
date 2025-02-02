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
            <div class="row g-4">
                <div class="col-12 text-sm text-gray-600">
                    {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
                </div>
                <form method="POST" action="{{ route('password.confirm') }}">
                @csrf
                <!-- Password -->
                <div class="col-12 mb-3 pt-3">
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

                <!-- <div>
                    <x-input-label for="password" :value="__('Password')" />

                    <x-text-input id="password" class="block mt-1 w-full"
                                    type="password"
                                    name="password"
                                    required autocomplete="current-password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div> -->

                <div class="col-12">
                    <input type="submit" class="btn btn-primary" value="Confirm">
                </div>
            
                <!-- <div class="flex justify-end mt-4">
                    <x-primary-button>
                        {{ __('Confirm') }}
                    </x-primary-button>
                </div> -->
                </form>
            </div>
        </div>
    </div>
</div>
@endsection