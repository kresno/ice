@extends('layouts.master_admin')

@push('header.style')
<!-- plugin css for this page -->
<link rel="{{ asset('vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
<!-- end plugin css for this page -->
@endpush

@section('content')
<nav class="page-breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Tables</a></li>
        <li class="breadcrumb-item active" aria-current="page">Data Musrenbang Desa</li>
    </ol>
</nav>

<div class="row">
    <div class="col-xl-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Pengusul Usulan Musrenbang Desa 5 terbanyak</h6>
                <canvas id="chartjsBarAsmas"></canvas>
            </div>
        </div>
    </div>
    <div class="col-xl-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Urusan Usulan Musrenbang Desa 5 terbanyak 2022</h6>
                <canvas id="chartjsBarUsulanAsmas"></canvas>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Data Tabel Asmas</h6>
                <p class="card-description">Berikut merupakan data tabel kegiatan berdasarkan Kepmendagri 050/3708.</p>
                <div class="table-responsive">
                    <table id="dataTableExample" class="table">
                        <thead>
                            <tr>
                                <th>Tahun</th>
                                <th>Kode</th>
                                <th>Pengusul</th>
                                <th>Profil</th>
                                <th>Urusan</th>
                                <th>Usulan</th>
                                <th>Permasalahan</th>
                                <th>Alamat</th>
                                <th>Kecamatan</th>
                                <th>Desa</th>
                                <th>Tujuan Perangkat Daerah</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($items as $item)
                            <tr>
                                <td>{{ $item->tahun }}</td>
                                <td>{{ $item->kode }}</td>
                                <td>{{ $item->pengusul }}</td>
                                <td>{{ $item->profil }}</td>
                                <td>{{ $item->urusan }}</td>
                                <td>{{ $item->usulan }}</td>
                                <td>{{ $item->permasalahan }}</td>
                                <td>{{ $item->alamat }}</td>
                                <td>{{ $item->kecamatan }}</td>
                                <td>{{ $item->desa }}</td>
                                <td>{{ $item->pd_awal }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('footer.javascript')
<!-- plugin js for this page -->
<script src="{{ asset('vendors/datatables.net/jquery.dataTables.js') }}"></script>
<script src="{{ asset('vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
<!-- end plugin js for this page -->
<script src="{{ asset('js/data-table.js') }}"></script>
<script src="{{ asset('vendors/chartjs/Chart.min.js') }}"></script>
<script>
    if ($('#chartjsBarAsmas').length) {
    new Chart($("#chartjsBarAsmas"), {
        type: 'bar',
        data: {
            labels: [<?php foreach($usulanterbanyak as $a): { echo '"' . $a->kecamatan . '",';} endforeach; ?>],
            datasets: [{
                label: "Banyak Usulan",
                backgroundColor: ["#b1cfec", "#7ee5e5", "#66d1d1", "#f77eb9", "#4d8af0"],
                data: [<?php foreach($usulanterbanyak as $b): { echo '"' . $b->banyak . '",';} endforeach; ?>]
            }]
        },
        options: {
            legend: {
                display: false
            },
        }
    });
}


if ($('#chartjsBarUsulanAsmas').length) {
    new Chart($("#chartjsBarUsulanAsmas"), {
        type: 'bar',
        data: {
            labels: [<?php foreach($masalahterbanyak as $c): { echo '"' . $c->urusan . '",';} endforeach; ?>],
            datasets: [{
                label: "Banyak Usulan",
                backgroundColor: ["#b1cfec", "#7ee5e5", "#66d1d1", "#f77eb9", "#4d8af0"],
                data: [<?php foreach($masalahterbanyak as $d): { echo '"' . $d->banyak . '",';} endforeach; ?>]
            }]
        },
        options: {
            legend: {
                display: false
            },
        }
    });
}
</script>

@endpush