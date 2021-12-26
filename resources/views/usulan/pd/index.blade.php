@extends('layouts.master_admin')

@push('header.style')
<!-- plugin css for this page -->
<link rel="{{ asset('vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
<!-- end plugin css for this page -->
@endpush

@section('content')
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Ini Halaman Usulan Perangkat Daerah</h6>
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

@endpush