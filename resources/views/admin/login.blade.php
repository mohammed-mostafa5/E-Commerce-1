@extends('admin.layouts.app')
@section('title', 'Login')
@section('content')
<div class="page-wrapper">
    <div class="page-content--bge5">
        <div class="container">
            <div class="login-wrap">

                @if (session('msg'))
                <div class="alert alert-danger">
                    {{ session('msg') }}
                </div>
                @endif
    


                <div class="login-content">
                    <div class="login-logo">
                        <a href="#">
                            <img src="{{ asset('admin-assets/images/icon/logo.png') }}" alt="CoolAdmin">
                        </a>
                    </div>
                    <div class="login-form">
                        <form action="" method="post" action="{{ route('admin.login.submit') }}">
                            @csrf
                            <div class="form-group">
                                
                                <label>Email Address</label>
                                {{-- <input class="au-input au-input--full @error('email') is-invalid @enderror " type="email" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror --}}



                            <input id="email" type="email" class="au-input au-input--full @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror



                            </div>
                            <div class="form-group">
                                
                                <label>Password</label>
                                {{-- <input class="au-input au-input--full @error('password') is-invalid @enderror " type="password" name="password" placeholder="Password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror --}}






                            <input id="password" type="password" class="au-input au-input--full @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                                
                            </div>
                            <div class="login-checkbox">
                                <label>
                                    <input type="checkbox" name="remember">Remember Me
                                </label>
                            </div>
                            <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">sign in</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
 