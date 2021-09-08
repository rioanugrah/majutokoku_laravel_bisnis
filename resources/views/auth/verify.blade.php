@extends('layouts.authentication.app')

@section('title') Verifikasi Akun @endsection

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
                    <h2>Verifikasi Akun</h2>
                </div>
                <div class="copy">© {{ date('Y') }} Majutokoku</div>
            </div>
            <!-- /content-left-wrapper -->
        </div>
        <!-- /content-left -->
        <div class="col-xl-8 col-lg-8 content-right">
            <div id="wizard_container">
                <h2 class="section_title">Verifikasi</h2>
                <h3 class="main_question">Akun</h3>

                <div class="form-group add_top_30">
                    @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                        {{ __('A fresh verification link has been sent to your email address.') }}
                    </div>
                    @endif
                    {{ __('Sebelum melanjutkan, harap periksa email Anda untuk tautan verifikasi.') }}
                    {{ __('Jika Anda tidak menerima email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('klik di sini untuk meminta yang lain') }}</button>.
                    </form>
                </div>

                <div class="form-group add_top_30">
                    <p>Sudah memiliki akun ? <a href="/login" class="font-weight-medium text-primary"> Login</a> </p>
                </div>
            </div>
            <!-- /Wizard container -->
        </div>
        <!-- /content-right-->
    </div>
    <!-- /row-->
</div>
@endsection