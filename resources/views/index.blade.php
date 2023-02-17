@extends('layout.template')
@section('title')
    BRUHH TABLE
@endsection
@section('content')
    @push('css')
    <link id="styleseet" href="{{ asset('template/dist/css/index.css')}}" rel="stylesheet"/>
    <link id="pagestyle" href="{{ asset('template/dist/css/bootstrap_icon.css') }}" rel="stylesheet" />
    <link id="pagestyle" href="{{ asset('template/dist/css/bootstrap.css') }}" rel="stylesheet" />
    <link id="pagestyle" href="{{ asset('template/dist/css/toastr.css') }}" rel="stylesheet" />
    <link id="pagestyle" href="{{ asset('template/dist/css/argon-dashboard.css?v=2.0.2') }}" rel="stylesheet" />
@endpush
<style>
    .modal-content {
        position:absolute;
        top: 11cm;
        left: 55%;
        transform: translate(-50%, -50%);
        color: rgb(255, 250, 250);
        background:rgba(0, 0, 0, 0.904);
        padding: 1% 5%;
        border-radius: 10px;
        box-shadow: 0 0 10px 5px #ffffff96;
        width: 90%;
    }
</style>

<body>
    <div class="content-wrapper">
        <div class="container">
            <a href="" data-toggle="modal" data-target="#exampleModal" class="btn btn-primary mt-3"><i
            class="bi bi-person-plus-fill"></i> TAMBAH</a>
            <div class="bc">
            <form action="index" method="get">
                <div class="row g-3 align-items-center mt-0 mb-2">
                    <div class="search_box">
                        <button class="search_btn"><i class="fa fa-search"></i></button>
                        <input type="text" name="search" class="input_search" id="exampleInputSearch"
                        placeholder="Search...">
                    </div>
                </div>
            </form>
            </div>
        </div>
            <div class="table-data">
                <div class="container">
                    <table class="table table-hover" >
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Kode Brg</th>
                                <th scope="col">Nama Brg</th>
                                <th scope="col">Tipe Brg</th>
                                <th scope="col">Jml Brg</th>
                                <th scope="col">Distributor</th>
                                <th scope="col">Tgl Masuk</th>
                                <th scope="col">Tgl Keluar</th>
                                <th scope="col">Aksi</th>
                            </tr>
                            <?PHP
                            $no = 1;
                            ?>
                            @foreach ($tampil as $item)
                        <tbody>
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$item->kd_brg}}</td>
                                <td>{{$item->nama_brg}}</td>
                                <td>{{$item->tipe_brg}}</td>
                                <td>{{$item->jumlah_brg}}</td>
                                <td>{{$item->distributor}}</td>
                                <td>{{$item->tanggal_masuk}}</td>
                                <td>{{$item->tanggal_keluar}}</td>
                                <td>
                                    <a href="#edit{{$item->kd_brg}}" class='btn btn-info'
                                    data-toggle="modal"><i class="bi bi-pencil-fill"></i></a>
                                    <a href="#" class="btn btn-danger delete" data-id="{{ $item->kd_brg }}"><i
                                    class="bi bi-trash2-fill"></i></a>
                                </td>
                            </tr>
                            @include('edit')
                            @endforeach
                        </tbody>
                    </table>
                    {{ $tampil->links() }}
                </div>
            </div>
    </div>
    {{-- modal-tambah --}}
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">TAMBAH DATA</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <form action='{{url("index") }}' method="post" enctype="multipart/form-data">
                            @method ('post')
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1">Kode Barang</label>
                                <input type="number" name="kd_brg" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
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
                                    aria-describedby="emailHelp">
                                    <div class="text-danger">
                                        <small>
                                            @error('nama_brg')
                                                {{ $message }}
                                            @enderror
                                        </small>
                                    </div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1">Tipe Barang</label>
                                <select name="tipe_brg" id="" class="form-control validate">
                                    <option value=""></option>
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
                                    aria-describedby="emailHelp">
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
                                    aria-describedby="emailHelp">
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
                                <input type="date" name="tanggal_masuk" class="form-control">
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
                                    aria-describedby="emailHelp">
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
    </div>
</body>
@endsection

@push('scripts')
<script src="{{asset('template/dist/js/bootstrap.js')}}"></script>

<script src="{{asset('template/dist/js/sweetalert.js')}}"></script>
<script src="{{asset('template/dist/js/jquery.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<script src="{{asset('template/dist/js/popper.js')}}"></script>

<script src="{{asset('template/dist/js/bootstrap_min.js')}}"></script>



<script>
    $('.delete').click(function() {
        var studentid = $(this).attr('data-id');
        swal({
                title: "Yakin?",
                text: "Kamu Akan Melupakan Dia",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    window.location = "/index/hapus/" + studentid + ""
                    swal("Anda Berhasil Melupakan Dia", {
                        icon: "success",
                    });
                }
            });
    });
    @if (Session::has('success'))
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.success("{{ session('success') }}");
    @endif
    </script>

@endpush
