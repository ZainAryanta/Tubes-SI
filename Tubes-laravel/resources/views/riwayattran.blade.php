@extends('layout.dashadmin')

@section('title','Konsumen')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mt-2 mb-2 text-gray-800">Riwayat Transaksi</h1>

    <div class="card shadow mb-4">
        <div class="card-header py-3">

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="table-secondary ">
                            <tr>
                                <th>Nama</th>
                                <th>Total Pembayaran</th>
                                <th>Jumlah Transaksi</th>
                                <th>Tanggal</th>
                                <th>Jenis Transaksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tran as $kon)
                            <tr>
                                <td>{{$kon->nama}}</td>
                                <td>{{$kon->total}}</td>
                                <td>{{$kon->jumlah}}</td>
                                <td>{{$kon->tanggal}}</td>
                                <td>{{$kon->jenis}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- /.container-fluid -->
    </div>
</div>
    <!-- End of Main Content -->
    @endsection