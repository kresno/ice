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
        <li class="breadcrumb-item active" aria-current="page">Data Sasaran</li>
    </ol>
</nav>

<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Data Tabel Sasaran</h6>
                <p class="card-description">Berikut merupakan data tabel sasaran berdasarkan RPJMD 2021-2026.</p>
                <div class="table-responsive">
                    <table id="dataTableExample" class="table">
                        <thead>
                            <tr>
                                <th>Nomor</th>
                                <th>Tujuan ke-</th>
                                <th>Nama</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($items as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->tujuan_id }}</td>
                                <td>{{ $item->nama }}</td>
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
@endpush