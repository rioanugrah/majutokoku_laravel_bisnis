<div class="modal fade bs-example-modal-center" id="detail" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="detail_nama_barang"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {{-- <div class="form-group row">
                    <label class="col-md-2 col-form-label">Kode Barang</label>
                    <label class="col-md-3 col-form-label" id="detail_kode_barang"></label>
                </div> --}}
                <div class="form-group row">
                    <label class="col-md-2 col-form-label">Barcode</label>
                    <img class="detail_barcode"/>
                    {{-- <div id="detail_barcode"></div> --}}
                    {{-- <label class="col-md-10 col-form-label" id="detail_barang"></label> --}}
                </div>
                <div class="form-group row">
                    <label class="col-md-2 col-form-label">Nama Barang</label>
                    <label class="col-md-10 col-form-label" id="detail_barang"></label>
                </div>
                <div class="form-group row">
                    <label class="col-md-2 col-form-label">Kategori</label>
                    <label class="col-md-10 col-form-label" id="detail_kategori"></label>
                </div>
                <div class="form-group row">
                    <label class="col-md-2 col-form-label">Deskripsi</label>
                    <p class="col-md-10 col-form-label" id="detail_deskripsi"></p>
                </div>
                <div class="form-group row">
                    <label class="col-md-2 col-form-label">Jumlah Stock</label>
                    <label class="col-md-10 col-form-label" id="detail_stock"></label>
                </div>
                <div class="form-group row">
                    <label class="col-md-2 col-form-label">Harga</label>
                    <label class="col-md-10 col-form-label" id="detail_harga"></label>
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
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>