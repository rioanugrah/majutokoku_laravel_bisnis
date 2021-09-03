@extends('layouts.master')

@section('title')
    Portal
@endsection

@section('css')
    <link href="{{ URL::asset('public/libs/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    @component('common-components.breadcrumb')
    @slot('title') Portal @endslot
    @endcomponent
    @include('portal.modalBuat')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered dt-responsive nowrap datatable" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Portal</th>
                                <th>Url</th>
                                <th>Icon</th>
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
            ajax: "{{ route('portal') }}",
            columns: [
                {data: 'id', name: 'id'},
                {data: 'nama_portal', name: 'nama_portal'},
                {data: 'link_url', name: 'link_url'},
                {data: 'icon', name: 'icon'},
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
                url: "{{ route('portal.simpan') }}",
                data: frm.serialize(),
                cache: false,
                enctype: 'multipart/form-data',
                success: function(result){
                    // iziToast.success({
                    //     title: result.message_title,
                    //     message: result.message_content
                    // });
                    if(result.success != false){
                        iziToast.success({
                            title: result.message_title,
                            message: result.message_content
                        });
                        table.ajax.reload();
                        $('#buat').modal('hide');
                        $('#nama_portal').val('');
                        $('#link_url').val('');
                        $('#icon').val('');
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
    </script>
@endsection