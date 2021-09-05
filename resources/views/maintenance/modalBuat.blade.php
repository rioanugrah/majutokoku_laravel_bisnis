<div class="modal fade bs-example-modal-center" id="buat" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0">Form Maintenance</h5>
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
                        <label class="col-md-2 col-form-label">Judul</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" name="title" placeholder="Judul" id="title">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Link Url</label>
                        <div class="col-md-10">
                            <input class="form-control" type="text" name="url" placeholder="Link Url" id="url">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Deskripsi</label>
                        <div class="col-md-10">
                            <textarea name="deskripsi" class="form-control" id="deskripsi" cols="30" rows="10" placeholder="Deskripsi"></textarea>
                            {{-- <input class="form-control" type="text" name="deskripsi" placeholder="Deskripsi" id="deskripsi"> --}}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Tanggal Mulai</label>
                        <div class="col-md-3">
                            <input class="form-control" type="date" name="mulai" id="mulai">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Tanggal Sampai</label>
                        <div class="col-md-3">
                            <input class="form-control" type="date" name="sampai" id="selesai">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label">Status</label>
                        <div class="col-md-10">
                            <select name="status" id="" class="form-control">
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
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
