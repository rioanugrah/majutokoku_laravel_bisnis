<div class="modal fade bs-example-modal-center" id="edit" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0">Edit Pengguna</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="javascript:update()" method="post" id="data_edit" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Name</label>
                        <div class="col-md-10">
                            <input class="form-control" type="hidden" name="edit_user" placeholder="Nama" id="edit_user">
                            <input class="form-control" type="text" name="edit_name" placeholder="Nama" id="edit_nama_user">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Email</label>
                        <div class="col-md-10">
                            <input class="form-control" type="email" name="edit_email" placeholder="Email" id="edit_email_user">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Akses</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" name="edit_akses" placeholder="Akses" id="edit_akses_user">
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