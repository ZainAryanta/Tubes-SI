@extends('layout.dashadmin')

@section('title','Konsumen')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mt-2 mb-2 text-gray-800">Data Penukaran</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">

            <div class="d-flex align-items-center">
                <!-- <a class="d-none py-2 m-2 d-sm-inline-block btn btn-sm btn-primary shadow-sm" href="#"><i
                        class="fas fa-download fa-sm text-white-50"></i> Generate
                    Report</a> -->
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
                                    <form action='/TukarPromo' method='POST'>
                                        @csrf

                                        <div class="form-group">
                                            <label for="jenisBarang1">Nama</label>
                                            <select class="form-control" name="mem">
                                                <option class="">- Silahkan Pilih -</option>
                                                @foreach ($pel as $items)
                                                <option value="{{ $items->nama}}">{{ $items->nama }}
                                                </option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="jenisBarang1">Nama Promo</label>
                                            <select class="form-control" name="prom">
                                                <option class="">- Silahkan Pilih -</option>
                                                @foreach ($data as $items)
                                                <option value="{{ $items->nama}}">{{ $items->nama }}
                                                </option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="hargaBarang1">Date Claim</label>
                                            <input type="date" class="form-control" id="hargaBarang1" name='date' />
                                        </div>

                                        <div class="form-group">
                                            <label for="jenisBarang1">Status</label>
                                            <select class="form-control" id="jenisBarang1" name='status'>
                                                <option>- Status Promo -</option>
                                                <option>Active</option>
                                                <option>Deactive</option>
                                            </select>
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

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="table-secondary ">
                            <tr>
                                <th>Nama Member</th>
                                <th>Nama Promo</th>
                                <th>Dateline Claim</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tukar as $kon)
                            <tr>
                                <td>{{$kon->nama_mem}}</td>
                                <td>{{$kon->nama_prom}}</td>
                                <td>{{$kon->date}}</td>
                                <td>{{$kon->status}}</td>
                                <td class='d-flex justify-content-center'>

                                    <!-- Action Delete  -->
                                    <span>
                                        <span type="button" class="badge badge-danger mt-2 py-2 px-4"
                                            data-toggle="modal" data-target="#hapus{{$kon->id}}">
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
                                                        <form action="/TukarPromo/{{ $kon->id }}" method="post">
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
