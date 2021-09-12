<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div class="h-100">

        <div class="user-wid text-center py-4">
            <div class="user-img">
                <img src="{{ asset('images/users/avatar-2.jpg') }}" alt="" class="avatar-md mx-auto rounded-circle">
            </div>

            <div class="mt-3">

                <a href="#" class="text-dark font-weight-medium font-size-16">{{ auth()->user()->name }}</a>
                <p class="text-body mt-1 mb-0 font-size-13">{{ auth()->user()->roles->role }}</p>

            </div>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <?php 
                $kategori_menu = \App\Models\MenuKategori::select('menu_kategori')->groupBy('menu_kategori')->get();
            ?>

            <ul class="metismenu list-unstyled" id="side-menu">
                @foreach ($kategori_menu as $km)
                <li class="menu-title">{{ $km->menu_kategori }}</li>

                <?php 
                    $data_kategori_menu = \App\Models\MenuKategori::where('menu_kategori', $km->menu_kategori)->get();
                ?>

                @foreach ($data_kategori_menu as $dkm)
                    <li>
                        <a href="{{ url($dkm->menus->slug) }}" class="waves-effect">
                            <i class="{{ $dkm->menus->icon_menu }}"></i>
                            <span>{{ $dkm->menus->menu }}</span>
                        </a>
                    </li>
                @endforeach

                @endforeach
            </ul>
            {{-- <ul class="metismenu list-unstyled" id="side-menu">
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
                        <li><a href="{{ route('menu.kategori') }}">Kategori Menu</a></li>
                        <li><a href="{{ route('menu') }}">Menu</a></li>
                        <li><a href="{{ route('maintenance') }}">Maintenance</a></li>
                        <li><a href="{{ route('role') }}">Akses</a></li>
                        <li><a href="{{ route('pengguna') }}">Pengguna</a></li>
                    </ul>
                </li>

            </ul> --}}
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->