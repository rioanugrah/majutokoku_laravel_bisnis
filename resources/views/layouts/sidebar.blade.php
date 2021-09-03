<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div class="h-100">

        <div class="user-wid text-center py-4">
            <div class="user-img">
                <img src="public/images/users/avatar-2.jpg" alt="" class="avatar-md mx-auto rounded-circle">
            </div>

            <div class="mt-3">

                <a href="#" class="text-dark font-weight-medium font-size-16">{{ auth()->user()->name }}</a>
                <p class="text-body mt-1 mb-0 font-size-13">{{ auth()->user()->roles->role }}</p>

            </div>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Aplikasi</li>

                <li>
                    <a href="{{ route('home') }}" class="waves-effect">
                        <i class="mdi mdi-airplay"></i>
                        <span>Dashboard</span>
                    </a>
                    <a href="{{ route('item') }}" class="waves-effect">
                        <i class="bx bx-paperclip"></i>
                        <span>Item</span>
                    </a>
                    <a href="{{ route('cv') }}" class="waves-effect">
                        <i class="bx bx-paperclip"></i>
                        <span>Curriculum Vitae</span>
                    </a>
                    <a href="#" class="waves-effect">
                        <i class="bx bx-paperclip"></i>
                        <span>Transaksi</span>
                    </a>
                    <a href="#" class="waves-effect">
                        <i class="bx bx-paperclip"></i>
                        <span>Tiket</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-cogs"></i>
                        <span>Master Data</span>
                    </a>
                    {{-- <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('kategori') }}">Kategori</a></li>
                    </ul> --}}
                </li>

                <li class="menu-title">Frontend</li>

                <li>
                    <a href="#" class="waves-effect">
                        <i class="bx bx-paperclip"></i>
                        <span>Testimoni</span>
                    </a>
                    <a href="{{ route('portal') }}" class="waves-effect">
                        <i class="bx bx-paperclip"></i>
                        <span>Portal</span>
                    </a>
                </li>

                <li class="menu-title">Fitur Admin</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-cogs"></i>
                        <span>Pengaturan</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('kategori') }}">Kategori</a></li>
                        <li><a href="{{ route('role') }}">Akses</a></li>
                        <li><a href="{{ route('pengguna') }}">Pengguna</a></li>
                    </ul>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->