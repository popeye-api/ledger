@extends('layouts.template')
<head>
    <link rel="icon" href="{!! asset('/storage/lg.jpg') !!}"/>
    <title>LEDGER @yield('title')</title>
</head>
@extends('layouts.template')
{{-- @extends('menu') --}}

@section('content')
@php
    $urlImg = asset('/storage/bg.jpg');    
@endphp


<div class="container">
    <div class="card card-size">
    <div class="row">
        <div class="col-md-4 ">
            <img src="{{$urlImg}}"class="img-bg" >
        </div>

        <div class="col-md-8 ">
<div class="card-body">
<div class="img-logo" >
<img class="img-bd" src="{{asset('/storage/lg.jpg')}}">
</div>
<h3 align="center">Ledger system</h3><br>
  <form method="POST" action="{{ route('register') }}">
    @csrf

    <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Firstname') }}</label>

        <div class="col-md-6">
            <input id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus>

            @error('firstname')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div> 

    <div class="form-group row">
        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Lastname') }}</label>

        <div class="col-md-6">
            <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lstname" autofocus>

            @error('lastname')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

        <div class="col-md-6">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

        <div class="col-md-6">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>


    <div class="form-group row mb-0">
        <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary btn-block" style="background-color:#FF7A33;">
                {{ __('Register') }}
             </button>
             <a style="color:#FF5733" class="btn btn-link offset-md-0" href="{{ ('/') }}">
                {{ __('Already have an account ?') }}
            </a>
        </div>
    </div>
</form>
  


            </div>
          </div>
    </div>
    </div>

  </div>
