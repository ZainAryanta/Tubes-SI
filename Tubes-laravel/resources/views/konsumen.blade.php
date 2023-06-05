@extends('layout.dashadmin')

@section('title','Konsumen')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mt-2 mb-2 text-gray-800">Data Konsumen</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">

            <div class="d-flex align-items-center">
                <a class="d-none py-2 m-2 d-sm-inline-block btn btn-sm btn-primary shadow-sm" href="/pdf-konsumen"><i
                        class="fas fa-download fa-sm text-white-50"></i> Generate
                    Report</a>
                <!-- btn Tambah Barang -->
                <div>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#barang">
                        Input Data
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="barang" tabindex="-1" aria-labelledby="barangLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="barangLabel">
                                        Input Data
                                    </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action='/konsumen' method='POST'>
                                        @csrf

                                        <div class="form-group">
                                            <label for="inputNama1">Nama</label>
                                            <input type="text" class="form-control" id="inputNama1" name='nama' />
                                        </div>

                                        <div class="form-group">
                                            <label for="inputNama1">Email</label>
                                            <input type="text" class="form-control" id="inputNama1" name='email' />
                                        </div>

                                        <div class="form-group">
                                            <label for="inputNama1">No. WA</label>
                                            <input type="text" class="form-control" id="inputNama1" name='telp' />
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                Close
                                            </button>
                                            <button type="submit" class="btn btn-primary">
                                                Save Data
                                            </button>
                                        </div>

                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- AKhir btn Tambah Barang -->
            </div>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="table-secondary text-center ">
                        <tr>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>No.Telpon</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($konsumen as $kon)
                        <tr>
                            <td>{{$kon->nama}}</td>
                            <td>{{$kon->email}}</td>
                            <td>{{$kon->telp}}</td>
                            <td class='d-flex justify-content-center'>

                                <!-- Action Update -->
                                <span class='mx-2'>
                                    <!-- Button trigger modal -->
                                    <span type="button" class="badge badge-success mt-2 py-2 px-4 d-inline"
                                        data-toggle="modal" data-target="#barang{{$kon->id}}">
                                        Edit
                                    </span>

                                    <!-- Modal -->
                                    <div class="modal fade" id="barang{{$kon->id}}" tabindex="-1"
                                        aria-labelledby="barangLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="barangLabel">
                                                        Edit Data {{$kon->id}}
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="/konsumen/{{ $kon->id }}" method="POST">
                                                        @method('PUT')
                                                        @csrf

                                                        <div class="form-group">
                                                            <label for="inputNama1">Nama</label>
                                                            <input type="text" class="form-control" id="inputNama1"
                                                                name='nama' value='{{$kon->nama}}' />
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="inputNama1">Email</label>
                                                            <input type="text" class="form-control" id="inputNama1"
                                                                name='email' value='{{$kon->email}}' />
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="inputNama1">No. WA</label>
                                                            <input type="text" class="form-control" id="inputNama1"
                                                                name='telp' value='{{$kon->telp}}' />
                                                        </div>

                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">
                                                                Close
                                                            </button>
                                                            <button type="submit" class="btn btn-primary">
                                                                Save changes
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </span>
                                <!-- Akhir Update-->

                                <!-- Action Delete  -->
                                <span>
                                    <span type="button" class="badge badge-danger mt-2 py-2 px-4" data-toggle="modal"
                                        data-target="#hapus{{$kon->id}}">
                                        Delete
                                    </span>
                                    <div class="modal fade" id="hapus{{$kon->id}}" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">
                                                        Hapus 1
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <h5>Anda Yakin Ingin Menghapus?</h5>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">
                                                        Batal
                                                    </button>
                                                    <form action="/konsumen/{{ $kon->id }}" method="post">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button type="sumbit" class="btn btn-danger">Hapus</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </span>
                                <!-- Akhir Action Delete -->

                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- /.container-fluid -->
</div>

<!-- End of Main Content -->

@endsection
