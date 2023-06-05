@extends('layout.dashadmin')

@section('title','Dashboard')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Dashboard</h1>
<div class="d-flex flex-wrap">
    <div class="col-xl-3 col-md-4">
        <div class="card bg-dark text-white mb-4">
            <div class="card-body">Pelanggan</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-dark stretched-link" href="/Pelanggan">View Details</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-4">
        <div class="card bg-dark text-white mb-4">
            <div class="card-body">Konsumen</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-dark stretched-link" href="/konsumen">View Details</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-4">
        <div class="card bg-dark text-white mb-4">
            <div class="card-body">Distributor</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-dark stretched-link" href="/Distributor">View Details</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-4">
        <div class="card bg-dark text-white mb-4">
            <div class="card-body">Barang</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-dark stretched-link" href="/Barang">View Details</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-4">
        <div class="card bg-dark text-white mb-4">
            <div class="card-body">Transaksi</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-dark stretched-link" href="/Transaksi">View Details</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    </div>

</div>
</div>
<!-- End of Main Content -->
@endsection
