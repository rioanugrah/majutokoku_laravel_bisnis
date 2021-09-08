{{-- @extends('layouts.master-without-nav') --}}
@extends('layouts.authentication.app')

@section('title') Pendaftaran Akun @endsection

@section('body')

<div class="container-fluid">
    <div class="row row-height">
        <div class="col-xl-4 col-lg-4 content-left">
            <div class="content-left-wrapper">
                <a href="{{ url('login') }}" id="logo"><img src="{{ asset('images/logo_white_square.png') }}" alt="" width="45" height="45"></a>
                <div id="social">
                    <ul>
                        <li><a href="#0"><i class="icon-facebook"></i></a></li>
                        <li><a href="#0"><i class="icon-twitter"></i></a></li>
                        <li><a href="#0"><i class="icon-google"></i></a></li>
                        <li><a href="#0"><i class="icon-linkedin"></i></a></li>
                    </ul>
                </div>
                <!-- /social -->
                <div>
                    <figure><img src="{{ asset('login_new/img/info_graphic_1.svg') }}" alt="" class="img-fluid" width="270" height="270"></figure>
                    <h2>Pendaftaran Akun</h2>
                    {{-- <p>Tation argumentum et usu, dicit viderer evertitur te has. Eu dictas concludaturque usu, facete detracto patrioque an per, lucilius pertinacia eu vel.</p>
                    <a href="#0" class="btn_1 rounded yellow">Purchase this template</a>
                    <a href="#start" class="btn_1 rounded mobile_btn yellow">Start Now!</a> --}}
                </div>
                <div class="copy">© {{ date('Y') }} Majutokoku</div>
            </div>
            <!-- /content-left-wrapper -->
        </div>
        
        <!-- /content-left -->
        <div class="col-xl-8 col-lg-8 content-right" id="start">
            <div id="wizard_container">
                <div id="top-wizard">
                    <span id="location"></span>
                    <div id="progressbar"></div>
                </div>
                <!-- /top-wizard -->
                <form action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input id="website" type="text" value="">
                    <!-- Leave for security protection, read docs for details -->
                    <div id="middle-wizard">
                        <div class="step">
                            <h2 class="section_title">Pendaftaran</h2>
                            <h3 class="main_question">Akun</h3>
                            <div class="form-group add_top_30">
                                <label for="name">Nama Lengkap</label>
                                <input type="text" name="name" id="name" class="form-control required" onchange="getVals(this, 'name_field');">
                            </div>
                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input type="email" name="email" id="email" class="form-control required" onchange="getVals(this, 'email_field');">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password" class="form-control required">
                            </div>
                            <div class="form-group">
                                <label for="confirm_password">Konfirmasi Password</label>
                                <input type="password" name="password_confirmation" id="confirm_password" class="form-control required">
                            </div>
                        </div>

                        <div class="step">
                            <h2 class="section_title">Data Pribadi</h2>
                            <h3 class="main_question">Isi data diri dengan benar</h3>
                            <div class="form-group">
                                <label for="tempat_lahir">Tempat Lahir</label>
                                <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="tanggal_lahir">Tanggal Lahir</label>
                                <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                <div class="form-group">
                                    <label class="container_radio version_2">Laki - Laki
                                        <input type="radio" name="jenis_kelamin" value="Laki - Laki" class="">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="container_radio version_2">Perempuan
                                        <input type="radio" name="jenis_kelamin" value="Perempuan" class="">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="step">
                            <h2 class="section_title">Data Lainnya</h2>
                                <h3 class="main_question">Isi data diri dengan benar</h3>
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="deskripsi">Deskripsi Anda</label>
                                        <textarea name="bio" id="deskripsi" class="form-control" cols="30" rows="10"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="pendidikan">Pendidikan Terakhir</label>
                                        <input type="text" name="pendidikan" id="pendidikan" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="sertifikasi">Sertifikasi</label>
                                        <input type="text" name="sertifikasi" id="sertifikasi" class="form-control">
                                        <small>* Inputan bisa dikosongkan bila belum mempunyai </small>
                                    </div>
                                </div>
                        </div>

                        <div class="step">
                            <h2 class="section_title">Kemampuan Lainnya</h2>
                                <h3 class="main_question">Isi data diri dengan benar</h3>
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="skill">Skill Anda</label>
                                        <textarea name="skill" id="skill" class="form-control" cols="30" rows="10"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="bahasa">Bahasa</label>
                                        <input type="text" name="bahasa" id="bahasa" class="form-control">
                                    </div>
                                </div>
                        </div>

                        <div class="submit step" id="end">
                            <div class="summary">
                                <div class="wrapper">
                                    <h3>Terima kasih atas waktunya<br><span id="name_field"></span>!</h3>
                                    <p>Kami akan menghubungi Anda segera di alamat email berikut <strong id="email_field"></strong></p>
                                </div>
                                <div class="text-center">
                                    <div class="form-group terms">
                                        <label class="container_check">Harap setujui Syarat <a href="#" data-toggle="modal" data-target="#terms-txt">dan ketentuan kami</a> sebelum Kirim
                                            <input type="checkbox" value="Yes" class="required">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- /middle-wizard -->
                    <div id="bottom-wizard">
                        <button type="button" name="backward" class="backward">Prev</button>
                        <button type="button" name="forward" class="forward">Next</button>
                        <button type="submit" name="process" class="submit">Submit</button>
                    </div>
                    <!-- /bottom-wizard -->
                </form>
            </div>
            <!-- /Wizard container -->
        </div>
        <!-- /content-right-->
    </div>
    <!-- /row-->
</div>
<!-- /container-fluid -->

<div class="cd-overlay-nav">
    <span></span>
</div>
<!-- /cd-overlay-nav -->

<div class="cd-overlay-content">
    <span></span>
</div>
<!-- /cd-overlay-content -->
@endsection