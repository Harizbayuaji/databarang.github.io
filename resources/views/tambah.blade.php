<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>~Tam~</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <h2 class="text-center mt-3">TAMBAH DATA</h2>
    <div class="row justify-content-center">
        <div class="col-8">
        <div class="card">
            <div class="card-body">
                <form action='{{route("index/create") }}' method="POST">
                    @method ('patch')
                    @csrf
                    <div class="mb-3">
                        <div class="text-danger">
                            <small>
                                @error('kd_brg')
                                    {{ $message }}
                                @enderror
                            </small>
                        </div>
                        <label for="exampleInputEmail1">Kode Barang</label>
                        <input type="number" name="kd_brg" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div
                    <div class="mb-3">
                        <div class="text-danger">
                            <small>
                                @error('nama_brg')
                                    {{ $message }}
                                @enderror
                            </small>
                        </div>
                        <label for="exampleInputEmail1">Nama Barang</label>
                        <input type="text" name="nama_brg" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div>
                    <div class="mb-3">
                        <div class="text-danger">
                            <small>
                                @error('tipe_brg')
                                    {{ $message }}
                                @enderror
                            </small>
                        </div>
                        <label for="exampleInputPassword1">Tipe Barang</label>
                        <select name="tipe_brg" id="" class="form-control validate" required>
                            <option value=""></option>
                            <option value="Bok">Bok</option>
                            <option value="Pcs">Pcs</option>
                            <option value="Packs">Packs</option>
                            <option value="Slop">Slop</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <div class="text-danger">
                            <small>
                                @error('jumlah_brg')
                                    {{ $message }}
                                @enderror
                            </small>
                        </div>
                        <label for="exampleInputEmail1" class="form-label">Jumlah Barang</label>
                        <input type="file" name="jumlah_brg" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <div class="text-danger">
                            <small>
                                @error('distributor')
                                    {{ $message }}
                                @enderror
                            </small>
                        </div>
                        <label for="exampleInputEmail1" class="form-label">Distributor</label>
                        <input type="file" name="distributor" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1">tanggal_masuk</label>
                        <input type="date" name="tanggal_masuk" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tanggal Keluar</label>
                        <input type="date" name="tanggal_keluar" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                </form>
            </div>
        </div>
        </div>
    </div>
    </div>
</body>

</html>
