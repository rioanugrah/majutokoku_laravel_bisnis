@extends('layouts.master')

@section('title') Profile @endsection

@section('content')

    @component('common-components.breadcrumb')
        @slot('li_1') Profile @endslot
        @slot('title') {{ auth()->user()->name }} @endslot
    @endcomponent


    <!-- start row -->
    <div class="row">
        <div class="col-md-12 col-xl-3">
            <div class="card">
                <div class="card-body">
                    <div class="profile-widgets py-3">

                        <div class="text-center">
                            <div class="">
                                <img src="public/images/users/avatar-2.jpg" alt=""
                                    class="avatar-lg mx-auto img-thumbnail rounded-circle">
                                <div class="online-circle"><i class="fas fa-circle text-success"></i></div>
                            </div>

                            <div class="mt-3 ">
                                <a href="#" class="text-dark font-weight-medium font-size-16">{{ auth()->user()->name }}</a>
                                <p class="text-body mt-1 mb-1">{{ auth()->user()->roles->role }}</p>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-3">Informasi Pribadi</h5>

                    <p class="card-title-desc">
                        Hi I'm Patrick Becker, been industry's standard dummy ultrices Cambridge.
                    </p>

                    <div class="mt-3">
                        <p class="font-size-12 text-muted mb-1">Email Address</p>
                        <h6 class="">StaceyTLopez@armyspy.com</h6>
                    </div>

                    <div class="mt-3">
                        <p class="font-size-12 text-muted mb-1">Phone number</p>
                        <h6 class="">001 951-402-8341</h6>
                    </div>

                    <div class="mt-3">
                        <p class="font-size-12 text-muted mb-1">Office Address</p>
                        <h6 class="">2240 Denver Avenue
                            Los Angeles, CA 90017</h6>
                    </div>

                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-2">My Top Skills</h5>
                    <p class="text-muted">Suspendisse mattis rutrum orci eu pellentesque. </p>
                    <ul class="list-unstyled list-inline language-skill mb-0">
                        <li class="list-inline-item badge badge-primary"><span>java</span></li>
                        <li class="list-inline-item badge badge-primary"><span>Javascript</span></li>
                        <li class="list-inline-item badge badge-primary"><span>laravel</span></li>
                        <li class="list-inline-item badge badge-primary"><span>HTML5</span></li>
                        <li class="list-inline-item badge badge-primary"><span>android</span></li>
                        <li class="list-inline-item badge badge-primary"><span>zengo</span></li>
                        <li class="list-inline-item badge badge-primary"><span>python</span></li>
                        <li class="list-inline-item badge badge-primary"><span>react</span></li>
                        <li class="list-inline-item badge badge-primary"><span>php</span></li>
                    </ul>
                </div>
            </div>

        </div>

        <div class="col-md-12 col-xl-9">

            <div class="card">
                <div class="card-body">

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#experience" role="tab">
                                <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                <span class="d-none d-sm-block">Pengalaman</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#settings" role="tab">
                                <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                                <span class="d-none d-sm-block">Settings</span>
                            </a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content p-3 text-muted">
                        <div class="tab-pane active" id="experience" role="tabpanel">
                            <div class="timeline-count mt-5">
                                <!-- Timeline row Start -->
                                <div class="row">

                                    <!-- Timeline 1 -->
                                    <div class="timeline-box col-lg-4">
                                        <div class="mb-5 mb-lg-0">
                                            <div class="item-lable bg-primary rounded">
                                                <p class="text-center text-white">2016 - 20</p>
                                            </div>
                                            <div class="timeline-line active">
                                                <div class="dot bg-primary"></div>
                                            </div>
                                            <div class="vertical-line">
                                                <div class="wrapper-line bg-light"></div>
                                            </div>
                                            <div class="bg-light p-4 rounded mx-3">
                                                <h5>Back end Developer</h5>
                                                <p class="text-muted mt-1 mb-0">Voluptatem accntium doemque lantium, totam
                                                    rem aperiam, eaque ipsa quae ab illo quasi sunt explicabo.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Timeline 1 -->

                                    <!-- Timeline 2 -->
                                    <div class="timeline-box col-lg-4">
                                        <div class="mb-5 mb-lg-0">
                                            <div class="item-lable bg-primary rounded">
                                                <p class="text-center text-white">2013 - 16</p>
                                            </div>
                                            <div class="timeline-line active">
                                                <div class="dot bg-primary"></div>
                                            </div>
                                            <div class="vertical-line">
                                                <div class="wrapper-line bg-light"></div>
                                            </div>
                                            <div class="bg-light p-4 rounded mx-3">
                                                <h5>Front end Developer</h5>
                                                <p class="text-muted mt-1 mb-0">Vivamus ultrices massa tellus, sed convallis
                                                    urna interdum eu. Pellentesque htant morbi varius mollis et quis nisi.
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- Timeline 2 -->

                                    <!-- Timeline 3 -->
                                    <div class="timeline-box col-lg-4">
                                        <div class="mb-5 mb-lg-0">
                                            <div class="item-lable bg-primary rounded">
                                                <p class="text-center text-white">2011 - 13</p>
                                            </div>
                                            <div class="timeline-line active">
                                                <div class="dot bg-primary"></div>
                                            </div>
                                            <div class="vertical-line">
                                                <div class="wrapper-line bg-light"></div>
                                            </div>
                                            <div class="bg-light p-4 rounded mx-3">
                                                <h5>UI /UX Designer</h5>
                                                <p class="text-muted mt-1 mb-0">Suspendisse potenti. senec netus malesuada
                                                    fames ac turpis egesta vitae blandit ac tempus nulla.</p>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- Timeline 3 -->
                                </div>
                                <!-- Timeline row Over -->
                            </div>
                        </div>
                        <div class="tab-pane" id="settings" role="tabpanel">
                            <form action="" method="post">
                                @csrf
                                <div class="row mt-4">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="firstname">Nama</label>
                                            <input type="text" class="form-control" id="firstname"
                                                placeholder="Nama" value="{{ $user->name }}" readonly>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="userbio">Bio</label>
                                            <textarea class="form-control" id="userbio" rows="4"
                                                placeholder="Menulis sesuatu......">
                                            
                                            </textarea>
                                        </div>
                                    </div> <!-- end col -->
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="tempat">Tempat Lahir</label>
                                            <input type="text" class="form-control" id="tempat"
                                                placeholder="Tempat Lahir" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="tanggal lahir">Tanggal Lahir</label>
                                            <input type="date" class="form-control" id="tanggal_lahir" readonly>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="jenis kelamin">Jenis Kelamin</label>
                                            <select name="jenis_kelamin" class="form-control" id="jenis_kelamin">
                                                <option>-- Pilih Jenis Kelamin --</option>
                                                <option value="Laki - Laki">Laki - Laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                            {{-- <input type="text" class="form-control" id="firstname"
                                                placeholder="Nama" value="{{ $user->name }}" readonly> --}}
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="posisi">Posisi</label>
                                            <input type="text" class="form-control" id="posisi"
                                                placeholder="Posisi" readonly>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="pendidikan">Pendidikan</label>
                                            <input type="text" class="form-control" id="pendidikan"
                                                placeholder="Pendidikan" readonly>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="sertifikasi">Sertifikasi</label>
                                            <input type="text" class="form-control" id="sertifikasi"
                                                placeholder="Sertifikasi" readonly>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="skill">Skill</label>
                                            <input type="text" class="form-control" id="skill"
                                                placeholder="Skill" readonly>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="bahasa">Bahasa</label>
                                            <input type="text" class="form-control" id="bahasa"
                                                placeholder="Bahasa" readonly>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-0">
                                            <label for="useremail">Email Address</label>
                                            <input type="email" class="form-control" id="useremail" placeholder="Email" value="{{ $user->email }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-0">
                                            <label for="userpassword">Password</label>
                                            <input type="password" class="form-control" id="userpassword"
                                                placeholder="Enter password">
                                        </div>
                                    </div> <!-- end col -->
                                </div>
                            </form>
                            <div class="btn-group mt-4">
                                <button class="btn btn-success" onclick="edit()">Edit</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Projects</h4>

                    <div class="table-responsive">
                        <table class="table table-centered mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">Projects</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Billing Name</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col" colspan="2">Payment Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Qovex admin UI</td>
                                    <td>
                                        21/01/2020
                                    </td>
                                    <td>Werner Berlin</td>
                                    <td>$ 125</td>
                                    <td><span class="badge badge-soft-success font-size-12">Paid</span></td>
                                    <td><a href="#" class="btn btn-primary btn-sm">View</a></td>
                                </tr>
                                <tr>
                                    <td>
                                        Qovex admin Logo
                                    </td>
                                    <td>16/01/2020</td>

                                    <td>Robert Jordan</td>
                                    <td>$ 118</td>
                                    <td><span class="badge badge-soft-danger font-size-12">Chargeback</span></td>
                                    <td><a href="#" class="btn btn-primary btn-sm">View</a></td>
                                </tr>
                                <tr>
                                    <td>
                                        Redesign - Landing page
                                    </td>
                                    <td>17/01/2020</td>

                                    <td>Daniel Finch</td>
                                    <td>$ 115</td>
                                    <td><span class="badge badge-soft-success font-size-12">Paid</span></td>
                                    <td><a href="#" class="btn btn-primary btn-sm">View</a></td>
                                </tr>
                                <tr>
                                    <td>
                                        Blog Template
                                    </td>
                                    <td>18/01/2020</td>

                                    <td>James Hawkins</td>
                                    <td>$ 121</td>
                                    <td><span class="badge badge-soft-warning font-size-12">Refund</span></td>
                                    <td><a href="#" class="btn btn-primary btn-sm">View</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-3">
                        <ul class="pagination pagination-rounded justify-content-center mb-0">
                            <li class="page-item">
                                <a class="page-link" href="#">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <!-- end row -->
@endsection

@section('script')
    <!-- apexcharts -->
    <script src="{{ URL::asset('public/libs/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ URL::asset('public/js/pages/profile.init.js') }}"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        function edit() {
            alert('test');
            // $('#buat').modal('show');
        }
    </script>
@endsection
