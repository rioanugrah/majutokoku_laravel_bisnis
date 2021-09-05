<div class="modal fade bs-example-modal-center" id="edit" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="edit_judul"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="update-upload-form" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Judul</label>
                        <div class="col-md-10">
                            <input class="form-control" type="hidden" name="edit_id" id="edit_id">
                            <input class="form-control" type="text" name="edit_title" placeholder="Judul" id="edit_title">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Link Url</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" name="edit_url" placeholder="Link Url" id="edit_url">
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
                        <label class="col-md-2 col-form-label">Tanggal Mulai</label>
                        <div class="col-md-3">
                            <input class="form-control" type="date" name="edit_mulai" id="edit_mulai">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Tanggal Sampai</label>
                        <div class="col-md-3">
                            <input class="form-control" type="date" name="edit_sampai" id="edit_selesai">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Status</label>
                        <div class="col-md-10">
                            <select name="edit_status" id="edit_status" class="form-control">
                                <option>-- Status --</option>
                                <option value="Aktif">Aktif</option>
                                <option value="Non Aktif">Non Aktif</option>
                            </select>
                            {{-- <input class="form-control" type="file" name="foto" id="foto">
                            <span class="text-danger" id="image-input-error"></span> --}}
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