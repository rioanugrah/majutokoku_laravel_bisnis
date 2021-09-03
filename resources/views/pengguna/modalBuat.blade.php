<div class="modal fade bs-example-modal-center" id="buat" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0">Form Pengguna</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="javascript:simpan()" method="post" id="data_simpan" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Name</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" name="name" placeholder="Nama" id="nama">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Email</label>
                        <div class="col-md-10">
                            <input class="form-control" type="email" name="email" placeholder="Email" id="email">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Akses</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" name="role" placeholder="Akses" id="akses">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>