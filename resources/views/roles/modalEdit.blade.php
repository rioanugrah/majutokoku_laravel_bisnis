<div class="modal fade bs-example-modal-center" id="edit" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0">Edit Form Akses Pengguna</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="javascript:update()" method="post" id="data_edit" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Akses</label>
                        <div class="col-md-10">
                            <input class="form-control" type="hidden" name="id_role" id="edit_role">
                            <input class="form-control" type="text" name="role" placeholder="Nama Akses" id="edit_nama_akses">
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