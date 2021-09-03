<div class="modal fade bs-example-modal-center" id="showDetail" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="detailKategori"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
                <div class="modal-body">
                    <table class="table table-bordered dt-responsive nowrap detail-datatable" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>Kategori Id</th>
                                <th>Sub Kategori</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                    {{-- <div class="form-group row">
                        <label class="col-md-2 col-form-label">Akses</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" readonly placeholder="Nama Akses" id="detail_nama_akses">
                        </div>
                    </div> --}}
                </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>