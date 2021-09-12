<div class="modal fade bs-example-modal-center" id="edit" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0" id="edit_nama_menu"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="update-upload-form" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="edit_id" id="edit_id">
                <div class="modal-body">
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">Nama Menu</label>
                        <div class="col-md-3">
                            <input class="form-control" type="text" name="edit_menu" placeholder="Nama Menu" id="edit_menu">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">Link</label>
                        <div class="col-md-3">
                            <input class="form-control" type="text" name="edit_slug" placeholder="Link" id="edit_slug">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">Icon Menu</label>
                        <div class="col-md-3">
                            <input class="form-control" type="text" name="edit_icon_menu" placeholder="Icon Menu" id="edit_icon_menu">
                        </div>
                    </div>
                    @if (auth()->user()->role == 2)
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">Akses</label>
                        <div class="col-md-3">
                            <input type="text" name="edit_role_id" class="form-control" list="akses" id="edit_akses">
                            <datalist id="akses">
                                @foreach ($roles as $role)
                                    <option value="{{ $role->id }}">{{ $role->role }}</option>
                                @endforeach
                            </datalist>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">Aktifkan Create</label>
                        <div class="col-md-3">
                            <select name="edit_c" class="form-control" id="edit_c">
                                <option>-- Pilih --</option>
                                <option value="Y">Ya</option>
                                <option value="N">Tidak</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">Aktifkan Read</label>
                        <div class="col-md-3">
                            <select name="edit_r" class="form-control" id="edit_r">
                                <option>-- Pilih --</option>
                                <option value="Y">Ya</option>
                                <option value="N">Tidak</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">Aktifkan Update</label>
                        <div class="col-md-3">
                            <select name="edit_u" class="form-control" id="edit_u">
                                <option>-- Pilih --</option>
                                <option value="Y">Ya</option>
                                <option value="N">Tidak</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">Aktifkan Delete</label>
                        <div class="col-md-3">
                            <select name="edit_d" class="form-control" id="edit_d">
                                <option>-- Pilih --</option>
                                <option value="Y">Ya</option>
                                <option value="N">Tidak</option>
                            </select>
                        </div>
                    </div>
                    @endif
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Update</button>
                    <button class="btn btn-danger" data-dismiss="modal" aria-label="Close">Batal</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>