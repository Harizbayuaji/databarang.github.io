<div class="modal fade" id="edit{{$item->kd_brg}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">EDIT DATA</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card-body">
                    <form action="{{ route('index.update',$item->kd_brg) }}" method="POST" enctype="multipart/form-data">
                        @method ('PUT')
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1">Kode Barang</label>
                            <input type="number" name="kd_brg" class="form-control" id="exampleInputEmail1 "
                                aria-describedby="emailHelp" value="{{ $item->kd_brg }}" disabled >
                            <div class="text-danger">
                                    <small>
                                    @error('kd_brg')
                                            {{ $message }}
                                        @enderror
                                    </small>
                                </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1">Nama Barang</label>
                            <input type="text" name="nama_brg" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" value="{{ $item->nama_brg}}">
                                <div class="text-danger">
                                    <small>
                                        @error('nama_brg')
                                            {{ $message }}
                                        @enderror
                                    </small>
                                </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1">Tipe Barang</label>
                            <select name="tipe_brg" id="" class="form-control validate" >
                                <option value="{{ $item->tipe_brg}}">{{ $item->tipe_brg}}</option>
                                <option value="Bok">Bok</option>
                                <option value="Pcs">Pcs</option>
                                <option value="Packs">Packs</option>
                            <option value="Slop">Slop</option>
                            </select>
                            <div class="text-danger">
                                <small>
                                    @error('tipe_brg')
                                        {{ $message }}
                                    @enderror
                                </small>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1">Jumlah Barang</label>
                            <input type="number" name="jumlah_brg" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" value="{{ $item->jumlah_brg}}">
                                <div class="text-danger">
                                    <small>
                                        @error('jumlah_brg')
                                            {{ $message }}
                                        @enderror
                                    </small>
                                </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1">Distributor</label>
                            <input type="text" name="distributor" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" value="{{ $item->distributor}}">
                                <div class="text-danger">
                                    <small>
                                        @error('distributor')
                                            {{ $message }}
                                        @enderror
                                    </small>
                                </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Tanggal Masuk</label>
                            <input type="date" name="tanggal_masuk" class="form-control" value="{{ $item->tanggal_masuk}}">
                            <div class="text-danger">
                                <small>
                                    @error('tanggal_masuk')
                                        {{ $message }}
                                    @enderror
                                </small>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1">Tanggal Keluar</label>
                            <input type="date" name="tanggal_keluar" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" value="{{ $item->tanggal_keluar}}">
                                <div class="text-danger">
                                    <small>
                                        @error('tanggal_keluar')
                                            {{ $message }}
                                        @enderror
                                    </small>
                                </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-danger">Reset</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
