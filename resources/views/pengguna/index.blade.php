@extends('layouts.master')

@section('title')
    Pengguna
@endsection

@section('css')
    <link href="{{ URL::asset('libs/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    @component('common-components.breadcrumb')
        @slot('title') Pengguna @endslot
    @endcomponent
    @include('pengguna.modalBuat')
    @include('pengguna.modalDetail')
    @include('pengguna.modalEdit')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered dt-responsive nowrap datatable" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Akses</th>
                                <th>Status</th>
                                <th>Last Seen</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')

    <script src="{{ URL::asset('libs/datatables/datatables.min.js')}}"></script>
    <script src="{{ URL::asset('libs/jszip/jszip.min.js')}}"></script>
    <script src="{{ URL::asset('libs/pdfmake/pdfmake.min.js')}}"></script>

    <script src="{{ URL::asset('js/pages/datatables.init.js')}}"></script>

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        var table = $('.datatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('pengguna') }}",
            columns: [
                {data: 'name', name: 'name'},
                {data: 'email', name: 'email'},
                {data: 'role', name: 'role'},
                {data: 'status', name: 'status'},
                {data: 'last_seen', name: 'last_seen'},
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ]
        });

        $(window).keydown(function(e) {
            if(e.keyCode == 113){
                // alert('hello');
                $('#buat').modal('show');
                // iziToast.success({
                //     title: 'Hey',
                //     message: 'What would you like to add?'
                // });
                e.preventDefault();
            }else if(e.keyCode == 114){
                table.ajax.reload();
                e.preventDefault();
            };
        });

        function simpan() {
            var frm = $('#data_simpan');
            $.ajax({
                type: 'POST',
                url: "{{ route('pengguna.simpan') }}",
                data: frm.serialize(),
                cache: false,
                enctype: 'multipart/form-data',
                success: function(result){
                    if(result.success != false){
                        iziToast.success({
                            title: result.message_title,
                            message: result.message_content
                        });
                        table.ajax.reload();
                        $('#buat').modal('hide');
                        $('#nama').val('');
                        $('#email').val('');
                        $('#akses').val('');
                    }else{
                        iziToast.error({
                            title: result.message_title,
                            message: result.message_content
                        });
                    }
                },
                error: function (request, status, error) {
                    iziToast.error({
                        title: 'Error',
                        message: error,
                    });
                }
            })
        }

        function show(id) {
            $.ajax({
                type: 'GET',
                url: "{{ url('pengguna') }}"+'/'+id,
                contentType: "application/json;  charset=utf-8",
                cache: false,
                success: function(result){
                    // alert(result.data.name);
                    document.getElementById('detail_name_user').innerHTML = result.data.name;
                    document.getElementById('detail_email_user').innerHTML = result.data.email;
                    document.getElementById('detail_akses_user').innerHTML = result.data.role;
                    // $('#detail_name_user').val(result.data.name);
                    // $('#detail_email_user').val(result.data.email);
                    // $('#detail_akses_user').val(result.data.role);
                    $('#detail').modal('show');
                }
            })
        }

        function edit(id) {
            $.ajax({
                type: 'GET',
                url: "{{ url('pengguna') }}"+'/'+id,
                contentType: "application/json;  charset=utf-8",
                cache: false,
                success: function(result){
                    // alert(result.id);
                    $('#edit_user').val(result.data.id);
                    $('#edit_nama_user').val(result.data.name);
                    $('#edit_email_user').val(result.data.email);
                    $('#edit_akses_user').val(result.data.role);
                    $('#edit').modal('show');
                }
            })
        }

        function update() {
            var frm = $('#data_edit');
            $.ajax({
                type: 'POST',
                url: "{{ route('role.update') }}",
                data: frm.serialize(),
                cache: false,
                enctype: 'multipart/form-data',
                success: function(result){
                    iziToast.success({
                        title: result.message_title,
                        message: result.message
                    });
                    table.ajax.reload();
                    $('#edit').modal('hide');
                },
                error: function (request, status, error) {
                    iziToast.error({
                        title: 'Error',
                        message: error,
                    });
                }
            })
        }

    </script>
@endsection