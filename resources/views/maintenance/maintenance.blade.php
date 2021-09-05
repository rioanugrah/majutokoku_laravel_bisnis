@extends('layouts.master')

@section('title')
    Maintenance
@endsection

@section('css')
    <link href="{{ URL::asset('public/libs/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
    @component('common-components.breadcrumb')
        @slot('title') Maintenance @endslot
    @endcomponent
    @include('maintenance.modalBuat')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header pull-right">
                    <button class="btn btn-success" onclick="modal_buat()">Tambah</button>
                </div>
                <div class="card-body">
                    <table class="table table-bordered dt-responsive nowrap datatable" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Url</th>
                                <th>Title</th>
                                <th>Deskkripsi</th>
                                <th>Mulai</th>
                                <th>Sampai</th>
                                <th>Status</th>
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
{{-- <script src="{{ URL::asset('public/libs/pdfmake/pdfmake.min.js')}}"></script> --}}

<script src="{{ URL::asset('public/js/pages/datatables.init.js')}}"></script>

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    function modal_buat() {
        $('#buat').modal('show');
    }
    var table = $('.datatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('maintenance') }}",
        columns: [
            {data: 'id', name: 'id'},
            {data: 'url', name: 'url'},
            {data: 'title', name: 'title'},
            {data: 'deskripsi', name: 'deskripsi'},
            {data: 'mulai', name: 'mulai'},
            {data: 'sampai', name: 'sampai'},
            {data: 'status', name: 'status'},
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
        }
    });

    $('#upload-form').submit(function(e) {
        e.preventDefault();
        let formData = new FormData(this);
        $('#image-input-error').text('');

        $.ajax({
            type:'POST',
            url: "{{ route('maintenance.simpan') }}",
            data: formData,
            contentType: false,
            processData: false,
            success: (result) => {
                if(result.success != false){
                    iziToast.success({
                        title: result.message_title,
                        message: result.message_content
                    });
                    this.reset();
                    table.ajax.reload();
                }else{
                    iziToast.error({
                        title: result.success,
                        message: result.error
                    });
                }
            },
            error: function (request, status, error) {
                iziToast.error({
                    title: 'Error',
                    message: error,
                });
            }
        });
    });
</script>
@endsection