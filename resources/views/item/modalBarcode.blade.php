<div class="modal fade bs-example-modal-center" id="modalBarcode" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0">Download Barcode</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <form action="{{ route('item.cetakBarcode') }}" method="post">
                        @csrf
                        <label class="col-form-label">Cari Barcode</label>
                        <input type="text" name="cari_barcode" class="form-control" placeholder="Cari Barcode">
                        <label class="col-form-label">Jumlah Cetak</label>
                        <input type="number" name="jumlah_cetak" class="form-control" placeholder="Jumlah Cetak">
                        <div>
                            <input type="submit" class="btn btn-primary" value="Download">
                        </div>
                    </form>
                        <hr>
                        <label class="col-form-label">Download All Barcode</label>
                        <div>
                            <input type="submit" class="btn btn-primary" value="Download">
                        </div>
                    </div>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>