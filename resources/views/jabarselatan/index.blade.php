@extends('layouts.master_admin')
@section('content')
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Ini Halaman Jabar Selatan</h6>
                <p class="card-description">Berikut Ringkasan 
                    <code>Progress Jabar Selatan Tahun Anggaran 2022</code>
                </p>
                <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Proyek</th>
                                <th>Progress</th>
                                <th>Output</th>
                                <th>Anggaran</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Beasiswa Pendidikan bagi siswa hafidz Al-Quran</td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-success"
                                            role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td>20 Orang</td>
                                <td>Rp. 400.000.000</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Peningkatan Kecakapan Hidup / Life Skill</td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger"
                                            role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td>100 Orang</td>
                                <td>Rp. 400.000.000</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Peningkatan BOP PAUD</td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning"
                                            role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td>100 Lembaga</td>
                                <td>Rp. 400.000.000</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Pelayanan Kesehatan Gratis di Puskesmas</td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary"
                                            role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td>47 Kecamatan</td>
                                <td>Rp. 400.000.000</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Pelayanan Kesehatan Keliling (Dokter Masuk Kampung)</td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger"
                                            role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td>47 Kecamatan</td>
                                <td>Rp. 400.000.000</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Pengembangan Pusat Budaya Berbasis Masyarakat (BUMI KURING: Sukabumi Cultural
                                    Building)</td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-info"
                                            role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td>1 Kecamatan</td>
                                <td>Rp. 400.000.000</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Pemberdayaan perempuan (PERAHU KERTAS: Perempuan Hebat untuk Keluarga Berkualitas)
                                </td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning"
                                            role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                </td>
                                <td>7 Kecamatan</td>
                                <td>Rp. 400.000.000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection