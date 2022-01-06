@extends('layouts.master_admin')

@push('header.style')
<!-- end plugin css for this page -->
<link rel="stylesheet" href="{{ asset('vendors/select2/select2.min.css') }}">

<!-- Layout styles -->
<link rel="stylesheet" href="{{ asset('css/demo_1/style.css') }}">
@endpush

@section('content')
<nav class="page-breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Tables</a></li>
        <li class="breadcrumb-item"><a href="#">Sub Kegiatan</a></li>
        <li class="breadcrumb-item active" aria-current="page">Tambah Sub Kegiatan</li>
    </ol>
</nav>

<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <form method="POST" enctype="multipart/form-data" action="{{ url('kegiatan.store') }}">
                    <div class="form-group">
                        <label>Perangkat Daerah</label>
                        <select id="opd" class="js-example-basic-single w-100" data-width="100%">
                            <option value="">-- Pilih Perangkat Daerah --</option>
                            @foreach($program as $key => $value)
                            <option value="{{ $key }}"
                                {{ old('program') == $key || !empty($item) && $item->opd_id == $key ? 'selected' : '' ? 'selected' : '' }}>
                                {{ $value }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Sub Kegiatan</label>
                        <select id="sub-kegiatan" class="js-example-basic-single w-100" data-width="100%">
                            <option value="">-- Pilih Sub Kegiatan --</option>
                            @foreach($subkegiatan as $key => $value)
                            <option value="{{ $key }}"
                                {{ old('subkegiatan') == $key || !empty($item) && $item->subkegiatan_id == $key ? 'selected' : '' ? 'selected' : '' }}>
                                {{ $value }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Pagu</label>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('footer.javascript')
<!-- end plugin js for this page -->
<script src="{{ asset('vendors/select2/select2.min.js') }}"></script>
<script src="{{ asset('js/select2.js') }}"></script>

<script>
$('#sub-kegiatan').select2({
    placeholder: "Pilih Sub Kegiatan"
});
$('#opd').select2({
    placeholder: "Pilih Perangkat Daerah"
});
</script>
@endpush