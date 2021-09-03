@extends('layouts.master')

@section('title')
    Akses
@endsection

@section('css')
    <link href="{{ URL::asset('public/libs/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    @component('common-components.breadcrumb')
        @slot('title') Akses Pengguna @endslot
    @endcomponent
    @include('roles.modalBuat')
    @include('roles.modalDetail')
    @include('roles.modalEdit')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered dt-responsive nowrap datatable" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Role</th>
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

    <script src="{{ URL::asset('public/libs/datatables/datatables.min.js')}}"></script>
    <script src="{{ URL::asset('public/libs/jszip/jszip.min.js')}}"></script>
    <script src="{{ URL::asset('public/libs/pdfmake/pdfmake.min.js')}}"></script>

    <script src="{{ URL::asset('public/js/pages/datatables.init.js')}}"></script>

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        var table = $('.datatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('role') }}",
            columns: [
                {data: 'id', name: 'id'},
                {data: 'role', name: 'role'},
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
                url: "{{ route('role.simpan') }}",
                data: frm.serialize(),
                cache: false,
                enctype: 'multipart/form-data',
                success: function(result){
                    iziToast.success({
                        title: 'Success',
                        message: result.message
                    });
                    table.ajax.reload();
                    $('#buat').modal('hide');
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
                url: "{{ url('akses_pengguna') }}"+'/'+id,
                contentType: "application/json;  charset=utf-8",
                cache: false,
                success: function(result){
                    // alert(result.id);
                    $('#detail_nama_akses').val(result.data.role);
                    $('#detail').modal('show');
                }
            })
        }

        function edit(id) {
            $.ajax({
                type: 'GET',
                url: "{{ url('akses_pengguna') }}"+'/'+id,
                contentType: "application/json;  charset=utf-8",
                cache: false,
                success: function(result){
                    // alert(result.id);
                    $('#edit_role').val(result.data.id);
                    $('#edit_nama_akses').val(result.data.role);
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
                        title: 'Success',
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