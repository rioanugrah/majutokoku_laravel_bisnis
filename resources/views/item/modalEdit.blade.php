<div class="modal fade bs-example-modal-center" id="edit" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="edit_nama_barang"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="update-upload-form" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Kode Barang</label>
                        <div class="col-md-3">
                            <input class="form-control" type="text" name="edit_kode_barang" placeholder="Kode Barang" readonly id="edit_kode_barang">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Nama Barang</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" name="edit_nama_barang" placeholder="Nama Barang" id="edit_barang">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Kategori</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" name="edit_kategori" placeholder="Kategori" id="edit_kategori">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Deskripsi</label>
                        <div class="col-md-10">
                            <textarea name="edit_deskripsi" class="form-control" id="edit_deskripsi" cols="30" rows="10" placeholder="Deskripsi"></textarea>
                            {{-- <input class="form-control" type="text" name="deskripsi" placeholder="Deskripsi" id="deskripsi"> --}}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Jumlah Stock</label>
                        <div class="col-md-3">
                            <input class="form-control" type="text" name="edit_stock" placeholder="Stock" id="edit_stock">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Harga</label>
                        <div class="col-md-4">
                            <input class="form-control" type="text" name="edit_harga_barang" placeholder="Harga Barang" id="edit_harga_barang">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Upload Produk</label>
                        <div class="col-md-10">
                            <input class="form-control" type="file" name="edit_foto" id="edit_foto">
                            <span class="text-danger" id="image-input-error"></span>
                        </div>
                        <div class="print-img" style="display:none" id="edit_display">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Update</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>