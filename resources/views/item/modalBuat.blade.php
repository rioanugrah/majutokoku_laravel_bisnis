<div class="modal fade bs-example-modal-center" id="buat" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0">Form Produk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" id="upload-form" enctype="multipart/form-data">
            {{-- <form action="javascript:simpan()" method="post" id="data_simpan" enctype="multipart/form-data"> --}}
            {{-- <form action="{{ route('item.simpan') }}" method="post" id="data_simpan" enctype="multipart/form-data"> --}}
                @csrf
                <div class="modal-body">
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Kode Barang</label>
                        <div class="col-md-3">
                            <input class="form-control" type="text" name="kode_barang" placeholder="Kode Barang" id="kode_barang">
                        </div>
                        <div class="col-md-7">
                            <img class="barcode3" width="185"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Nama Barang</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" name="nama_barang" placeholder="Nama Barang" id="nama_barang">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Kategori</label>
                        <div class="col-md-10">
                            <select name="kategori" id="" class="form-control select2">
                                <option>-- Pilih Kategori --</option>
                                @foreach ($kategoris as $kategori)
                                    <option value="{{ $kategori->id }}">{{ $kategori->nama_kategori }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Deskripsi</label>
                        <div class="col-md-10">
                            <textarea name="deskripsi" class="form-control" id="" cols="30" rows="10" placeholder="Deskripsi"></textarea>
                            {{-- <input class="form-control" type="text" name="deskripsi" placeholder="Deskripsi" id="deskripsi"> --}}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Jumlah Stock</label>
                        <div class="col-md-3">
                            <input class="form-control" type="text" name="stock" placeholder="Stock" id="stock">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Harga</label>
                        <div class="col-md-4">
                            <input class="form-control" type="text" name="harga_barang" placeholder="Harga Barang" id="harga_barang">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Upload Produk</label>
                        <div class="col-md-10">
                            <input class="form-control" type="file" name="foto" id="foto">
                            <span class="text-danger" id="image-input-error"></span>
                        </div>
                        <div class="print-img" style="display:none">
                            <img src="" style="height:300px;width:500px">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success upload-image">Simpan</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
