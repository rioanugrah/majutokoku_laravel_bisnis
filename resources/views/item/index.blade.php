@extends('layouts.master')

@section('title')
    Item
@endsection

@section('css')
    <link href="{{ URL::asset('public/libs/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{URL::asset('public/libs/select2/select2.min.css')}}" rel="stylesheet" type="text/css" />

@endsection

@section('content')
    @component('common-components.breadcrumb')
    @slot('title') Item @endslot
    @endcomponent
    @include('item.modalBuat')
    @include('item.modalDetail')
    @include('item.modalEdit')
    @include('item.modalBarcode')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="alert alert-success" role="alert">
                        <b>Cara Menggunakan :</b>
                        <ul>
                            <li>Tekan <b>F2</b> untuk membuat form baru</li>
                            <li>Tekan <b>F3</b> untuk refresh table</li>
                            <li>Tekan <b>F4</b> untuk download barcode</li>
                        </ul>
                    </div>
                    <table class="table table-bordered dt-responsive nowrap datatable" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>Kode Barang</th>
                                {{-- <th>Barcode</th> --}}
                                <th>Nama Barang</th>
                                <th>Kategori</th>
                                <th>Foto</th>
                                <th>Harga</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                    <div class="alert alert-danger print-error-msg" style="display:none">
                        <ul></ul>
                        <div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ URL::asset('public/libs/datatables/datatables.min.js')}}"></script>
    <script src="{{ URL::asset('public/libs/jszip/jszip.min.js')}}"></script>
    <script src="{{ URL::asset('public/libs/pdfmake/pdfmake.min.js')}}"></script>

    <script src="{{ URL::asset('public/js/JsBarcode.all.min.js')}}"></script>
    <script src="{{ URL::asset('public/libs/select2/select2.min.js')}}"></script>
    <script src="{{ URL::asset('public/js/pages/datatables.init.js')}}"></script>

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(".select2").select2();

        var table = $('.datatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('item') }}",
            columns: [
                {data: 'kode_barang', name: 'kode_barang'},
                // {data: 'barcode', name: 'barcode'},
                {data: 'nama_barang', name: 'nama_barang'},
                {data: 'kategori', name: 'kategori'},
                {data: 'foto', name: 'foto'},
                {data: 'harga_barang', name:'harga_barang'},
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ]
        });

        // JsBarcode("#barcode3", "9780199532179", {
		// 	format:"EAN13",
		// 	displayValue:true,
		// 	fontSize:20
		// });

        $(document).ready(function(){
            $("#kode_barang").change(function(){
                // alert($("#kode_barang").val());
                var kode_barang = parseInt($("#kode_barang").val());
                JsBarcode(".barcode3", kode_barang, {
                    format:"CODE39",
                    displayValue:true,
                    fontSize:20
                });
            });
        });

        // $('#kode_barang').change(function(){
        //     JsBarcode("#barcode3", $('#kode_barang').val(), {
        //         format:"EAN13",
        //         displayValue:true,
        //         fontSize:20
        //     });
        // })

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
            }else if(e.keyCode == 115){
                $('#modalBarcode').modal('show');
                e.preventDefault();
            };
        });
        // var options = { 
        //     complete: function(response) 
        //     {
        //         if($.isEmptyObject(response.responseJSON.error)){
        //             $("input[name='judul']").val('');
        //         $(".print-img").css('display','block');
        //         $(".print-img").find('img').attr('src','/gambar/'+response.responseJSON.gambar);
        //             alert('Upload gambar berhasil.');
        //         }else{
        //             printErrorMsg(response.responseJSON.error);
        //         }
        //     }
        // };

        // $("body").on("click",".upload-image",function(e){
        //     $(this).parents("form").ajaxForm(options);
        // });

        function printErrorMsg (msg) {
            $(".print-error-msg").find("ul").html('');
            $(".print-error-msg").css('display','block');
            $.each( msg, function( key, value ) {
                $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
            });
        }

        $('#upload-form').submit(function(e) {
            e.preventDefault();
            let formData = new FormData(this);
            $('#image-input-error').text('');

            $.ajax({
                type:'POST',
                url: "{{ route('item.simpan') }}",
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

        $('#update-upload-form').submit(function(e) {
            e.preventDefault();
            let formData = new FormData(this);
            $('#image-input-error').text('');

            $.ajax({
                type:'POST',
                url: "{{ route('item.update') }}",
                data: formData,
                contentType: false,
                processData: false,
                success: (result) => {
                    if(result.success != false){
                        iziToast.success({
                            title: result.message_title,
                            message: result.message_content
                        });
                        $('#edit_foto').val('');
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

        function detail(kode_barang) {
            $.ajax({
                type: 'GET',
                url: "{{ url('item/detail') }}"+'/'+kode_barang,
                contentType: "application/json;  charset=utf-8",
                cache: false,
                success: function(result){
                    // alert(result.id);
                    // document.getElementById('detail_kode_barang').innerHTML=result.data.kode_barang;
                    document.getElementById('detail_nama_barang').innerHTML=result.data.nama_barang;
                    document.getElementById('detail_barang').innerHTML=result.data.nama_barang;
                    document.getElementById('detail_kategori').innerHTML=result.data.kategori;
                    document.getElementById('detail_deskripsi').innerHTML=result.data.deskripsi;
                    document.getElementById('detail_stock').innerHTML=result.data.stock;
                    document.getElementById('detail_harga').innerHTML=result.data.harga_barang;
                    // document.getElementById('detail_barcode').innerHTML=result.data.barcode;
                    // $('#detail_nama_barang').val(result.data.nama_barang);
                    var kode_barang = parseInt(result.data.barcode);
                    JsBarcode(".detail_barcode", kode_barang, {
                        format:"CODE39",
                        displayValue:true,
                        fontSize:20
                    });
                    $('#detail').modal('show');
                }
            })
        }
        function edit(kode_barang) {
            $.ajax({
                type: 'GET',
                url: "{{ url('item/edit') }}"+'/'+kode_barang,
                contentType: "application/json;  charset=utf-8",
                cache: false,
                success: function(result){
                    // alert(result.id);
                    document.getElementById('edit_nama_barang').innerHTML='Edit - '+result.data.nama_barang;
                    $('#edit_kode_barang').val(result.data.kode_barang);
                    $('#edit_barang').val(result.data.nama_barang);
                    $('#edit_deskripsi').val(result.data.deskripsi);
                    $('#edit_stock').val(result.data.stock);
                    $('#edit_harga_barang').val(result.data.harga_barang);
                    document.getElementById('edit_display').innerHTML = result.data.foto;
                    $('#edit').modal('show');
                }
            })
        }

        function simpan() {
            var frm = $('#data_simpan');
            $.ajax({
                type: 'POST',
                url: "{{ route('item.simpan') }}",
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
                        // $('#nama_portal').val('');
                        // $('#link_url').val('');
                        // $('#icon').val('');
                    }else{
                        iziToast.error({
                            // title: result.message_title,
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
            })
        }
    </script>
@endsection