<div class="modal fade bs-example-modal-center" id="buat" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title mt-0">Form Kategori Menu</h5>
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
                        <label class="col-md-3 col-form-label">Menu Kategori</label>
                        <div class="col-md-3">
                            <input class="form-control" type="text" name="menu_kategori" placeholder="Menu Kategori">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">Menu</label>
                        <div class="col-md-3">
                            <select name="menu_id" class="form-control" id="">
                                <option>-- Pilih Menu --</option>
                                @foreach ($menus as $m)
                                    <option value="{{ $m->id }}">{{ $m->menu }}</option>
                                @endforeach
                            </select>
                            {{-- <input class="form-control" type="text" name="menu_kategori" placeholder="Menu Kategori"> --}}
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
