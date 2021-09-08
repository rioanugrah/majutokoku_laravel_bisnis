{{-- @extends('layouts.master-without-nav') --}}
@extends('layouts.authentication.app')

@section('title') Login @endsection

@section('body')
<div class="container-fluid">
    <div class="row row-height">
        <div class="col-xl-4 col-lg-4 content-left">
            <div class="content-left-wrapper">
                <a href="{{ url('login') }}" id="logo"><img src="{{ asset('images/logo_white_square.png') }}" alt="" width="45" height="45"></a>
                <div id="social">
                    <ul>
                        <li><a href="#"><i class="icon-facebook"></i></a></li>
                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                        <li><a href="#"><i class="icon-google"></i></a></li>
                        <li><a href="#"><i class="icon-linkedin"></i></a></li>
                    </ul>
                </div>
                <!-- /social -->
                <div>
                    <figure><img src="{{ asset('login_new/img/info_graphic_1.svg') }}" alt="" class="img-fluid" width="270" height="270"></figure>
                    <h2>Login Majutokoku</h2>
                </div>
                <div class="copy">© {{ date('Y') }} Majutokoku</div>
            </div>
            <!-- /content-left-wrapper -->
        </div>
        <!-- /content-left -->
        <div class="col-xl-8 col-lg-8 content-right">
            <div id="wizard_container">
                <form action="{{ route('login') }}" method="post">
                    @csrf
                    <div class="form-group add_top_30">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror required" @if(old('email')) value="{{ old('email') }}" @else value="" @endif>
                        @error('email')
                            <span class="alert alert-danger mt-4 mb-4" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror required">
                        @error('password')
                            <span class="alert alert-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group mt-4 mb-4">
                        <a href="{{ route('register') }}" class="text-muted"><i class="mdi mdi-lock mr-1"></i> {{ __('Daftar Akun? klik disini!') }}</a><br>
                        <a href="{{ route('password.request') }}" class="text-muted"><i class="mdi mdi-lock mr-1"></i> {{ __('Lupa Password?') }}</a>
                    </div>
                    <button type="submit" class="submit">Login</button>
                </form>
            </div>
            <!-- /Wizard container -->
        </div>
        <!-- /content-right-->
    </div>
    <!-- /row-->
</div>
@endsection