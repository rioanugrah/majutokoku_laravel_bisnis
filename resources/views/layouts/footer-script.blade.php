        <!-- JAVASCRIPT -->
        <script src="{{ URL::asset('public/libs/jquery/jquery.min.js')}}"></script>
        <script src="{{ URL::asset('public/libs/bootstrap/bootstrap.min.js')}}"></script>
        <script src="{{ URL::asset('public/libs/metismenu/metismenu.min.js')}}"></script>
        <script src="{{ URL::asset('public/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{ URL::asset('public/libs/node-waves/node-waves.min.js')}}"></script>

        @yield('script')

        <!-- App js -->
        <script src="{{ URL::asset('public/js/app.min.js')}}"></script>
        <script src="{{ URL::asset('public/js/toastr/iziToast.min.js')}}"></script>

        @yield('script-bottom')