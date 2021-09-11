<div class="modal fade bs-example-modal-center" id="buat" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0">Form Menu</h5>
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
                        <label class="col-md-3 col-form-label">Nama Menu</label>
                        <div class="col-md-3">
                            <input class="form-control" type="text" name="menu" placeholder="Nama Menu" id="menu">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">Link</label>
                        <div class="col-md-3">
                            <input class="form-control" type="text" name="slug" placeholder="Link" id="slug">
                        </div>
                    </div>
                    @if (auth()->user()->role == 2)
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">Akses</label>
                        <div class="col-md-3">
                            <input type="text" name="role_id" class="form-control" list="akses">
                            <datalist id="akses">
                                @foreach ($roles as $role)
                                    <option value="{{ $role->id }}">{{ $role->role }}</option>
                                @endforeach
                            </datalist>
                            {{-- <select name="c" class="form-control" id="">
                                <option>-- Pilih --</option>
                                <option value="Y">Ya</option>
                                <option value="T">Tidak</option>
                            </select> --}}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">Aktifkan Create</label>
                        <div class="col-md-3">
                            <select name="c" class="form-control" id="">
                                <option>-- Pilih --</option>
                                <option value="Y">Ya</option>
                                <option value="N">Tidak</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">Aktifkan Read</label>
                        <div class="col-md-3">
                            <select name="r" class="form-control" id="">
                                <option>-- Pilih --</option>
                                <option value="Y">Ya</option>
                                <option value="N">Tidak</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">Aktifkan Update</label>
                        <div class="col-md-3">
                            <select name="u" class="form-control" id="">
                                <option>-- Pilih --</option>
                                <option value="Y">Ya</option>
                                <option value="N">Tidak</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">Aktifkan Delete</label>
                        <div class="col-md-3">
                            <select name="d" class="form-control" id="">
                                <option>-- Pilih --</option>
                                <option value="Y">Ya</option>
                                <option value="N">Tidak</option>
                            </select>
                        </div>
                    </div>
                    @endif
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
