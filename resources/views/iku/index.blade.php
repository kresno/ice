@extends('layouts.master_admin')
@section('content')
<div class="row">
    <div class="col-md-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Halaman Progress IKU</h6>
                <p>Halaman Progress IKU masing-masing indikator.</p>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xl-4 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Progress IKU : Indeks Kerukunan Umat Beragama</h6>
                <canvas id="chartjsLine1"></canvas>
            </div>
        </div>
    </div>
    <div class="col-xl-4 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Progress IKU : Angka harapan hidup (AHH)</h6>
                <canvas id="chartjsLine2"></canvas>
            </div>
        </div>
    </div>
    <div class="col-xl-4 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Progress IKU : Angka Kematian Ibu</h6>
                <canvas id="chartjsLine3"></canvas>
            </div>
        </div>
    </div>
    <div class="col-xl-4 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Progress IKU : Angka Kematian Bayi</h6>
                <canvas id="chartjsLine4"></canvas>
            </div>
        </div>
    </div>
    <div class="col-xl-4 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Progress IKU : Indeks Pembangunan Gender (IPG)</h6>
                <canvas id="chartjsLine5"></canvas>
            </div>
        </div>
    </div>
    <div class="col-xl-4 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Progress IKU : Rata-rata Lama Sekolah (RLS) </h6>
                <canvas id="chartjsLine6"></canvas>
            </div>
        </div>
    </div>
    <div class="col-xl-4 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Progress IKU : Harapan Lama Sekolah (HLS)</h6>
                <canvas id="chartjsLine7"></canvas>
            </div>
        </div>
    </div>
    <div class="col-xl-4 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Progress IKU : Tingkat Kemiskinan</h6>
                <canvas id="chartjsLine8"></canvas>
            </div>
        </div>
    </div>
    <div class="col-xl-4 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Progress IKU : Persentase pemajuan kebudayaan</h6>
                <canvas id="chartjsLine9"></canvas>
            </div>
        </div>
    </div>
    <div class="col-xl-4 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Progress IKU : Tingkat Pengangguran Terbuka</h6>
                <canvas id="chartjsLine10"></canvas>
            </div>
        </div>
    </div>
    <div class="col-xl-4 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Progress IKU : Laju Pertumbuhan PDRB sektor Pertanian, Kelautan dan Perikanan</h6>
                <canvas id="chartjsLine11"></canvas>
            </div>
        </div>
    </div>
    <div class="col-xl-4 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Progress IKU : Skor Pola Pangan Harapan (PPH) Konsumsi</h6>
                <canvas id="chartjsLine12"></canvas>
            </div>
        </div>
    </div>
    <div class="col-xl-4 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Progress IKU : Laju pertumbuhan PDRB sektor pariwisata</h6>
                <canvas id="chartjsLine13"></canvas>
            </div>
        </div>
    </div>
    <div class="col-xl-4 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Progress IKU : Laju pertumbuhan investasi sektor agribisnis dan pariwisata</h6>
                <canvas id="chartjsLine14"></canvas>
            </div>
        </div>
    </div>
    <div class="col-xl-4 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Progress IKU : Persentase pelaku usaha naik kelas</h6>
                <canvas id="chartjsLine15"></canvas>
            </div>
        </div>
    </div>
    <div class="col-xl-4 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Progress IKU : Indeks kualitas lingkungan hidup</h6>
                <canvas id="chartjsLine16"></canvas>
            </div>
        </div>
    </div>
    <div class="col-xl-4 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Progress IKU : Cakupan pelayanan komunikasi dan informatika daerah</h6>
                <canvas id="chartjsLine17"></canvas>
            </div>
        </div>
    </div>
    <div class="col-xl-4 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Progress IKU : Persentase tingkat kemantapan kondisi jalan Kabupaten</h6>
                <canvas id="chartjsLine18"></canvas>
            </div>
        </div>
    </div>
    <div class="col-xl-4 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Progress IKU : Indeks Persentase Tingkat Kondisi Baik Jaringan Irigasi di Daerah Irigasi Kewenangan Kabupaten</h6>
                <canvas id="chartjsLine19"></canvas>
            </div>
        </div>
    </div>
    <div class="col-xl-4 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Progress IKU : Persentase kawasan permukiman kumuh yang tertata</h6>
                <canvas id="chartjsLine20"></canvas>
            </div>
        </div>
    </div>
    <div class="col-xl-4 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Progress IKU : Rasio Konektivitas Kabupaten</h6>
                <canvas id="chartjsLine21"></canvas>
            </div>
        </div>
    </div>
    <div class="col-xl-4 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Progress IKU : Indeks kepuasan masyarakat (IKM)</h6>
                <canvas id="chartjsLine22"></canvas>
            </div>
        </div>
    </div>
    <div class="col-xl-4 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Progress IKU : Indeks profesionalitas ASN</h6>
                <canvas id="chartjsLine23"></canvas>
            </div>
        </div>
    </div>
    <div class="col-xl-4 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Progress IKU : Opini BPK atas laporan keuangan Pemerintah Daerah Kabupaten Sukabumi</h6>
                <canvas id="chartjsLine24"></canvas>
            </div>
        </div>
    </div>
    <div class="col-xl-4 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Progress IKU : Nilai akuntabilitas kinerja daerah</h6>
                <canvas id="chartjsLine25"></canvas>
            </div>
        </div>
    </div>
    <div class="col-xl-4 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">Progress IKU : Indeks inovasi daerah</h6>
                <canvas id="chartjsLine26"></canvas>
            </div>
        </div>
    </div>
</div>
@endsection
@push('footer.javascript')
<script src="{{ asset('vendors/chartjs/Chart.min.js') }}"></script>

<script>
'use strict';

// Bar chart
if($('#chartjsBarPokir').length) {
  new Chart($("#chartjsBarPokir"), {
    type: 'bar',
    data: {
      labels: [ "Yudha S", "Paoji", "Sylvie", "Undang", "Oman"],
      datasets: [
        {
          label: "Population",
          backgroundColor: ["#b1cfec","#7ee5e5","#66d1d1","#f77eb9","#4d8af0"],
          data: [10,20,15,14,13]
        }
      ]
    },
    options: {
      legend: { display: false },
    }
  });
}

if ($('#chartjsLine1').length) {
    new Chart($('#chartjsLine1'), {
        type: 'line',
        data: {
            labels: [2022, 2023, 2024, 2025, 2026],
            datasets: [{
                data: [10, 12, 14, 16, 18],
                label: "Target",
                borderColor: "#7ee5e5",
                backgroundColor: "rgba(0,0,0,0)",
                fill: false
            }, {
                data: [11, 13, 12.5, 15, 20],
                label: "Realisasi",
                borderColor: "#f77eb9",
                backgroundColor: "rgba(0,0,0,0)",
                fill: false
            }]
        }
    });
}

if ($('#chartjsLine2').length) {
        new Chart($('#chartjsLine2'), {
            type: 'line',
            data: {
                labels: [2022, 2023, 2024, 2025, 2026],
                datasets: [{
                    data: [10, 12, 14, 16, 18],
                    label: "Target",
                    borderColor: "#7ee5e5",
                    backgroundColor: "rgba(0,0,0,0)",
                    fill: false
                }, {
                    data: [11, 13, 12.5, 15, 20],
                    label: "Realisasi",
                    borderColor: "#f77eb9",
                    backgroundColor: "rgba(0,0,0,0)",
                    fill: false
                }]
            }
        });
    }

    if ($('#chartjsLine3').length) {
        new Chart($('#chartjsLine3'), {
            type: 'line',
            data: {
                labels: [2022, 2023, 2024, 2025, 2026],
                datasets: [{
                    data: [10, 12, 14, 16, 18],
                    label: "Target",
                    borderColor: "#7ee5e5",
                    backgroundColor: "rgba(0,0,0,0)",
                    fill: false
                }, {
                    data: [11, 13, 12.5, 15, 20],
                    label: "Realisasi",
                    borderColor: "#f77eb9",
                    backgroundColor: "rgba(0,0,0,0)",
                    fill: false
                }]
            }
        });
    }
    
    if ($('#chartjsLine4').length) {
        new Chart($('#chartjsLine4'), {
            type: 'line',
            data: {
                labels: [2022, 2023, 2024, 2025, 2026],
                datasets: [{
                    data: [10, 12, 14, 16, 18],
                    label: "Target",
                    borderColor: "#7ee5e5",
                    backgroundColor: "rgba(0,0,0,0)",
                    fill: false
                }, {
                    data: [11, 13, 12.5, 15, 20],
                    label: "Realisasi",
                    borderColor: "#f77eb9",
                    backgroundColor: "rgba(0,0,0,0)",
                    fill: false
                }]
            }
        });
    }

    if ($('#chartjsLine4').length) {
        new Chart($('#chartjsLine4'), {
            type: 'line',
            data: {
                labels: [2022, 2023, 2024, 2025, 2026],
                datasets: [{
                    data: [10, 12, 14, 16, 18],
                    label: "Target",
                    borderColor: "#7ee5e5",
                    backgroundColor: "rgba(0,0,0,0)",
                    fill: false
                }, {
                    data: [11, 13, 12.5, 15, 20],
                    label: "Realisasi",
                    borderColor: "#f77eb9",
                    backgroundColor: "rgba(0,0,0,0)",
                    fill: false
                }]
            }
        });
    }

    if ($('#chartjsLine5').length) {
        new Chart($('#chartjsLine5'), {
            type: 'line',
            data: {
                labels: [2022, 2023, 2024, 2025, 2026],
                datasets: [{
                    data: [10, 12, 14, 16, 18],
                    label: "Target",
                    borderColor: "#7ee5e5",
                    backgroundColor: "rgba(0,0,0,0)",
                    fill: false
                }, {
                    data: [11, 13, 12.5, 15, 20],
                    label: "Realisasi",
                    borderColor: "#f77eb9",
                    backgroundColor: "rgba(0,0,0,0)",
                    fill: false
                }]
            }
        });
    }

</script>
@endpush